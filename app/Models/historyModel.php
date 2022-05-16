<?php

namespace App\Models;

use CodeIgniter\Model;

class historyModel extends Model
{
      protected $table = 'sm_meter_gi';
      protected $useTimestamps = false;
      protected $allowedFields = ['OUTGOING_METER_ID', 'OUTGOING_ID', 'IA', 'IA_TIME', 'IB', 'IB_TIME', 'IC', 'IC_TIME', 'IN', 'IN_TIME', 'VLL', 'VLL_TIME', 'KW', 'KW_TIME', 'PF', 'PF_TIME', 'IFA', 'IFA_TIME', 'IFB', 'IFB_TIME', 'IFC', 'IFC_TIME', 'IFN', 'IFN_TIME'];
}
