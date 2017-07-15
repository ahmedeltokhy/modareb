<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('modarebLogin')) {
            redirect('login', 'refresh');
        }
    }

    function index() {
        redirect('admin/author', 'refresh');
    }

    function author() {
        $crud = new grocery_CRUD();

        $crud->set_table('author');
        $crud->set_crud_url_path(site_url('admin/author'));
        $crud->unset_fields('CreateDate', 'UpdateDate');
        $crud->unset_columns(array('Password'));
        $crud->set_field_upload('Picture', 'assets\uploads\Pic');
        $crud->set_field_upload('CV', 'assets\uploads\CV');
        $crud->set_subject("مؤلف");
        $crud->unset_add();
        $crud->unset_delete();
        $crud->set_relation('color','color',' name');
//        $crud->display_as('UserName', 'إسم المستخدم');
//        $crud->display_as('Name', 'الإسم');
//        $crud->display_as('speciality', 'التخصص');
//        $crud->display_as('About', 'عن المدرب');
//        $crud->display_as('Email', 'البريد الإلكترونى');
//        $crud->display_as('Picture', 'الصورة');
//        $crud->display_as('Phone', 'الجوال');
//        $crud->display_as('Twitter', 'تويتر');
//        $crud->display_as('Facebook', 'الفيسبوك');
//        $crud->display_as('Snapchat', 'سناب شات');
//        $crud->display_as('Youtube', 'يوتيوب');
//        $crud->display_as('CV', 'السيرة الذاتية');
//        $crud->display_as('Instagram', 'إنستاجرام');
//        $crud->display_as('UpdateDate', 'تاريخ التعديل');
//        $crud->display_as('CreateDate', 'تاريخ الانشاء ');

        $output = $crud->render();
        $output->title = "بيانات المدرب";
        $this->load->view('admin', $output);
    }
     
    function achievement(){
        $crud = new Grocery_CRUD();
        
        $crud->set_table('achievement');
        
        $crud->set_subject('إنجاز');
        
        $crud->unset_fields('create_date','update_date');
        
        $output = $crud->render();
        $output->title = "سجل الإنجازات";
        $this->load->view('admin', $output);
        
    }
function articles(){
        $crud = new Grocery_CRUD();
        
        $crud->set_table('articles');
        
        $crud->set_subject('مقال');
        $crud->columns('title','title_ar','content_ar','field_ar','content','image','field','author_id','sort_id','comments','create_date','update_date');
        $crud->callback_column('comments', array($this,'callback_comments'));
        $crud->unset_fields('create_date','update_date');
        
        $crud->set_field_upload('image', 'assets/uploads/articles');
        
        $output = $crud->render();
        $output->title = "المقالات";
        $this->load->view('admin', $output);
        
    }
    function callback_comments($value,$row){
        return "<a href='".site_url('admin/comments/'.$row->id)."'>Comments</a>";
    }
            function comments($article_id){
        $crud = new Grocery_CRUD();
        $crud->where('article_id',$article_id);
        $crud->set_table('comments');
        
        $crud->set_subject('إنجاز');
        
        $crud->unset_fields('create_date','update_date');
        $crud->unset_add();
        $output = $crud->render();
        $output->title = "سجل التعليقات";
        $this->load->view('admin', $output);
        
    }
    
    function education(){
        $crud = new Grocery_CRUD();
        
        $crud->set_table('education');
        
        $crud->set_subject('درجة علمية');
        
        $crud->unset_fields('create_date','update_date');
        
        $crud->set_field_upload('logo', 'assets/uploads/edu');
        
        $output = $crud->render();
        $output->title = "سجل الدرجات العلمية";
        $this->load->view('admin', $output);
        
    }
    
    function portfolio(){
        $crud = new Grocery_CRUD();
        
        $crud->set_table('portfolio');
        
        $crud->set_subject('عمل');
        
        $crud->unset_fields('create_date','update_date');
        
        $crud->set_field_upload('cover_pic','assets/uploads/portfolio/cover');
        $crud->set_field_upload('inner_pic', 'assets/uploads/portfolio/inner');
        
        $output = $crud->render();
        $output->title = "سجل الاعمال السابقة";
        $this->load->view('admin', $output);
        
    }
    function experience(){
        $crud = new Grocery_CRUD();
        
        $crud->set_table('experience');
        
        $crud->set_subject('خبرة');
        
        $crud->unset_fields('create_date','update_date');
        
        $output = $crud->render();
        $output->title = "سجل الخبرات";
        $this->load->view('admin', $output);
        
    }
    function services(){
        $crud = new Grocery_CRUD();
        
        $crud->set_table('services');
        
        $crud->set_subject('خدمة');
        
        $crud->unset_fields('create_date','update_date');
        
        $output = $crud->render();
        $output->title = "سجل الخدمات";
        $this->load->view('admin', $output);
        
    }
    function skills(){
        $crud = new Grocery_CRUD();
        
        $crud->set_table('skills');
        
        $crud->set_subject('مهارة');
        
        $crud->unset_fields('create_date','update_date');
        
        $output = $crud->render();
        $output->title = "سجل المهارات";
        $this->load->view('admin', $output);
        
    }
    function testimonial(){
        $crud = new Grocery_CRUD();
        
        $crud->set_table('testimonial');
        
        $crud->set_subject('شهادة');
        
        $crud->set_field_upload('pic', 'assets/uploads/test_pics');
        
        $crud->unset_fields('create_date','update_date');
        
        $output = $crud->render();
        $output->title = "سجل الشهادات";
        $this->load->view('admin', $output);
        
    }
}

?>