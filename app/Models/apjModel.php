<?php

namespace App\Models;

use CodeIgniter\Model;

class apjModel extends Model
{
    protected $table = 'dc_apj';
    protected $useTimestamps = false;
    protected $allowedFields = ['APJ_NAMA', 'APJ_ID'];
}
