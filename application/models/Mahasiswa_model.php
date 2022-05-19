<?php
class Mahasiswa_model extends CI_Model
{
    private $table = "mahasiswa";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->where("kode", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
}
//class model
/*class Mahasiswa_model extends CI_Model
{
    //buat property
    public $id, $nim, $nama, $gender, $ipk;

    //buat method predikat ipk
    public function predikat()
    {
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
*/
