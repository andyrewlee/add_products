<?php

class Product extends DataMapper {
    public $has_one = array('manufacturer');

    function __contruct($id = NULL)
    {
        parent::__construct($id);
    }
}

