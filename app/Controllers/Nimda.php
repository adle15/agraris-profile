<?php

namespace App\Controllers;

use App\Models\NimdaModel;

class Nimda extends BaseController
{

    public function __construct()
    {
        $this->nimdaModel = new NimdaModel();
    }

    public function index()
    {
        $pendaftar = $this->nimdaModel->findAll();
        $data = [
            'tittle' => 'Agraris | Admin Page',
            'pendaftar' => $pendaftar
        ];
        echo view('layout/header', $data);
        echo view('nimda.php');
    }

    public function create()
    {
        if (!$this->validate([
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap harus diisi.'
                ]
            ],
            'nama_toko' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Toko harus diisi.'
                ]
            ],
            'no_hp' => [
                'rules' => 'required|numeric|max_length[13]',
                'errors' => [
                    'required' => 'Nomer Handphone harus diisi.',
                    'numeric' => 'Nomer Handphone harus berupa angka',
                    'max_length' => 'Nomer Handphone maksimal berisi 13 karakter'
                ]
            ],
            'alamat_toko' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Toko harus diisi.'
                ]
            ],
            'provinsi_toko' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Provinsi/Kota harus diisi.'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/cara-gabung')->withInput()->with('validation', $validation);
        }
        $this->nimdaModel->save([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nama_toko' => $this->request->getVar('nama_toko'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat_toko' => $this->request->getVar('alamat_toko'),
            'provinsi_toko' => $this->request->getVar('provinsi_toko')
        ]);

        session()->setFlashData('pesan', 'Kamu berhasil mendaftar. Mohon tunggu Informasi selanjutnya.');

        return redirect()->to('/cara-gabung');
    }
}
