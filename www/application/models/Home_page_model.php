<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Home_page_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get home_page by 
     */
    function get_home_page($id)
    {
        return $this->db->get_where('home_page',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all home_page
     */
    function get_all_home_page()
    {
        $this->db->order_by('', 'desc');
        return $this->db->get('home_page')->result_array();
    }
        
    /*
     * function to add new home_page
     */
    function add_home_page($params)
    {
        $this->db->insert('home_page',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update home_page
     */
    function update_home_page($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('home_page',$params);
    }
    
    /*
     * function to delete home_page
     */
    function delete_home_page($id)
    {
        return $this->db->delete('home_page',array('id'=>$id));
    }
}
