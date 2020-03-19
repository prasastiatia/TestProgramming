<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class sendMail extends CI_Controller {

    function index()
{
    $config = Array(
  'protocol' => 'mail',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'rocketabis@gmail.com', // change it to yours
  'smtp_pass' => 'Aryani123', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);

        $message = '';
        $this->load->library('email', $config);
      $this->email->set_crlf("\r\n");
      $this->email->set_newline("\r\n");
      $this->email->from('rocketabis@gmail.com'); // change it to yours
      $this->email->to('tias1508@gmail.com');// change it to yours
      $this->email->subject('Resume from JobsBuddy for your Job posting');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }

}
}