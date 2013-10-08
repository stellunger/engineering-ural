<?php
class SendMail extends CI_Controller {

	function index()
	{
		// собираем данные в массив

		$data = array(
			'name' => $this->input->post('inputName'),			
			'phone' => $this->input->post('inputPhone'),			
			'message' => $this->input->post('inputMessage')
			);

		// составляем письмо

		$email_subject = "Новая заявка! РосПромИнжиниринг. Имя: ".$data['name']."."; // тема письма

		$email_content = "Привет, РосПромИнжиниринг!\n\nВам пришла новая заявка.\n\n";
		$email_content .= "Имя: ".$data['name'];		
		$email_content .= "\nТелефон: ".$data['phone'];		
		$email_content .= "\n\nСообщение: \n".$data['message'];

		$this->load->library('email');

		$this->email->from('robot@stellunger.ru', 'Робот Штеллунгера');
		$this->email->to('rpi@stellunger.ru'); 		
		$this->email->cc('imstellunger@gmail.com'); 		

		$this->email->subject($email_subject);
		$this->email->message($email_content);	

		$this->email->send();

		//echo $this->email->print_debugger();

		$this->load->view('header');
		$this->load->view('main_page');
		$this->load->view('footer');
	}	
}
?>