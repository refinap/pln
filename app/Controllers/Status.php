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
        $this->cubicleModel = new cubicleModel();
    }

    public function index()
    {
        #$status = $this->statusModel->findAll();

        $apj = $this->apjModel->where('APJ_DCC IS NOT NULL', null, false)->get()->getResult();
        foreach ($apj as $key => $item) {
            $gi = $this->giModel->where('APJ_ID', $item->APJ_ID)->findAll();
            // nak misal nmeh nambah incoming garik conto iki wae


            $apj[$key]->gi = $gi;
            // $apj[$key]->incoming = $incoming; nggawe varibale podo kyk $gi;
        };

        $gi = $this->giModel->get()->getResult();
        foreach ($gi as $key => $item) {
            $incoming = $this->incomingModel->where('GARDU_INDUK_ID', $item->GARDU_INDUK_ID)->findAll();
            $gi[$key]->incoming = $incoming;
        };

        $incoming = $this->incomingModel->findAll();
        $cubicle = $this->cubicleModel->findAll();



        $data = [
            'title' => 'Status Realtime SCADA',
            'apj' => $apj, //incudle data gi
            'gi' => $gi,
            // ngisor iki berarti ora kanggo
            'incoming' => $incoming,
            'cubicle' => $cubicle
        ];

        return view('status/index', $data);
    }
}
