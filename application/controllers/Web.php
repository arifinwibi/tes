<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        
    }
    public function user()
    {
        $data=array(
            'user'=>$this->m_data->ambil_data()->result(),
            'judul'=>"Daftar User"
        
        );
        
        $data['user']= $this->m_data->ambil_data()->result();
        $this->load->view('v_header',$data);
        $this->load->view('v_user',$data);
        $this->load->view('v_footer',$data);
    }

    public function index()
    {
        $data['judul'] = "Home";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function blog()
    {
        $data['judul'] = "Blog";
        $this->load->view('v_header',$data);
        $this->load->view('v_blog',$data);
        $this->load->view('v_footer',$data);
    }

    public function about()
    {
        $data['judul'] = "About";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
    
}