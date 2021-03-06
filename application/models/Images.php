<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Contacts table.
 */
class Images extends MY_Model {
    // Constructor
    function __construct()
    {
	parent::__construct();
    }
    
    //return all images
    function all() {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }
    
    function newest() {
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }
}
