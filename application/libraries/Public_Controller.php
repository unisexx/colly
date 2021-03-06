<?php
class Public_Controller extends Master_Controller
{
	function __construct()
	{
		parent::__construct();
		
		header('Content-type: text/html; charset=UTF-8');
		$this->template->title('Collycollage');
		$this->template->set_theme('colly');
    	$this->template->set_layout('layout');
		
		// Set js
		$this->lang->load('admin');
		$this->template->append_metadata(js_notify());
		// $this->template->append_metadata(js_lightbox());
		
		// Set Keywords , Description
		// meta_description();
		// $this->template->append_metadata( meta('keywords','เกาหลี,ซีรีย์,ซีรีย์เกาหลี,ข่าวเกาหลี,เพลงเกาหลี,ซับไทย,ออนไลน์,series,korea,music,mv,kpop,k-pop,Inkigayo,Mnet,Music Core,บันเทิงเกาหลี,ดาราเกาหลี,นักร้องเกาหลี,หนังเกาหลี,ศิลปินเกาหลี,วาไรตี้เกาหลี'));
        
        //$this->output->cache(5);
        
        // Set Language
        if(!$this->session->userdata('lang')) $this->session->set_userdata('lang','th');
       
        if(@$this->session->userdata('lang') == "th"){
            $this->lang->load('public','thai');
        }elseif(@$this->session->userdata('lang') == "en"){
            $this->lang->load('public','english');
        }else{
            $this->lang->load('public','china');
        }
	}
}
?>