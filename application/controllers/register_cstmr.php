<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class register_cstmr extends CI_Controller {
    
        public function insertUser()
        {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('fname', 'Full Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[customer.username]');
            $this->form_validation->set_rules('telepon', 'Telepon', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            

            if ($this->form_validation->run() == FALSE) {
                
                $data['judul'] = 'Login as User';
                $this->load->view('login/login_view', $data);
                
            } else {
                
                $this->load->model('login_model');
                $this->login_model->insertUser($data);
                
                $this->session->flashdata('sukses', 'Berhasil Register');
                
                                
               redirect('login/index');
                
                
            }
            
        }
        

        
        
        
    
    }
    
    /* End of file register_csmtr.php */
    

?>