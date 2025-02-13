<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Client_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get client by id
     */
    function get_client($id)
    {
        return $this->db->get_where('client',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all client
     */
    function get_all_client()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('client')->result_array();
    }
        
    /*
     * function to add new client
     */
    function add_client($params)
    {
        $this->db->insert('client',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update client
     */
    function update_client($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('client',$params);
    }
    
    /*
     * function to delete client
     */
    function delete_client($id)
    {
        return $this->db->delete('client',array('id'=>$id));
    }
}
