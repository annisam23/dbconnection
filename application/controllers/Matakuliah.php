<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function index()
    {
        //load model + bikin objek
        $this->load->model('Matakuliah_model', 'mk1');

        //cara membuat objek 1 + cara pake class model
        $this->mk1->id = 1;
        $this->mk1->kode = '00001';
        $this->mk1->nama_matkul = 'Pemrograman web';
        $this->mk1->dosen = 'Sirojul Munir';
        $this->mk1->smt = '1';

        //load model + bikin objek 2
        $this->load->model('Matakuliah_model', 'mk2');

        $this->mk2->id = 2;
        $this->mk2->kode = '00002';
        $this->mk2->nama_matkul = 'Basis data';
        $this->mk2->dosen = 'Edo Riansyah';
        $this->mk2->smt = '2';

        //load model + bikin objek 3
        $this->load->model('Matakuliah_model', 'mk3');

        $this->mk3->id = 3;
        $this->mk3->kode = '00003';
        $this->mk3->nama_matkul = 'Jaringan Komputer';
        $this->mk3->dosen = 'Lukman';
        $this->mk3->smt = '2';

        //siapin objek dlm array
        $list_mk = [$this->mk1, $this->mk2, $this->mk3];

        //siapin data buat ditampilin di view
        $data['list_mk'] = $list_mk;

        //tampilin ke view
        $this->load->view('matakuliah/index', $data);
    }
}
