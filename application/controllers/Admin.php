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
        $crud->display_as('UserName', 'إسم المستخدم');
        $crud->display_as('Name', 'الإسم');
        $crud->display_as('speciality', 'التخصص');
        $crud->display_as('About', 'عن المدرب');
        $crud->display_as('Email', 'البريد الإلكترونى');
        $crud->display_as('Picture', 'الصورة');
        $crud->display_as('Phone', 'الجوال');
        $crud->display_as('Twitter', 'تويتر');
        $crud->display_as('Facebook', 'الفيسبوك');
        $crud->display_as('Snapchat', 'سناب شات');
        $crud->display_as('Youtube', 'يوتيوب');
        $crud->display_as('CV', 'السيرة الذاتية');
        $crud->display_as('Instagram', 'إنستاجرام');
        $crud->display_as('UpdateDate', 'تاريخ التعديل');
        $crud->display_as('CreateDate', 'تاريخ الانشاء ');

        $output = $crud->render();
        $output->title = "بيانات المدرب";
        $this->load->view('admin', $output);
    }

}

?>