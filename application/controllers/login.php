<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    
        public function index()
        {
            $this->load->model('login_model');
        
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE) 
            {
                $data['judul'] = 'User Login';
                $this->load->view('login/login_view', $data);
            } 
            else 
            {
                
                $email = $this->input->post('email');
                $password = sha1($this->input->post('password'));
        
                $where = array('email' => $email, 'password' => $password);            
                $cek = $this->login_model->cekLogin($where);

                if ($cek > 0) 
                {    
                    $data_session = array(
                                    'status' => 'logged in'
                                );
                    
                    
                    $this->session->set_userdata($data_session);
                                                    
                    redirect('home/index');
                    
                } else {
                    
                    $this->session->set_flashdata('pesan', '<strong>salah..</strong>');
                    
                    redirect('login/index');
                    
                }
            }
            
        }
    
        public function adminLog()
        {
            $this->load->model('AdmLog_model');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                
                $data['judul'] = "Admin Login";
                $this->load->view('login/admin_login', $data);
                
            }
            else {
                $email = $this->input->post('email');
                $password = sha1($this->input->post('password'));
                
                $where =  array('email' => $email, 'password' => $password );

                $cek = $this->AdmLog_model->cekLogin($where);

                if ($cek > 0) {
                    
                    $data_session = array(
                        'status' => 'logged in'
                    );
                    
                    $this->session->set_userdata( $data_session );

                    
                    redirect('home/admin');
                    
                    
                }
                else {
                    $this->session->set_flashdata('status', 'Gagal Login');
                    
                    redirect('login/adminLog');
                    
                }
                
            }
            
        }


        public function logout()
        {
            $this->session->sess_destroy();
            
            redirect('Login/index');
        }
        public function logoutAdm()
        {
            $this->session->sess_destroy();
            
            redirect('Login/adminLog');
        }


    }
    
    /* End of file Login.php */
    

?>