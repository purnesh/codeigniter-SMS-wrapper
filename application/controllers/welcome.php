<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$response = $this->sms->send_sms('PHONE_NUMBER_OF_RECIPIENT', 'SMS_MESSAGE_HERE');
		var_dump($response);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
