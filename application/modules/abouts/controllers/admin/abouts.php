<?php
Class Abouts extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
    function index()
    {
        $data['abouts'] = new About();
        $data['abouts']->order_by('orderlist','asc')->get_page();
        $this->template->append_metadata(js_checkbox('approve'));
        $this->template->build('admin/index',$data);
    }
    
    function form($id=false){
        $data['about'] = new About($id);
        $this->template->build('admin/form',$data);
    }
    
    function save($id=false){
        if($_POST){
            $about = new About($id);
            $_POST['slug'] = clean_url($_POST['title']['th']);
            $_POST['title'] = lang_encode($_POST['title']);
            $_POST['detail'] = lang_encode($_POST['detail']);
            if(!$id)$_POST['user_id'] = $this->session->userdata('id');
            if($_FILES['file']['name'])
            {
                $about->file = $about->upload($_FILES['file'],'uploads/about/');
            }
            $about->from_array($_POST);
            $about->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_POST['referer']);
    }
    
    function delete($id=FALSE)
    {
        if($id)
        {
            $new = new About($id);
            $new->delete();
            set_notify('success', lang('delete_data_complete'));
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    function save_orderlist($id=FALSE){
        if($_POST)
        {
                foreach($_POST['orderlist'] as $key => $item)
                {
                    if($item)
                    {
                        $about = new About(@$_POST['orderid'][$key]);
                        $about->from_array(array('orderlist' => $item));
                        $about->save();
                    }
                }
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
	
}
?>