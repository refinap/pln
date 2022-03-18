<?php

namespace App\Models;

use CodeIgniter\Model;

class cubicleModel extends Model
{
    protected $table = 'dc_cubicle';
    protected $useTimestamps = true;
    protected $allowedFields = ['OUTGOING_ID', 'INCOMING_ID', 'CUBICLE_NAME', 'SCB'];
}
