<?php

namespace App\Controllers;

use App\Models\apjModel;

class Status extends BaseController
{
    protected $statusModel;
    public function __construct()
    {
        #$this->statusModel = new StatusModel();
        $this->apjModel = new apjModel();
    }

    public function index()
    {
        #$status = $this->statusModel->findAll();
        $apj = $this->apjModel->where('APJ_DCC IS NOT NULL', null, false)->findAll();

        #$apj = $this->apjModel->findAll();
        $data = [
            #'title' => 'Status Realtime SCADA',
            #'status' => $status,
            'apj' => $apj
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
