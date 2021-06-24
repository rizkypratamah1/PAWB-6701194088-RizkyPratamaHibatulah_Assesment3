<?php

namespace App\Controllers;

use App\Controllers\M_Daftar as ControllersM_Daftar;
use CodeIgniter\Controller;
use App\Models\M_Daftar;

class daftar extends Controller
{
    public function __construct()
    {
        $this->model = new M_Daftar();
    }

    public function index()
    {


        $data = [
            'judul' => 'Data Akun ',
            'daftar' => $this->model->getAllData()

        ];

        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');

        echo view('daftar/index');
        echo view('templates/v_footer');
    }
    public function tambah()
    {
        if (isset($_POST['tambah'])) {
            $val = $this->validate([
                'id' => 'required',
                'email' => 'required',
                'nama' => 'required',
                'usia' => 'required',
                'jenis_kelamin' => 'required',
                'alamat' => 'required'

            ]);

            if (!$val) {

                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Data Akun',
                    'daftar' => $this->model->getAllData()
                ];

                echo view('template/v_header', $data);
                echo view('template/v_sidebar');
                echo view('template/v_topbar');
                echo view('daftar/index', $data);
                echo view('template/v_footer');
            } else {
                $data = [
                    'id' => $this->request->getPost('id'),
                    'email' => $this->request->getPost('email'),
                    'nama' => $this->request->getPost('nama'),
                    'usia' => $this->request->getPost('usia'),
                    'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                    'alamat' => $this->request->getPost('alamat')

                ];

                $success = $this->model->tambah($data);
                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to(base_url('daftar'));
                }
            }
        } else {
            return redirect()->to('/daftar');
        }
    }
    public function hapus($id)
    {
        $success = $this->model->hapus($id);
        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('daftar'));
        }
    }

    public function ubah()
    {
        if (isset($_POST['ubah'])) {
            $val = $this->validate([
                'id' => 'required',
                'email' => 'required',
                'nama' => 'required',
                'usia' => 'required',
                'jenis_kelamin' => 'required',
                'alamat' => 'required',


            ]);

            if (!$val) {

                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Data Daftar',
                    'daftar' => $this->model->getAllData()
                ];

                echo view('template/v_header', $data);
                echo view('template/v_sidebar');
                echo view('template/v_topbar');
                echo view('daftar/index', $data);
                echo view('template/v_footer');
            } else {
                $id = $this->request->getPost('id');
                $data = [
                    'email' => $this->request->getPost('email'),
                    'nama' => $this->request->getPost('nama'),
                    'usia' => $this->request->getPost('usia'),
                    'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                    'alamat' => $this->request->getPost('alamat')

                ];

                $success = $this->model->ubah($data, $id);
                if ($success) {
                    session()->setFlashdata('message', 'Diubahkan');
                    return redirect()->to(base_url('daftar'));
                }
            }
        } else {
            return redirect()->to('/daftar');
        }
    }
}
