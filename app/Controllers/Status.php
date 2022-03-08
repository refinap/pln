<?php

namespace App\Controllers;

use App\Models\apjModel;
use App\Models\giModel;
use App\Models\incomingModel;
use App\Models\cubicleModel;

class Status extends BaseController
{
    protected $statusModel;
    public function __construct()
    {
        #$this->statusModel = new StatusModel();
        $this->apjModel = new apjModel();
        $this->giModel = new giModel();
        $this->incomingModel = new incomingModel();
        $this->cubicleModel = new cubicleModel();
    }

    public function index()
    {
        #$status = $this->statusModel->findAll();
        #$apj = $this->apjModel->findAll();
        $apj = $this->apjModel->where('APJ_DCC IS NOT NULL', null, false)->findAll();
        $gi = $this->giModel->findAll();
        #$gi = $this->giModel->where('APJ_ID', 1)->findAll();
        $incoming = $this->incomingModel->findAll();
        #$incoming = $this->incomingModel->where('GARDU_INDUK_ID', 2)->findAll();
        #$cubicle = $this->cubicleModel->findAll();
        #$cubicle = $this->cubicleModel->where('INCOMING_ID', 4)->orLike('INCOMING_ID', 6)->findAll();
        $cubicle = $this->cubicleModel->where('INCOMING_ID', 4)->findAll();

        $data = [
            'title' => 'Status Realtime SCADA',
            #'status' => $status,
            'apj' => $apj,
            'gi' => $gi,
            'incoming' => $incoming,
            'cubicle' => $cubicle
        ];

        return view('status/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data'
        ];

        return view('status/create', $data);
    }

    public function save()
    {
        $this->statusModel->save([
            'Kode' => $this->request->getVar('Kode'),
            'nama_trafo' => $this->request->getVar('nama_trafo'),
            'nama_pmt' => $this->request->getVar('nama_pmt')
        ]);

        return redirect()->to('/status');
    }

    public function power()
    {
        $stat = $this->request->getVar('status');
        if ($stat = 0) {
            $stat = 1;
        } else {
            $stat = 0;
        }

        $id = $this->request->getVar('statusId');

        $this->statusModel->update($id, [
            'status' => $stat
        ]);
        return redirect()->to('/index');
    }
}
