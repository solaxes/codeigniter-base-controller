<?php

if ( !defined( 'BASEPATH' ) )
{
    exit( 'No direct script access allowed' );
}

/**
 * Admin controller manage admin login related functionalities
 *
 * @author Jaidev Bangar <solaxes@gmail.com>
 * @link   http://www.solaxes.com
 */
class Home extends MY_Controller
{

    /**
     * Constructor of the file
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Loads index view with default layout
     */
    function index()
    {       
        $this->_view( 'index' );
    }

	
    function about()
    {        
		$this->_layout( 'main' );
        $this->_view( 'about' );
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */