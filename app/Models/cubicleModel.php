<?php

namespace App\Models;

use CodeIgniter\Model;

class cubicleModel extends Model
{
    protected $table = 'dc_cubicle';
    protected $useTimestamps = true;
    protected $allowedFields = ['OUTGOING_ID', 'APJ_ID', 'SUPPLY_APJ', 'INCOMING_ID', 'CUBICLE_NAME', 'CUBICLE_TYPE', 'OPERATION_TYPE', 'KETERANGAN', 'RELAY', 'MERK_RELAY', 'NO_SERI_RELAY', 'METER', 'MERK_METER', 'NO_SERI_METER', 'MERK_IO', 'NO_SERI_IO', 'MERK_INTERFACE', 'NO_SERI_INTERFACE', 'MERK_PS', 'SETTING_CT', 'SETTING_PT', 'MERK', 'MERK_CUBICLE', 'NO_SERI', 'DIMENSI', 'RNR', 'TAHUN_OPERASI', 'OCR_TD', 'OCR_TMS_TD', 'OCR_CURVA', 'OCR_INST', 'OCR_T_INST', 'GFR_TD', 'GFR_TMS_TD', 'GFR_CURVA', 'GFR_INST', 'GFR_T_INST', 'UPJ_ID', 'UPJ_ID2', 'OCR_HS1', 'OCR_T_HS1', 'OCR_HS2', 'OCR_T_HS2', 'GFR_HS1', 'GFR_T_HS1', 'GFR_HS2', 'GFR_T_HS2', 'USER_UPDATE', 'LAST_UPDATE', 'IA', 'IA_TIME', 'IB', 'IB_TIME', 'IC', 'IC_TIME', 'IN', 'IN_TIME', 'IA2', 'IA2_TIME', 'IB2', 'IB2_TIME', 'IC2', 'IC2_TIME', 'IN2', 'IN2_TIME', 'VLL', 'VLL_TIME', 'KW', 'KW_TIME', 'PF', 'PF_TIME', 'IFA', 'IFA_TIME', 'IFB', 'IFB_TIME', 'IFC', 'IFC_TIME', 'IFN', 'IFN_TIME', 'SCB', 'SCB_TIME', 'SLR', 'SLR_TIME', 'SRNR', 'SRNR_TIME', 'SESW', 'SESW_TIME', 'SCBP', 'SCBP_TIME'];
}
