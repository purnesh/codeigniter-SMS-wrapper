<?php
	class Sms extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		public function send_sms($to, $sms){
			$sms = urlencode(substr($sms,0,144));
			$curl_url = "https://site2sms.p.mashape.com/index.php?msg=".$sms."&phone=".$to."&pwd=".PASSWORD."&uid=".USER_NAME;
			$decode = $this->curl->simple_get($curl_url);
			return $decode;
		}
	}
?>
