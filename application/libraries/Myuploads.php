<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

require_once 'multiple-uploads/upload.class.php';

class Myuploads {
    protected $_obj = NULL;
    protected $_multi = NULL;
    
    public function __construct() {
        $this->_obj =& get_instance();
        $this->_obj->load->config('Myupload');
        $options = $this->_obj->config->item('myuploads');
        $this->_multi = new UploadHandler($options);
    }
    
   public function getMultiUploadInstance(){
       return $this->_multi;
   }
}