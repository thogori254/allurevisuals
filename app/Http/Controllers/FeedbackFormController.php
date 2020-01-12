<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FeedbackFormMail;
use Illuminate\Support\Facades\Mail;
class FeedbackFormController extends Controller
{
    	public function createform() 
	{

    return view('home');

	}

	public function storeform() 
	{
		$data = request()->validate([
			'email' => 'required|email',
			'message' => 'required',

		]);

		// dd(request()->all());
		Mail::to('briandosha@gmail.com')->send(new EnquiryFormMail($data));

	}

}
