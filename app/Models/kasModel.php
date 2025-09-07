<?php

namespace App\Models;

use CodeIgniter\Model;

class KasModel extends Model
{
    protected $table = 'kas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal', 'jenis', 'keterangan', 'jumlah'];
}
