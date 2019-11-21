<?php 

	Class Dashboard extends CI_Controller{
		public function index(){

		// view dashboaed	
		if(!$this->session->userdata('id'))
			return redirect('/');	 			
			
			// $this->load->view('cgi/dashboard');
			$this->load->model('reg_model');
			$data = $this->reg_model->get_model();
			$this->load->view('cgi/dashboard', ['postdata' => $data]);
		}

		// add user data
		public function new_user(){

			// Validate the insert form
			if(!$this->session->userdata('id'))
			return redirect('/');

			$this->form_validation->set_rules('userid','Username','required');	
			$this->form_validation->set_rules('pwd','Password','required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning">','</div>');
			$this->form_validation->set_rules('fname','First Name','required');	
			$this->form_validation->set_rules('lname','Last Name','required');	
			$this->form_validation->set_rules('tel','Phone','required');	
			$this->form_validation->set_rules('country','Country','required');
			$this->form_validation->set_rules('email','Email','required');		
			// $this->form_validation->run();

			if($this->form_validation->run()){
				
					
				$save = array(
				'username' 		=> $this->input->post('userid'),
				'first_name' 	=> $this->input->post('fname'),
				'last_name' 	=> $this->input->post('lname'),
				'country' 		=> $this->input->post('country'),
				'phone' 		=> $this->input->post('tel'),
				'email' 		=> $this->input->post('email'),
				'password' 		=> password_hash($this->input->post('pwd'), BYCRYP),
				'created_at'	=> time(),
				'updated_at'	=> time()
					);
				//connect to database

				$this->load->model('reg_model');
				if($this->reg_model->insert($save)){
					echo "Working";
				}else{
					echo "Not Working";
				}

				

			}else{
				$this->load->view('cgi/new_user');
				
			}	

		}

		// update user data
		public function del(){
		$this->load->model('reg_model');	
		$id=$this->input->get('id');
		$this->reg_model->delete_model($id);
		redirect("dashboard");


		}
	}
	
 ?>