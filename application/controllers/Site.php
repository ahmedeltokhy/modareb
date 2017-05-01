<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('site_model');
    }

    function index() {
        $data['title'] = 'home';
        $data['data'] = $this->site_model->home();

//        echo '<pre>';
//        print_r($content_data);
//        echo '<pre>';
        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

    function resume() {
        $data['title'] = 'resume';
        $data['data'] = $this->site_model->home();
        $data['experience'] = $this->site_model->get_experience();
        $data['skills_technical'] = $this->site_model->get_skills(array('type' => 'technical'));
        $data['skills_language'] = $this->site_model->get_skills(array('type' => 'language'));
        $data['skills_aditional'] = $this->site_model->get_skills(array('type' => 'aditional'));
        $data['education'] = $this->site_model->get_education();
        $data['achievment'] = $this->site_model->get_achievment();
        $data['testimonial'] = $this->site_model->get_testimonial();
        $this->load->view('header', $data);
        $this->load->view('resume', $data);
        $this->load->view('footer', $data);
    }

    function services() {
        $data['title'] = 'services';
        $data['data'] = $this->site_model->home();
        $data['services'] = $this->site_model->get_services();
        $this->load->view('header', $data);
        $this->load->view('services',$data);
        $this->load->view('footer',$data);
    }

    function portfolio() {
        $data['title'] = 'portfolio';
        $data['data'] = $this->site_model->home();
        $data['portfolio'] = $this->site_model->get_portfolio();
        $this->load->view('header', $data);
        $this->load->view('portfolio',$data);
        $this->load->view('footer',$data);
    }
    function portfolio_item($id = NULL){
 
        $data['title'] = 'portfolio item';
        $data['data'] = $this->site_model->home();
        $data['item_data'] = $this->site_model->portfolio_item($id);
        $this->load->view('header', $data);
        $this->load->view('portfolio_item',$data);
        $this->load->view('footer',$data);
    }
            function blog() {
        $data['title'] = 'blog';
        $data['data'] = $this->site_model->home();
        $data['articles'] = $this->site_model->get_blog();
        $this->load->view('header', $data);
        $this->load->view('blog',$data);
        $this->load->view('footer',$data);
    }
function blog_item($id = NULL){
   
        $data['title'] = 'portfolio item';
        $data['data'] = $this->site_model->home();
        $data['item_data'] = $this->site_model->blog_item($id);
        $data['comments'] = $this->site_model->blog_item_comments($id);
        $this->load->view('header', $data);
        $this->load->view('blog_item',$data);
        $this->load->view('footer',$data);
    }
    function contact() {
        $data['title'] = 'contact';
        $data['data'] = $this->site_model->home();

        $this->load->view('header', $data);
        $this->load->view('contact', $data);
        $this->load->view('footer', $data);
    }
    function add_comment(){
      $comment = array(
        'name'=> $this->input->post('name'),
        'email'=> $this->input->post('email'),
        'message'=> $this->input->post('message'),
        'article_id'=>$this->input->post('post_id'),
    );
    echo '<pre>';
    print_r($this->input->post('name'));
    print_r($comment);
    echo '</pre>';
    
    $this->site_model->add_comment($comment);
   redirect(site_url('site/blog_item/'.$comment['article_id']));
    }
}
