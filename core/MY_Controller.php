<?php if ( !defined('BASEPATH') )
{
    exit('No direct script access allowed');
}

/**
 * MY_Controller extends CI_Controller from the core of the codeigniter, this controller
 * will include default functions which will be used throughout the application
 *
 */
class MY_Controller extends CI_Controller
{

    var $layout = "layout/default"; //default layout
    var $data;

    /**
     * Constructor of the class
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Sets layout of the page
     */
    function _layout($layout)
    {
        $this->layout = (!empty($layout)) ? 'layout/' . trim(strtolower($layout)) : 'layout/default';
    }

    /**
     * Sets view of the page
     */
    function _view($view = 'index', $output = false)
    {
        $this->data['view'] = $view;
        $this->load->view($this->layout, $this->data, $output);
    }
    
}
