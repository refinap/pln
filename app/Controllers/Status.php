<?php

namespace App\Controllers;

use App\Models\apjModel;
use App\Models\giModel;
use App\Models\incomingModel;
use App\Models\cubicleModel;

class Status extends BaseController
{
    protected $statusModel;
    protected $cubicleModel;
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
        $incoming = $this->incomingModel->where('GARDU_INDUK_ID', $GARDU_INDUK_ID)->findAll();
        $data = [
            'incoming'    => $incoming
        ];

        return $this->response->setJSON($data);
    }

    public function cekincoming($INCOMING_ID)
    {
        $cubicle = $this->cubicleModel->where('INCOMING_ID', $INCOMING_ID)->findAll();
        $data = [
            'cubicle'    => $cubicle
        ];

        return $this->response->setJSON($data);
    }

    public function getTrafo($id_gi)
    {
        $data_trafo = $this->incomingModel->where('GARDU_INDUK_ID', $id_gi)->findAll();
        $data = [
            'trafo'    => $data_trafo
        ];

        return $this->response->setJSON($data);
    }


    public function tambah()
    {
        $apj = $this->apjModel->where('APJ_DCC IS NOT NULL', null, false)->get()->getResult();
        $data = [
            'title' => 'Tambah Data Cubicle',
            'apj' => $apj
        ];
        return view('status/tambah', $data);
    }


    public function save()
    {
        $this->apjModel->save([
            'APJ_NAMA' => $this->request->getvar('Area')
        ]);
        $this->giModel->save([
            'GARDU_INDUK_NAMA' => $this->request->getvar('Gardu_Induk')
        ]);
        $this->incomingModel->save([
            'MERK_TRAFO' => $this->request->getvar('Trafo')
        ]);
        $this->cubicleModel->save([
            'APJ_ID' => $this->request->getvar('Cubicle'),
            'SUPPLY_APJ' => $this->request->getvar('Cubicle'),
            'id_gi' => $this->request->getvar('Cubicle'),
            'CUBICLE_NAME' => $this->request->getvar('Cubicle'),
            'CUBICLE_TYPE' => $this->request->getvar('Cubicle'),
            'OPERATION_TYPE' => $this->request->getvar('Cubicle'),
            'KETERANGAN' => $this->request->getvar('Cubicle'),
            'RELAY' => $this->request->getvar('Cubicle'),
            'MERK_RELAY' => $this->request->getvar('Cubicle'),
            'NO_SERI_RELAY' => $this->request->getvar('Cubicle'),
            'METER' => $this->request->getvar('Cubicle'),
            'MERK_METER' => $this->request->getvar('Cubicle'),
            'NO_SERI_METER' => $this->request->getvar('Cubicle'),
            'MERK_IO' => $this->request->getvar('Cubicle'),
            'NO_SERI_IO' => $this->request->getvar('Cubicle'),
            'MERK_INTERFACE' => $this->request->getvar('Cubicle'),
            'NO_SERI_INTERFACE' => $this->request->getvar('Cubicle'),
            'MERK_PS' => $this->request->getvar('Cubicle'),
            'SETTIG_CT' => $this->request->getvar('Cubicle'),
            'SETTING_PT' => $this->request->getvar('Cubicle'),
            'MERK' => $this->request->getvar('Cubicle'),
            'MERK_CUBICLE' => $this->request->getvar('Cubicle'),
            'NO_SERI' => $this->request->getvar('Cubicle'),
            'DIMENSI' => $this->request->getvar('Cubicle'),
            'RNR' => $this->request->getvar('Cubicle'),
            'TAHUN_OPERASI' => $this->request->getvar('Cubicle'),
            'OCR_TD' => $this->request->getvar('Cubicle'),
            'OCR_TMS_TD' => $this->request->getvar('Cubicle'),
            'OCR_CURVA' => $this->request->getvar('Cubicle'),
            'OCR_INST' => $this->request->getvar('Cubicle'),
            'OCR_T_INST' => $this->request->getvar('Cubicle'),
            'GFR_TD' => $this->request->getvar('Cubicle'),
            'GFR_TMS_TD' => $this->request->getvar('Cubicle'),
            'GFR_CURVA' => $this->request->getvar('Cubicle'),
            'GFR_INST' => $this->request->getvar('Cubicle'),
            'GFR_T_INST' => $this->request->getvar('Cubicle'),
            'UPJ_ID' => $this->request->getvar('Cubicle'),
            'UPJ_ID2' => $this->request->getvar('Cubicle'),
            'OCR_HS1' => $this->request->getvar('Cubicle'),
            'OCR_HS2' => $this->request->getvar('Cubicle'),
            'OCR_T_HS2' => $this->request->getvar('Cubicle'),
            'GFR_HS1' => $this->request->getvar('Cubicle'),
            'GFR_T_HS1' => $this->request->getvar('Cubicle'),
            'GFR_HS2' => $this->request->getvar('Cubicle'),
            'GFR_T_HS2' => $this->request->getvar('Cubicle'),
            'USER_UPDATE' => $this->request->getvar('Cubicle'),
            'LAST_UPDATE' => $this->request->getvar('Cubicle'),
            'IA' => $this->request->getvar('Cubicle'),
            'IA_TIME' => $this->request->getvar('Cubicle'),
            'IB' => $this->request->getvar('Cubicle'),
            'IB_TIME' => $this->request->getvar('Cubicle'),
            'IC' => $this->request->getvar('Cubicle'),
            'IC_TIME' => $this->request->getvar('Cubicle'),
            'IN' => $this->request->getvar('Cubicle'),
            'IN_TIME' => $this->request->getvar('Cubicle'),
            'IA2' => $this->request->getvar('Cubicle'),
            'IA2_TIME' => $this->request->getvar('Cubicle'),
            'IB2' => $this->request->getvar('Cubicle'),
            'IB2_TIME' => $this->request->getvar('Cubicle'),
            'IC2' => $this->request->getvar('Cubicle'),
            'IC2_TIME' => $this->request->getvar('Cubicle'),
            'IN2' => $this->request->getvar('Cubicle'),
            'IN2_TIME' => $this->request->getvar('Cubicle'),
            'VLL' => $this->request->getvar('Cubicle'),
            'VLL_TIME' => $this->request->getvar('Cubicle'),
            'KW' => $this->request->getvar('Cubicle'),
            'KW_TIME' => $this->request->getvar('Cubicle'),
            'PF' => $this->request->getvar('Cubicle'),
            'PF_TIME' => $this->request->getvar('Cubicle'),
            'IFA' => $this->request->getvar('Cubicle'),
            'IFA_TIME' => $this->request->getvar('Cubicle'),
            'IFB' => $this->request->getvar('Cubicle'),
            'IFB_TIME' => $this->request->getvar('Cubicle'),
            'IFC' => $this->request->getvar('Cubicle'),
            'IFC_TIME' => $this->request->getvar('Cubicle'),
            'IFN' => $this->request->getvar('Cubicle'),
            'IFN_TIME' => $this->request->getvar('Cubicle'),
            'SCB' => $this->request->getvar('Cubicle'),
            'SCB_TIME' => $this->request->getvar('Cubicle'),
            'SLR' => $this->request->getvar('Cubicle'),
            'SLR_TIME' => $this->request->getvar('Cubicle'),
            'SRNR' => $this->request->getvar('Cubicle'),
            'SRNR_TIME' => $this->request->getvar('Cubicle'),
            'SESW' => $this->request->getvar('Cubicle'),
            'SESW_TIME' => $this->request->getvar('Cubicle'),
            'SCBP' => $this->request->getvar('Cubicle'),
            'SCBP_TIME' => $this->request->getvar('Cubicle'),
        ]);
        return redirect()->to('/status');
    }
    public function informasi($id)
    {
        $cubicle = $this->cubicleModel
            ->where('OUTGOING_ID', $id)->limit(15)
            ->findAll();
        $data = [
            'title' => 'Informasi',
            'cubicle' => $cubicle
        ];
        // $cubicleModel = new \app\models\cubicleModel();

        return view('status/informasi', $data);
    }
}
