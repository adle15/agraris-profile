<?php

namespace App\Controllers;

class Apps extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Agraris | Beranda'
        ];
        echo view('layout/header', $data);
        echo view('layout/bar');
        echo view('landing');
        echo view('layout/footer');
    }

    public function caraGabung()
    {
        $data = [
            'tittle' => 'Agraris | Cara Gabung',
            'validation' => \Config\Services::validation()
        ];
        echo view('layout/header', $data);
        echo view('layout/bar');
        echo view('cara_gabung');
        echo view('layout/footer');
    }

    public function kemitraan()
    {
        $data = [
            'tittle' => 'Agraris | Kemitraan'
        ];
        echo view('layout/header', $data);
        echo view('layout/bar');
        echo view('kemitraan');
        echo view('layout/footer');
    }
}
