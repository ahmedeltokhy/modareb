<?php
class Site_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function home(){
        $this->db->order_by('sort_id', 'DESC');
        $this->db->join('color','author.color=color.id','left');
        return $this->db->get('author')->result()[0];
    }
    
    function get_experience(){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get('experience')->result();
    }
    
    function get_skills($where){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get_where('skills',$where)->result();
    }
    
    function get_education(){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get('education')->result();
    }
    
    function get_achievment(){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get('achievement')->result();
    }
    
    function get_testimonial(){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get('testimonial')->result();
    }
    
    function get_services(){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get('services')->result();
    }
    
    function get_portfolio(){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get('portfolio')->result();
    }
    function portfolio_item($id){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get_where('portfolio',array('id'=>$id))->result()[0];
    }
    
    function get_blog(){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get('articles')->result();
    }
    function blog_item($id){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get_where('articles',array('id'=>$id))->result()[0];
    }
    
    function add_comment($data){
        $this->db->order_by('sort_id', 'DESC');
        $this->db->insert('comments',$data);
    }
    
    function blog_item_comments($id){
        $this->db->order_by('sort_id', 'DESC');
        return $this->db->get_where('comments',array('article_id'=>$id))->result();
    }
    
}