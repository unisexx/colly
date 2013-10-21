<?php
class Products extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['products'] = new Product();
        $data['products']->order_by('id','desc')->get_page();
        $this->template->build('index',$data);
    }
    
    function inc_home(){
        $data['products'] = new Product();
        $data['products']->order_by('id','desc')->get(3);
        $this->load->view('inc_home',$data);
    }
    
    function view($id){
        $data['product'] = new Product($id);
        $this->template->build('view',$data);
    }
}
?>