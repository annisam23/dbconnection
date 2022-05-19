<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        //load model + bikin objek
        $this->load->model('Dosen_model', 'dsn1');

        //cara membuat objek 1 + cara pake class model
        $this->dsn1->id = 1;
        $this->dsn1->nidn = '0101';
        $this->dsn1->nama = 'Fahri Syaputra';
        $this->dsn1->gender = 'L';
        $this->dsn1->matkul = 'Basis Data';

        //load model + bikin objek 2
        $this->load->model('Dosen_model', 'dsn2');

        $this->dsn2->id = 2;
        $this->dsn2->nidn = '0102';
        $this->dsn2->nama = 'Annisa M';
        $this->dsn2->gender = 'P';
        $this->dsn2->matkul = 'B inggris';

        //load model + bikin objek 3
        $this->load->model('Dosen_model', 'dsn3');

        $this->dsn3->id = 3;
        $this->dsn3->nidn = '0103';
        $this->dsn3->nama = 'Any senpai';
        $this->dsn3->gender = 'P';
        $this->dsn3->matkul = 'Komunikasi Efektif';

        //siapin objek dlm array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

        //siapin data buat ditampilin di view
        $data['list_dsn'] = $list_dsn;

        //tampilin ke view
        $this->load->view('dosen/index', $data);
    }
}
