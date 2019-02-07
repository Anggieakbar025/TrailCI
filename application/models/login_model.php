<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class login_model extends CI_Model {
        
        

        public function insertUser($data)
        {
        //    insert data
           $data = array(
                            'email' => $this->input->post('email'),
                            'username' => $this->input->post('username'),
                            'fname' => $this->input->post('fname'),
                            'telepon' => $this->input->post('telepon'),
                            'password' => sha1($this->input->post('password'))
            
        );

        // insert data to database
        $this->db->insert('customer', $data);
            
        
        }

        public function cekLogin($where)
        {
            return $this->db->get_where('customer', $where)->num_rows();

        }

        
    
    }
    
    /* End of file login_model.php */
    


?>