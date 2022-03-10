<?php

namespace App\Models;

use CodeIgniter\Model;

class incomingModel extends Model
{
    protected $table = 'dc_incoming_feeder';
    protected $useTimestamps = false;
    protected $allowedFields = ['INCOMING_ID', 'GARDU_INDUK_ID'];
}
