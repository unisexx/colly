<?php
class Products extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['products'] = new Product();
		// if(@$_GET['search'])$data['Products']->where("title like '%".$_GET['search']."%'");
		// if(@$_GET['status'])$data['Products']->where('status',$_GET['status']);
		// if(@$_GET['category_id'])$data['Products']->where("category_id = ".$_GET['category_id']);
		$data['products']->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['product'] = new Product($id);
		$this->template->append_metadata(js_datepicker());
		$this->template->build('admin/form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$Product = new Product($id);
            $_POST['slug'] = clean_url($_POST['title']['th']);
            $_POST['title'] = lang_encode($_POST['title']);
            $_POST['detail'] = lang_encode($_POST['detail']);
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			if($_FILES['image']['name'])
			{
				if($id)$Product->delete_file($Product->id,'uploads/Product/thumbnail','image');
				$Product->image = $Product->upload($_FILES['image'],'uploads/Product/');
			}
			$Product->from_array($_POST);
			$Product->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$Product = new Product($id);
			$_POST['approve_id'] = $this->session->userdata('id');
			$Product->approve_date = date("Y-m-d H:i:s");
			$Product->from_array($_POST);
			$Product->save();
			echo approve_comment($Product);
		}

	}
	
	function delete($id=FALSE)
	{
		if($id)
		{
			$Product = new Product($id);
			$Product->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>