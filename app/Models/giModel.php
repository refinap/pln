<?php

namespace App\Models;

use CodeIgniter\Model;

class giModel extends Model
{
    protected $table = 'dc_gardu_induk';
    protected $useTimestamps = false;
    protected $allowedFields = ['GARDU_INDUK_NAMA', 'GARDU_INDUK_ID'];
}
