<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Inquiry_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get inquiry by id
     */
    function get_inquiry($id)
    {
        return $this->db->get_where('inquiry',array('id'=>$id))->row_array();
    }

     function fetch_data()
     {
      $this->db->select("email_acc, DATE_FORMAT(created_date, '%d %m %Y') AS created_date, name, phone, company");
      $this->db->from('inquiry');
      return $this->db->get();
     }
        
    /*
     * Get all inquiry
     */
    function get_all_inquiry()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('inquiry')->result_array();
    }
        
    /*
     * function to add new inquiry
     */
    function add_inquiry($params)
    {
        $this->db->insert('inquiry',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update inquiry
     */
    function update_inquiry($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('inquiry',$params);
    }
    
    /*
     * function to delete inquiry
     */
    function delete_inquiry($id)
    {
        return $this->db->delete('inquiry',array('id'=>$id));
    }
}
