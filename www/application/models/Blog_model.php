<?php

 
class Blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get blog by id
     */
    function get_blog($id)
    {
        return $this->db->get_where('blog',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all blog
     */
    function get_all_blog()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('blog')->result_array();
    }
        
    /*
     * function to add new blog
     */
    function add_blog($params)
    {
        $this->db->insert('blog',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update blog
     */
    function update_blog($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('blog',$params);
    }
    
    /*
     * function to delete blog
     */
    function delete_blog($id)
    {
        return $this->db->delete('blog',array('id'=>$id));
    }

    function get_next_blog($id)
    {

        return $this->db->query('select * from blog where id = (select min(id) from blog where id > '.$id.') and status = 1')->row_array();
    }

     function get_previous_blog($id)
    {
        return $this->db->query('select * from blog where id = (select max(id) from blog where id < '.$id.') and status = 1')->row_array();
    }
}
