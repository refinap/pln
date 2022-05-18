<?php

namespace App\Controllers;

use App\Models\apjModel;
use App\Models\giModel;
use App\Models\incomingModel;
use App\Models\cubicleModel;
use App\Models\historyModel;
use App\Models\chartModel;
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
        $this->historyModel = new historyModel();
        $this->historyModel = new chartModel();
    }

    public function IndexStatus()
    {
        $view = \Config\Services::renderer();
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


        return $view->setVar('apj', $apj)
            ->render('status/component/render_index');
    }

    public function index()
    {
        $apj = $this->apjModel->select('APJ_ID, APJ_NAMA')->where('APJ_DCC IS NOT NULL', null, false)->get()->getResult();
        foreach ($apj as $key => $item) {
            $gi = $this->giModel
                ->select('GARDU_INDUK_ID, APJ_ID, GARDU_INDUK_NAMA')
                ->where('APJ_ID', $item->APJ_ID)->findAll();

            foreach ($gi as $gi_keys => $gi_items) {
                $incoming = $this->incomingModel
                    ->select('INCOMING_ID, GARDU_INDUK_ID, NAMA_ALIAS_INCOMING')
                    ->where('GARDU_INDUK_ID', $gi_items['GARDU_INDUK_ID'])->findAll();

                // get data cubicle
                foreach ($incoming as $incoming_keys => $incoming_items) {
                    $cubicle = $this->cubicleModel
                        ->select('OUTGOING_ID, APJ_ID, CUBICLE_NAME, MERK, IA, IB, IC, IN, IA2, IB2, IC2, IN2, VLL, KW,, IFA, IFB, IFC, IFN, SCB, SLR, SRNR, SESW, SCBP')
                        ->where('INCOMING_ID', $incoming_items['INCOMING_ID'])->findAll();
                    $incoming[$incoming_keys]['cubicle'] = $cubicle;
                };
                $gi[$gi_keys]['incoming'] = $incoming;
            };
            $apj[$key]->gi = $gi;
        };

        $cubicle = $this->cubicleModel->first();

        // $cubicle = $this->cubicleModel->find($OUTGOING_ID);
        // $cubicle = $this->cubicleModel->findColumn('CUBICLE_NAME');
        // $cubicle = $this->cubicleModel->findAll();
        // $cubicle = $this->cubicleModel->where('OUTGOING_ID', $OUTGOING_ID)->findAll();

        // return $this->response->setJSON($apj);
        // exit;

        $data = [
            'title' => 'Status Realtime SCADA',
            'apj' => $apj,
            'incoming' => $incoming,
            'cubicle' => $cubicle
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

        ];
        return view('status/tambah', $data);
    }


    public function save()
    {

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
        session()->setflashdata('pesan', 'Data cubicle berhasil ditambah');
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

        return view('status/informasi', $data);
    }

    public function getInformasi($id)
    {
        $cubicle = $this->cubicleModel
            ->where('OUTGOING_ID', $id)->first();

        // SCB
        if ($cubicle['SCB'] === '1') {
            $arr = array('danger', 'Close');
        } elseif ($cubicle['SCB'] === '0') {
            $arr = array('success', 'Open');
        } elseif ($cubicle['SCB'] === NULL) {
            $arr = array('warning', 'Cadangan');
        } else {
            $arr = array('dark', 'invalid');
        }
        $btnscb =  '<button type="button" style="min-width:100px" data-cubicle=" ' . $cubicle['OUTGOING_ID'] . ' "
        data-name=" ' . $cubicle['CUBICLE_NAME'] . ' "
        class="btn cubicle btn-' . $arr[0] . ' "> ' . $arr[1] . ' </button>';

        // SLR
        if ($cubicle['SLR'] === '1') {
            $arr = array('danger', 'Remote');
        } elseif ($cubicle['SLR'] === '0') {
            $arr = array('success', 'Local');
        } else {
            $arr = array('dark', 'invalid');
        }
        $btnslr =  '<button style="min-width:100px" type="button" data-cubicle=" ' . $cubicle['OUTGOING_ID'] . ' "
        data-name=" ' . $cubicle['CUBICLE_NAME'] . ' "
        class="btn cubicle btn-' . $arr[0] . ' "> ' . $arr[1] . ' </button>';

        // SRNR
        if ($cubicle['SRNR'] === '1') {
            $arr = array('danger', 'Ready');
        } elseif ($cubicle['SRNR'] === '0') {
            $arr = array('success', 'Not Ready');
        } else {
            $arr = array('dark', 'invalid');
        }
        $btnsrnr =  '<button style="min-width:100px" type="button" data-cubicle=" ' . $cubicle['OUTGOING_ID'] . ' "
        data-name=" ' . $cubicle['CUBICLE_NAME'] . ' "
        class="btn cubicle btn-' . $arr[0] . ' "> ' . $arr[1] . ' </button>';

        // SESW 
        // if ($cubicle['SESW'] === '1') {
        //     $arr = array('danger', 'Grounding');
        // } else {
        //     $arr = array('success', 'Not Grounding');
        // }
        // $btnsesw =  '<button style="min-width:100px" type="button" data-cubicle=" ' . $cubicle['OUTGOING_ID'] . ' "
        // data-name=" ' . $cubicle['CUBICLE_NAME'] . ' "
        // class="btn cubicle btn-' . $arr[0] . ' "> ' . $arr[1] . ' </button>';

        // SESW 
        if ($cubicle['SESW'] === '1') {
            $arr = array('danger', 'Grounding');
        } elseif ($cubicle['SESW'] === '0, null') {
            $arr = array('success', 'Not Grounding');
        } else {
            $arr = array('dark', 'invalid');
        }
        $btnsesw =  '<button style="min-width:100px" type="button" data-cubicle=" ' . $cubicle['OUTGOING_ID'] . ' "
        data-name=" ' . $cubicle['CUBICLE_NAME'] . ' "
        class="btn cubicle btn-' . $arr[0] . ' "> ' . $arr[1] . ' </button>';

        // SCBP 
        if ($cubicle['SCBP'] === '1') {
            $arr = array('danger', 'Rack In');
        } elseif ($cubicle['SCBP'] === '0') {
            $arr = array('success', 'Rack Out');
        } else {
            $arr = array('dark', 'invalid');
        }
        $btnscbp =  '<button style="min-width:100px" type="button" data-cubicle=" ' . $cubicle['OUTGOING_ID'] . ' "
data-name=" ' . $cubicle['CUBICLE_NAME'] . ' "
class="btn cubicle btn-' . $arr[0] . ' "> ' . $arr[1] . ' </button>';

        $data_cubicle = array(
            array(
                'name'  => 'IA',
                'nilai'  => $cubicle['IA'],
                'time'  => $cubicle['IA_TIME'],
            ),
            array(
                'name'  => 'IB',
                'nilai'  => $cubicle['IB'],
                'time'  => $cubicle['IB_TIME'],
            ),
            array(
                'name'  => 'IC',
                'nilai'  => $cubicle['IC'],
                'time'  => $cubicle['IC_TIME'],
            ),
            array(
                'name'  => 'IN',
                'nilai'  => $cubicle['IN'],
                'time'  => $cubicle['IN_TIME'],
            ),
            array(
                'name'  => 'IA2',
                'nilai'  => $cubicle['IA2'],
                'time'  => $cubicle['IA2_TIME'],
            ),
            array(
                'name'  => 'IB2',
                'nilai'  => $cubicle['IB2'],
                'time'  => $cubicle['IB2_TIME'],
            ),
            array(
                'name'  => 'IC2',
                'nilai'  => $cubicle['IC2'],
                'time'  => $cubicle['IC2_TIME'],
            ),
            array(
                'name'  => 'IN2',
                'nilai'  => $cubicle['IN2'],
                'time'  => $cubicle['IN2_TIME'],
            ),
            array(
                'name'  => 'VLL',
                'nilai'  => $cubicle['VLL'],
                'time'  => $cubicle['VLL_TIME'],
            ),
            array(
                'name'  => 'KW',
                'nilai'  => $cubicle['KW'],
                'time'  => $cubicle['KW_TIME'],
            ),
            array(
                'name'  => 'PF',
                'nilai'  => $cubicle['PF'],
                'time'  => $cubicle['PF_TIME'],
            ),
            array(
                'name'  => 'IFA',
                'nilai'  => $cubicle['IFA'],
                'time'  => $cubicle['IFA_TIME'],
            ),
            array(
                'name'  => 'IFB',
                'nilai'  => $cubicle['IFB'],
                'time'  => $cubicle['IFB_TIME'],
            ),
            array(
                'name'  => 'IFC',
                'nilai'  => $cubicle['IFC'],
                'time'  => $cubicle['IFC_TIME'],
            ),
            array(
                'name'  => 'IFN',
                'nilai'  => $cubicle['IFN'],
                'time'  => $cubicle['IFN_TIME'],
            ),
            array(
                'name'  => 'SCB',
                'nilai'  => $btnscb,
                'time'  => $cubicle['SCB_TIME'],
            ),
            array(
                'name'  => 'SLR',
                'nilai'  => $btnslr,
                'time'  => $cubicle['SLR_TIME'],
            ),
            array(
                'name'  => 'SRNR',
                'nilai'  => $btnsrnr,
                'time'  => $cubicle['SRNR_TIME'],
            ),
            array(
                'name'  => 'SESW',
                'nilai'  => $btnsesw,
                'time'  => $cubicle['SESW_TIME'],
            ),
            array(
                'name'  => 'SCBP',
                'nilai'  => $btnscbp,
                'time'  => $cubicle['SCBP_TIME'],
            ),
        );
        return $this->response->setJSON(['data' => $data_cubicle]);
    }

    public function delete($OUTGOING_ID)
    {
        $this->cubicleModel->where("OUTGOING_ID", $OUTGOING_ID)->delete();

        session()->setFlashdata('pesan', 'Data cubicle berhasil dihapus');
        return redirect()->to('status');
    }

    public function edit($OUTGOING_ID)
    {
        $apj = $this->apjModel->where('APJ_DCC IS NOT NULL', null, false)->get()->getResult();
        $cubicle =  $this->cubicleModel->where("OUTGOING_ID", $OUTGOING_ID)->first();
        // $gi = $this->cubicleModel->where('INCOMING_ID', $cubicle['INCOMING_ID'])->first();
        $trafo = $this->incomingModel->where('INCOMING_ID', $cubicle['INCOMING_ID'])->first();
        // var_dump($trafo);
        // exit();

        $data = [
            'title' => 'Ubah Data Cubicle',
            'apj' => $apj,
            'trafo' => $trafo,
            'cubicle' => $cubicle
        ];

        // session()->setFlashdata('pesan', 'Data cubicle berhasil diubah');
        return view('status/edit', $data);
    }

    public function update($OUTGOING_ID)
    {
        $data = [

            'SUPPLY_APJ' => $this->request->getvar('SUPPLY_APJ'),
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
        ];

        $this->cubicleModel->where('OUTGOING_ID', $OUTGOING_ID)
            ->set($data)
            ->update();

        session()->setflashdata('pesan', 'Data Berhasil diubah');
        return redirect()->to('/status');
    }
    public function history($id)
    {
        $history = $this->historyModel
            ->where('OUTGOING_METER_ID', $id)->first();
        $data = [
            'title' => 'History',
            'h' => $history
        ];
        return view('status/history', $data);
    }

    public function getHistory($id, $cb_history)
    {
        $querySelect = "$cb_history, $cb_history" . "_TIME"; //
        $history = $this->historyModel
            ->select($querySelect)
            ->where("$cb_history IS NOT NULL", null, false)
            ->where('OUTGOING_ID', $id)->get()->getResult();
        $data_history = array_map(function ($value) use ($cb_history) {
            return (array) [
                'name' => $value->{"$cb_history"},
                'time' => $value->{"$cb_history" . "_TIME"},
            ];
        }, $history);
        return $this->response->setJSON(['data' => $data_history]);
    }

    public function chart()
    {
        return view('status/chart');
    }

    public function getChart($id, $cb_history)
    {
        $querySelect = "$cb_history, $cb_history" . "_TIME"; //
        $history = $this->historyModel
            ->select($querySelect)
            ->where("$cb_history IS NOT NULL", null, false)
            ->where('OUTGOING_ID', $id)->get()->getResult();
        $data_history = array_map(function ($value) use ($cb_history) {
            return (array) [
                'name' => $value->{"$cb_history"},
                'time' => $value->{"$cb_history" . "_TIME"},
            ];
        }, $history);
        return $this->response->setJSON(['data' => $data_history]);
    }
}
