<?php
class Members extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function inc_home(){
		$data['categories'] = new Category();
        $data['categories']->where('parents = 1')->order_by('id','asc')->get();
		$this->load->view('inc_home',$data);
	}
    
    function inc_header(){
        $data['categories'] = new Category();
        $data['categories']->where('parents = 1')->order_by('id','asc')->get();
        $this->load->view('inc_header',$data);
    }
	
	function category($id){
		$data['category'] = new Category($id);
        $data['members'] = new Member();
        $data['members']->where('category_id = '.$id)->order_by('id','desc')->get_page();
		$this->template->build('category',$data);
	}
}
?>