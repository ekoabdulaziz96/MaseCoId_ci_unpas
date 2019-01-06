<?php 

class Mahasiswa_model extends CI_model {


    // public function __construct()
    // {
    //     $this->db = new Database;
    // }

    public function getALLMhs()
    {
       return $this->db->get('mahasiswa')->result_array();
    }
    
    public function tambahDataMhs()    
    {
        $data=[
            "nama" => $this->input->post('nama',true),
            "umur" => $this->input->post('umur',true),
        ];

        $this->db->insert('mahasiswa',$data);
    }

    public function ubahDataMhs()    
    {
        $data=[
            "nama" => $this->input->post('nama',true),
            "umur" => $this->input->post('umur',true),
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('mahasiswa',$data);
    }

    public function hapusDataMhs($id)    
    {

        // $this->db->where('id',$id);
        $this->db->delete('mahasiswa',['id'=>$id]);
        
    }

    public function getMhsById($id)
    {
       return $this->db->get_where('mahasiswa',['id' =>$id])->row_array();

    }

    public function cariDataMhs()
    {
       $keyword = $this->input->post('keyword',true);
       $this->db->like('nama',$keyword);
       $this->db->or_like('umur',$keyword);
       return $this->db->get('mahasiswa')->result_array();
    }

}