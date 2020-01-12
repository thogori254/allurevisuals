<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EnquiryFormMail;
use Illuminate\Support\Facades\Mail;

class EnquiryFormController extends Controller
{
	public function createform() 
	{

    return view('contact.contact');

	}

	public function storeform() 
	{
		$data = request()->validate([
			'email' => 'required|email',
			'message' => 'nullable',

		]);
		Mail::to('briandosha@gmail.com')->send(new EnquiryFormMail($data));

	}

}
