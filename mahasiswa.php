<?php 
class Mahasiswa extends CI_Controller 
{ 
    public function index() 
    { 
        $this->load->view('view-form-mahasiswa'); 

    } 
    
    public function cetak() 
     {       $data = [ 
                'nama' => $this->input->post('nama'), 
                'nim' => $this->input->post('nim'), 
                'kelas' => $this->input->post('kelas'), 
                'tgl' => $this->input->post('tgl'), 
                'tempat' => $this->input->post('tempat'), 
                'alamat' => $this->input->post('alamat'),
                'jenis' => $this->input->post('jenis'), 
                'agama' => $this->input->post('agama')  
            ]; 
            
            $this->load->view('view-data-mahasiswa', $data); 
    } 
}