<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
              $this->load->view('welcome_message');
	}
        
        public function upload(){
            $this->load->library('Myuploads');
            $uploadHandler = $this->myuploads->getMultiUploadInstance();
            $this->output->set_header("Pragma: no-cache");
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
            $this->output->set_header('Content-Disposition: inline; filename="files.json"');
            $this->output->set_header('X-Content-Type-Options: nosniff');
            $this->output->set_header('Access-Control-Allow-Origin: *');
            $this->output->set_header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
            $this->output->set_header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');
            $uploadHandler->post();
            
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */