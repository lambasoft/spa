<?php

namespace App\Mailers;

use Illuminate\Contracts\Mail\Mailer;

class AppMailer{

	protected $mailer;
	
	protected $from = "no-reply@spaadvisor.me";
	protected $to;
	protected $view;
	protected $data = [];

	public function __construct(Mailer $mailer){
		$this->mailer = $mailer;
	}

	public function deliver(){

	}
}