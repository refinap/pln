<?php

namespace App\Models;

use CodeIgniter\Model;

class incomingModel extends Model
{
    protected $table = 'dc_incoming_feeder';
    protected $useTimestamps = false;
    protected $allowedFields = ['INCOMING_ID', 'GARDU_INDUK_ID', 'NAMA_ALIAS_INCOMING', 'DAYA_REAKTIF_TRAFO', 'IA', 'IB', 'IC', 'IG', 'KW'];
}
