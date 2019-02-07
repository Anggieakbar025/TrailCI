<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Trail_model extends CI_Model {
    
        public function getTrail()
        {
            return $this->db->get('motor')->result_array();
        }

        public function getUser()
        {
            return $this->db->get('customer')->result_array();
        }
        
        // order list
        public function getSewa()
        {
            $this->db->select('*');
            $this->db->from('sewa');
            $this->db->join('customer', 'sewa.id_customer = customer.id_customer', 'left');
            $this->db->join('motor', 'sewa.id_motor = motor.id_motor', 'left');
            
            return $this->db->get()->result_array();
            
        }

        public function getStatusById($where, $data)
        {
            $this->db->where($where);
            $this->db->update('sewa', $data);
            
            
        }

        public function updateStatus()
        {
            
            $query_str = "";
            $query = $this->db->query($query_str)->result_array();
            $this->db->update('Table', $object);
            
        }
        public function edit_form($where)
        {
            return  $this->db->get_where('sewa', $where)->row_array();
        }
        
    
    }
    
    /* End of file Trail_model.php */
    



?>