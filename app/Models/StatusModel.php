<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table = 'status';
    protected $useTimestamps = false;
    protected $allowedFields = ['Kode', 'nama_gi', 'nama_trafo', 'nama_pmt'];
}
