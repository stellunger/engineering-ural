<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('main_page');
		$this->load->view('b_contact_form');
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{
		$this->load->view('header');
		$this->load->view($page_id);
		$this->load->view('b_contact_form');
		$this->load->view('footer');
	}

	public function send_email()
	{
		
		$data = array(
				'name' => $this->input->post('inputName'),
				'company' => $this->input->post('inputCompany'),
				'email' => $this->input->post('inputEmail'),
				'phone' => $this->input->post('inputPhone'),
				'message' => $this->input->post('inputMessage')
			);

		$email_subject = 'Новая заявка! ИНЖИНИРИНГ-УРАЛ.РФ: от '.$data['name'].'('.$data['company'].')';

		$email_content = 'Добрый день!\nВам пришла новая заявка с сайта ИНЖИНИРИНГ-УРАЛ.РФ.\n';
		$email_content .= 'Имя и фамилия: '.$data['name'];
		$email_content .= '\nКомпания: '.$data['company'];
		$email_content .= '\nЭлектронная почта: '.$data['email'];
		$email_content .= '\nТелефон: '.$data['phone'];
		$email_content .= '\nСообщение:\n'.$data['message'];

		$this->load->library('email');

		$this->email->from('robot@stellunger.ru', 'Робот Штеллунгера');
		$this->email->to('1@stellunger.ru'); 
		$this->email->cc('sales@stellunger.ru'); 
		$this->email->subject($email_subject);
		$this->email->message($email_content);	
		$this->email->send();

		$this->load->view('header');
		$this->load->view('thanks');		
		$this->load->view('footer');
	}
}

