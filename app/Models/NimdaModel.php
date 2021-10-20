<?php

namespace App\Models;

use CodeIgniter\Model;


class NimdaModel extends Model
{
    protected $table = 'pendaftar';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_lengkap', 'nama_toko', 'no_hp', 'alamat_toko', 'provinsi_toko'];
}
