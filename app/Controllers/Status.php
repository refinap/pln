<?php

namespace App\Controllers;

use App\Models\apjModel;
use App\Models\giModel;
use App\Models\incomingModel;
use App\Models\cubicleModel;

class Status extends BaseController
{
    protected $statusModel;
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
        #$this->statusModel = new StatusModel();
        $this->apjModel = new apjModel();
        $this->giModel = new giModel();
        $this->incomingModel = new incomingModel();
        $this->cubicleModel = new cubicleModel();
    }

    public function index()
    {
        #$status = $this->statusModel->findAll();

        $apj = $this->apjModel->where('APJ_DCC IS NOT NULL', null, false)->get()->getResult();
        foreach ($apj as $key => $item) {
            $gi = $this->giModel->where('APJ_ID', $item->APJ_ID)->findAll();
            // nak misal nmeh nambah incoming garik conto iki wae
            // get data gardu induk dan incoming

            foreach ($gi as $gi_keys => $gi_items) {
                $incoming = $this->incomingModel
                    ->where('GARDU_INDUK_ID', $gi_items['GARDU_INDUK_ID'])->findAll();

                // get data cubicle
                foreach ($incoming as $incoming_keys => $incoming_items) {
                    $cubicle = $this->cubicleModel
                        ->where('INCOMING_ID', $incoming_items['INCOMING_ID'])->findAll();
                    $incoming[$incoming_keys]['cubicle'] = $cubicle;
                };
                $gi[$gi_keys]['incoming'] = $incoming;
            };
            $apj[$key]->gi = $gi;
        };


        // return $this->response->setJSON($apj);
        // exit;

        $data = [
            'title' => 'Status Realtime SCADA',
            'apj' => $apj,
            'incoming' => $incoming
        ];

        return view('status/index', $data);
    }
}
