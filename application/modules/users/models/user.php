<?php
class User extends ORM
{
	public $table = "users";
	
	public $has_one = array("level","user_type");
	
	public $has_many = array("category","about","agent","bnew","download","link","weblink","hilight","contact_detail","coverpage","product","album","c_album");
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>