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
        $this->apjModel = new apjModel();
        $this->giModel = new giModel();
        $this->incomingModel = new incomingModel();
        $this->cubicleModel = new cubicleModel();
    }

    public function index()
    {
        $apj = $this->apjModel->where('APJ_DCC IS NOT NULL', null, false)->get()->getResult();
        foreach ($apj as $key => $item) {
            $gi = $this->giModel->where('APJ_ID', $item->APJ_ID)->findAll();

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

        // if (empty($data['status'])) {
        //     throw new \codeigniter\exceptions\pagenotfoundexception('apj' . 'incoming' . 'tidak ditemukan.');
        // }

        return view('status/index', $data);
    }


    // AJAX CLASS
    // SIMPLE API => ARRRAY ORA JSON
    //buat nampilin gi sesuai dengan area (up3)
    public function cekstatus($APJ_ID)
    {
        $gi = $this->giModel->where('APJ_ID', $APJ_ID)->findAll();
        $data = [
            'gi' => $gi
        ];

        return $this->response->setJSON($data);
    }

    // SIMPLE API => ARRRAY ORA JSON
    public function cekgi($GARDU_INDUK_ID)
    {

        $statusgi = array(
            'id'    => $GARDU_INDUK_ID,
            'nama' => "ikan"
        );

        return $this->response->setJSON($statusgi);
    }


    public function tambah()
    {
        $apj = $this->apjModel->where('APJ_DCC IS NOT NULL', null, false)->get()->getResult();
        $data = [
            'title' => 'Tambah Data',
            'apj' => $apj
        ];
        return view('status/tambah', $data);
    }


    public function save()
    {
        $this->apjModel->save([
            'APJ_NAMA' => $this->request->getvar('Area')
        ]);
        $this->cubicleModel->save([
            'CUBICLE_NAME' => $this->request->getvar('cubicle')
        ]);
        $this->giModel->save([
            'GARDU_INDUK_NAMA' => $this->request->getvar('Gardu_induk')
        ]);
        $this->incomingModel->save([
            'MERK_TRAFO' => $this->request->getvar('trafo')
        ]);
        return redirect()->to('/status');
    }
}
