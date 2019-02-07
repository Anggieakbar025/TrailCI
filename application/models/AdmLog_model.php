<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class AdmLog_model extends CI_Model {
    
        public function cekLogin($where)
        {
            return $this->db->get_where('customer', $where)->num_rows();

        }
    
    }
    
    /* End of file login_model.php */
    


?>