<?php
class Product extends ORM {

    var $table = 'products';
	
	var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>