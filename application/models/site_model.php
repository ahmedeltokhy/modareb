<?php
class Site_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function home(){
        return $this->db->get('author')->result()[0];
    }
    
    function get_experience(){
        return $this->db->get('experience')->result();
    }
    
    function get_skills($where){
        return $this->db->get_where('skills',$where)->result();
    }
    
    function get_education(){
        return $this->db->get('education')->result();
    }
    
    function get_achievment(){
        return $this->db->get('achievement')->result();
    }
    
    function get_testimonial(){
        return $this->db->get('testimonial')->result();
    }
    
    function get_services(){
        return $this->db->get('services')->result();
    }
    
    function get_portfolio(){
        return $this->db->get('portfolio')->result();
    }
    function portfolio_item($id){
        return $this->db->get_where('portfolio',array('id'=>$id))->result()[0];
    }
    
    function get_blog(){
        return $this->db->get('articles')->result();
    }
    function blog_item($id){
        return $this->db->get_where('articles',array('id'=>$id))->result()[0];
    }
    
    function add_comment($data){
        $this->db->insert('comments',$data);
    }
    
    function blog_item_comments($id){
        return $this->db->get_where('comments',array('article_id'=>$id))->result();
    }
    
}