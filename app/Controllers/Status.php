<?php

namespace App\Controllers;

use App\Models\apjModel;
use App\Models\giModel;
use App\Models\incomingModel;
use App\Models\cubicleModel;
use Config\Services;

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
        // session();
        $apj = $this->apjModel->where('APJ_DCC IS NOT NULL', null, false)->get()->getResult();
        $data = [
            'title' => 'Tambah Data Cubicle',
            'apj' => $apj,
            'validation' => \Config\Services::validation()
        ];
        return view('status/tambah', $data);
    }


    public function save()
    {
        // validasi input
        if (!$this->validate([
            'APJ_ID' => 'required',
            'INCOMING_ID' => 'required',
            'CUBICLE_NAME' => 'required',
            'CUBICLE_TYPE' => 'required',
            'KETERANGAN' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/status/tambah')->withInput()->with('validation', $validation);
        }


        $this->cubicleModel->save([
            'APJ_ID' => $this->request->getvar('APJ_ID'),
            'SUPPLY_APJ' => $this->request->getvar('SUPPLY_APJ'),
            'INCOMING_ID' => $this->request->getvar('INCOMING_ID'),
            'CUBICLE_NAME' => $this->request->getvar('CUBICLE_NAME'),
            'CUBICLE_TYPE' => $this->request->getvar('CUBICLE_TYPE'),
            'OPERATION_TYPE' => $this->request->getvar('OPERATION_TYPE'),
            'KETERANGAN' => $this->request->getvar('KETERANGAN'),
            'RELAY' => $this->request->getvar('RELAY'),
            'MERK_RELAY' => $this->request->getvar('MERK_RELAY'),
            'NO_SERI_RELAY' => $this->request->getvar('NO_SERI_RELAY'),
            'METER' => $this->request->getvar('METER'),
            'MERK_METER' => $this->request->getvar('MERK_METER'),
            'NO_SERI_METER' => $this->request->getvar('NO_SERI_METER'),
            'MERK_IO' => $this->request->getvar('MERK_IO'),
            'NO_SERI_IO' => $this->request->getvar('NO_SERI_IO'),
            'MERK_INTERFACE' => $this->request->getvar('MERK_INTERFACE'),
            'NO_SERI_INTERFACE' => $this->request->getvar('NO_SERI_INTERFACE'),
            'MERK_PS' => $this->request->getvar('MERK_PS'),
            'SETTIG_CT' => $this->request->getvar('SETTIG_CT'),
            'SETTING_PT' => $this->request->getvar('SETTING_PT'),
            'MERK' => $this->request->getvar('MERK'),
            'MERK_CUBICLE' => $this->request->getvar('MERK_CUBICLE'),
            'NO_SERI' => $this->request->getvar('NO_SERI'),
            'DIMENSI' => $this->request->getvar('DIMENSI'),
            'RNR' => $this->request->getvar('RNR'),
            'TAHUN_OPERASI' => $this->request->getvar('TAHUN_OPERASI'),
            'OCR_TD' => $this->request->getvar('OCR_TD'),
            'OCR_TMS_TD' => $this->request->getvar('OCR_TMS_TD'),
            'OCR_CURVA' => $this->request->getvar('OCR_CURVA'),
            'OCR_INST' => $this->request->getvar('OCR_INST'),
            'OCR_T_INST' => $this->request->getvar('OCR_T_INST'),
            'GFR_TD' => $this->request->getvar('GFR_TD'),
            'GFR_TMS_TD' => $this->request->getvar('GFR_TMS_TD'),
            'GFR_CURVA' => $this->request->getvar('GFR_CURVA'),
            'GFR_INST' => $this->request->getvar('GFR_INST'),
            'GFR_T_INST' => $this->request->getvar('GFR_T_INST'),
            'UPJ_ID' => $this->request->getvar('UPJ_ID'),
            'UPJ_ID2' => $this->request->getvar('UPJ_ID2'),
            'OCR_HS1' => $this->request->getvar('OCR_HS1'),
            'OCR_HS2' => $this->request->getvar('OCR_HS2'),
            'OCR_T_HS2' => $this->request->getvar('OCR_T_HS2'),
            'GFR_HS1' => $this->request->getvar('GFR_HS1'),
            'GFR_T_HS1' => $this->request->getvar('GFR_T_HS1'),
            'GFR_HS2' => $this->request->getvar('GFR_HS2'),
            'GFR_T_HS2' => $this->request->getvar('GFR_T_HS2'),
            'USER_UPDATE' => $this->request->getvar('USER_UPDATE'),
            'LAST_UPDATE' => $this->request->getvar('LAST_UPDATE'),
            'IA' => $this->request->getvar('IA'),
            'IA_TIME' => $this->request->getvar('IA_TIME'),
            'IB' => $this->request->getvar('IB'),
            'IB_TIME' => $this->request->getvar('IB_TIME'),
            'IC' => $this->request->getvar('IC'),
            'IC_TIME' => $this->request->getvar('IC_TIME'),
            'IN' => $this->request->getvar('IN'),
            'IN_TIME' => $this->request->getvar('IN_TIME'),
            'IA2' => $this->request->getvar('IA2'),
            'IA2_TIME' => $this->request->getvar('IA2_TIME'),
            'IB2' => $this->request->getvar('IB2'),
            'IB2_TIME' => $this->request->getvar('IB2_TIME'),
            'IC2' => $this->request->getvar('IC2'),
            'IC2_TIME' => $this->request->getvar('IC2_TIME'),
            'IN2' => $this->request->getvar('IN2'),
            'IN2_TIME' => $this->request->getvar('IN2_TIME'),
            'VLL' => $this->request->getvar('VLL'),
            'VLL_TIME' => $this->request->getvar('VLL_TIME'),
            'KW' => $this->request->getvar('KW'),
            'KW_TIME' => $this->request->getvar('KW_TIME'),
            'PF' => $this->request->getvar('PF'),
            'PF_TIME' => $this->request->getvar('PF_TIME'),
            'IFA' => $this->request->getvar('IFA'),
            'IFA_TIME' => $this->request->getvar('IFA_TIME'),
            'IFB' => $this->request->getvar('IFB'),
            'IFB_TIME' => $this->request->getvar('IFB_TIME'),
            'IFC' => $this->request->getvar('IFC'),
            'IFC_TIME' => $this->request->getvar('IFC_TIME'),
            'IFN' => $this->request->getvar('IFN'),
            'IFN_TIME' => $this->request->getvar('IFN_TIME'),
            'SCB' => $this->request->getvar('SCB'),
            'SCB_TIME' => $this->request->getvar('SCB_TIME'),
            'SLR' => $this->request->getvar('SLR'),
            'SLR_TIME' => $this->request->getvar('SLR_TIME'),
            'SRNR' => $this->request->getvar('SRNR'),
            'SRNR_TIME' => $this->request->getvar('SRNR_TIME'),
            'SESW' => $this->request->getvar('SESW'),
            'SESW_TIME' => $this->request->getvar('SESW_TIME'),
            'SCBP' => $this->request->getvar('SCBP'),
            'SCBP_TIME' => $this->request->getvar('SCBP_TIME'),
        ]);

        session()->setFlashdata('pesan', 'Data cubicle berhasil ditambahkan');

        return redirect()->to('/status');
    }

    public function informasi($id)
    {
        $cubicle = $this->cubicleModel
            ->where('OUTGOING_ID', $id)->first();
        $data = [
            'title' => 'Informasi',
            'c' => $cubicle
        ];

        // $cubicleModel = new \app\models\cubicleModel();

        return view('status/informasi', $data);
    }
}
