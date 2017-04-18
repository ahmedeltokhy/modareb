<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   if(!$this->session->userdata('modarebLogin'))
   {
     redirect('login', 'refresh');
   }
 }
function index(){
redirect('admin/author', 'refresh');
}

function author(){
    $crud = new grocery_CRUD();

    $crud->set_table('author');
    $crud->set_crud_url_path(site_url('admin/author'));
    $crud->unset_fields('CreateDate','UpdateDate');
    $crud->unset_columns(array('Password'));
    $crud->set_field_upload('Picture','assets\uploads\Pic');
    $crud->set_field_upload('CV','assets\uploads\CV');
   $crud->set_subject("مؤلف");
   //$crud->unset_add();
   $crud->unset_delete();
   $crud->display_as('UserName','إسم المستخدم');   $crud->display_as('Name','الإسم');
   $crud->display_as('About','عن المدرب');   $crud->display_as('ُEmail','البريد الإلكترونى');
   $crud->display_as('Picture','الصورة');   $crud->display_as('Phone','الجوال');
   $crud->display_as('Twitter','تويتر');   $crud->display_as('Facebook','الفيسبوك');
   $crud->display_as('ٍSnapchat','سناب شات');   $crud->display_as('Youtube','يوتيوب');
   $crud->display_as('CV','السيرة الذاتية');   $crud->display_as('Instagram','إنستاجرام');
   $crud->display_as('UpdateDate','تاريخ التعديل');   $crud->display_as('CreateDate','تاريخ الانشاء ');

    $output = $crud->render();
    $output->title = "Author";
    $this->load->view('admin',$output);
}
function fattwa(){
    $crud = new grocery_CRUD();

    $crud->set_table('fattwa_content');
    $crud->set_crud_url_path(site_url('admin/fattwa'));
    $crud->set_subject('fattwa');
    $crud->unset_fields('created_time');
    $crud->set_relation('lang_id','langs','lang_name');
    $output = $crud->render();
    $output->title = "Fattwa";
    $this->load->view('admin',$output);
}

function guides(){
    $crud = new grocery_CRUD();

    $crud->set_table('guides_content');
    $crud->set_crud_url_path(site_url('admin/guides'));
    $crud->set_subject('Guide');
    $crud->unset_fields('created_time');
    $crud->set_relation('lang_id','langs','lang_name');
    $output = $crud->render();
    $output->title = "Guides";
    $this->load->view('admin',$output);
}
function messages(){
    $crud = new grocery_CRUD();

    $crud->set_table('messages_content');
    $crud->set_crud_url_path(site_url('admin/messages'));
    $crud->set_subject('Message');
    $crud->unset_fields('created_time');
    $crud->set_relation('lang_id','langs','lang_name');
    $output = $crud->render();
    $output->title = "Messages";
    $this->load->view('admin',$output);
}
function photos(){
    $crud = new grocery_CRUD();

    $crud->set_table('photos_content');
    $crud->set_crud_url_path(site_url('admin/photos'));
    $crud->set_subject('photo');
    $crud->unset_fields('created_time');
    $crud->set_field_upload('source_path','assets/uploads/photos');
    $crud->set_relation('lang_id','langs','lang_name');
    $output = $crud->render();
    $output->title = "Photos";
    $this->load->view('admin',$output);
}
function rituals(){
    $crud = new grocery_CRUD();

    $crud->set_table('rituals_content');
    $crud->set_crud_url_path(site_url('admin/rituals'));
    $crud->set_subject('ritual');
    $crud->unset_fields('created_time');
    $crud->set_relation('lang_id','langs','lang_name');
    $output = $crud->render();
    $output->title = "Rituals";
    $this->load->view('admin',$output);
}

function videos(){
    $crud = new grocery_CRUD();

    $crud->set_table('videos_content');
    $crud->set_crud_url_path(site_url('admin/videos'));
    $crud->set_subject('video');
    $crud->unset_fields('created_time');
    $crud->set_field_upload('source_path','assets/uploads/videos');
    $crud->set_field_upload('cover','assets/uploads/covers');
    $crud->set_relation('lang_id','langs','lang_name');
    $output = $crud->render();
    $output->title = "Videos";
    $this->load->view('admin',$output);
}
}
 ?>