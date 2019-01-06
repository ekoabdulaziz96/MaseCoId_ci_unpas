<?php 

class Mahasiswa extends  CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index($nama = 'Bro')
    {
        $data['judul'] = 'Halaman Mahasiswa';

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMhs();
        if($this->input->post('keyword')){
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMhs();
        }

        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('templates/footer');
        
    }
    
    public function tambah()
    {
        $data['judul'] = 'Tambah Mahasiswa';

        // $data['mahasiswa'] = $this->Mahasiswa_model->getAllMhs();
        // $this->form_validation->set_rules('name','message','syarat');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('umur','Umur','required');
        if (  $this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/tambah',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMhs();
            $this->session->set_flashdata('flash',"Ditambahkan");
            redirect('mahasiswa');

        }
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data Mahasiswa';

        // $data['mahasiswa'] = $this->Mahasiswa_model->getAllMhs();
        // $this->form_validation->set_rules('name','message','syarat');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('umur','Umur','required');

        $data['mahasiswa']= $this->Mahasiswa_model->getMhsById($id);

        if (  $this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/ubah',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMhs();
            $this->session->set_flashdata('flash',"Diubah");
            redirect('mahasiswa');

        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMhs($id);
        $this->session->set_flashdata('flash',"Dihapus");
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Mahasiswa';
        $data['mahasiswa']= $this->Mahasiswa_model->getMhsById($id);

        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('templates/footer');
    }

   
}
