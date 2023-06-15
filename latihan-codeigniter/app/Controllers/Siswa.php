<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Siswa extends ResourceController
{
       public function __construct()
    {
        $this->model = new \App\Models\User();
    }

    public function index()
    {
        $datasiswa = $this->model->where('role', 'siswa')->findAll();
        return view('siswa/index',['siswa' => $datasiswa]);
    }
    public function show($id = null)
    {
        $datasiswa = $this->model->where('id', $id)->first();
        return view('siswa/show', ['siswa' => $datasiswa]);
    }

    
    public function new()
    {
        return view('siswa/form-tambah');
    }

    public function create()
    {
        $data = [
            'name'      => $this->request->getPost('name'),
            'nis'       => $this->request->getPost('nis'),
            'email'     => $this->request->getPost('email'),
            'password'  => password_hash('pass1234', PASSWORD_BCRYPT),
            'role'      => 'siswa'
        ];
        $this->model->insert($data);

        return redirect()->to(base_url('siswa'));
    }

    public function edit($id = null)
    {
        $datasiswa = $this->model->where('id', $id)->first();
        return view('siswa/form-ubah', ['siswa' => $datasiswa]);
    }

    public function update($id = null)
    {
        $data = [
            'name'     => $this->request->getVar('name'),
            'nis'      => $this->request->getVar('nis'),
            'email'    => $this->request->getVar('email')
        ];
        $this->model->where('id', $id)->set($data)->update();

        return redirect()->to(base_url('siswa'));
    }


    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('siswa'));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
