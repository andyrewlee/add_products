<?php

class Manufacturer extends DataMapper {
    public $has_many = array('product');

    function __contruct($id = NULL)
    {
        parent::__construct($id);
    }
}

