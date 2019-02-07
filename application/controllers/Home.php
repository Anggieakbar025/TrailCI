<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('trail_model');
            $this->load->library('form_validation');
            
            if ($this->session->userdata('status') != 'logged in') {
                
                redirect('login/index');
                
            }
            
        }

        public function gallery()
        {
            $this->load->view('utama/gallery');
            
        }
        
        public function index()
        {            
            $this->load->view('utama/user_view');
   
        }
        
        public function login()
        {
            $data['judul'] = 'Login';
            $this->load->view('login/login_view', $data);
            
        }
        public function admin()
        {
            $data['judul'] = 'Dashboard';
            $this->load->view('admin/adminheader', $data);
            $this->load->view('admin/admin_view'); 
            $this->load->view('admin/adminfooter');
            
        }
        
        public function jual()
        {
            $data['judul'] = 'Penjualan';
            $this->load->view('admin/adminheader', $data);
            $this->load->view('admin/jual.php');
            $this->load->view('admin/adminfooter');
            
        }
        
        public function orderList()
        {
            $data['judul'] ='Order';
            $data['sewa'] = $this->trail_model->getSewa();
            $this->load->view('admin/adminheader', $data);
            $this->load->view('admin/order.php', $data);
            $this->load->view('admin/adminfooter');
            
        }
        
        
        public function user()
        {
            $data['judul'] = 'User Data';
            $data['customer'] = $this->trail_model->getUser();
            $this->load->view('admin/adminheader', $data);
            $this->load->view('admin/userdata', $data);
            $this->load->view('admin/adminfooter');
            
        }
        
        public function booking()
        {
            $this->load->view('utama/book_view');   
        }

        public function edit_status()
        {
           $id_buku = $this->input->post('id_buku');
           $status = $this->input->post('status');
   
           $where = array('id_buku' => $id_buku);
           $data  = array(     
                               'status ' => $status,
                          );
   
          $this->trail_model->edit_data($where, $data); 
             
          redirect('Home/order');
        }
    
    }
    
    /* End of file Home.php */
    

?>