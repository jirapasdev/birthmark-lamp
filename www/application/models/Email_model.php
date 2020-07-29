<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Email_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get email by id
     */
    function get_email($id)
    {
        return $this->db->get_where('email',array('id'=>$id))->row_array();
    }

     function fetch_data()
     {
      $this->db->select("email_acc, DATE_FORMAT(created_date, '%d %m %Y') AS created_date");
      $this->db->from('email');
      return $this->db->get();
     }
    
        
    /*
     * Get all email
     */
    function get_all_email()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('email')->result_array();
    }
        
    /*
     * function to add new email
     */
    function add_email($params)
    {
        $this->db->insert('email',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update email
     */
    function update_email($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('email',$params);
    }
    
    /*
     * function to delete email
     */
    function delete_email($id)
    {
        return $this->db->delete('email',array('id'=>$id));
    }
}
