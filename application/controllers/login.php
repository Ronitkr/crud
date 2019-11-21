<?php 

	Class Login extends CI_Controller{

		// public function __construct(){
		// 	parent:: __construct();
		// 	if($this->session->userdata('id'))
		// 	return redirect('dashboard');
		// }


		public function index(){

			$this->form_validation->set_rules('userid','Username','required');	
			$this->form_validation->set_rules('pwd','Password','required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if($this->session->userdata('id'))
			return redirect('dashboard');

			if($this->form_validation->run()){

				$username = $this->input->post('userid');
				$pass = $this->input->post('pwd');
				
				//echo "username : ". $username . "<br>" . "password : ". $pass;
				
				$this->load->model('Login_model');
				$id = $this->Login_model->conn_login($username,$pass);
				// $result = $id->password;
				// print_r(password_verify($pass, $result));exit;

					if($id) {
					
					$this->session->set_userdata('id', $id);
					return redirect('dashboard');

					}else{
						return redirect('/');
					}	

			}else{		
			$this->load->view('cgi/login');

			}
			
		}

		public function logout(){

			$this->session->unset_userdata('id');
			return redirect('/');
		}
	}


 ?>