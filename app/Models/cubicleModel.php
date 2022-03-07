<?php

namespace App\Models;

use CodeIgniter\Model;

class cubicleModel extends Model
{
    protected $table = 'dc_cubicle';
    protected $useTimestamps = false;
    protected $allowedFields = ['INCOMING_ID', 'CUBICLE_NAME', 'SCB'];
}
