<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{


    public function save_blog()
    {

        $data = array();
        $data['author_id'] = $this->session->userdata('admin_id');
        $data['blog_title'] = $this->input->post('blogTitle', true);
        $data['blog_desc'] = $this->input->post('blogDesc', true);

        $this->db->insert('tbl_blog', $data);

    }

    public function select_all_blogs()
    {
        $result = $this->db->select('*')
            ->from('tbl_blog')
            ->order_by('blog_date desc')
            ->get()
            ->result();

        return $result;
    }

    public function select_blog($blog_id)
    {
        $result = $this->db->select('*')
            ->from('tbl_blog')
            ->where('blog_id', $blog_id)
            ->get()
            ->row();

        return $result;
    }

    public function inc_blog_view($blog_id, $old_view)
    {
        $result = $this->db->select('*')
            ->from('tbl_blog')
            ->where('blog_id', $blog_id)
            ->get()
            ->row();

        $data['blog_view'] = $old_view + 1;

        $this->db->where('blog_id',$blog_id)
            ->update('tbl_blog',$data);

    }


}