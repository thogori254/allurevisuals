<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderFormMail;
use Illuminate\Support\Facades\Mail;

class OrderFormController extends Controller
{
       	public function createform() 
	{

    return view('products');

	}

	public function storeform() 
	{
		$data = request()->validate([
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'subject' => 'required',
			'message' => 'required',

		]);

		// dd(request()->all());
		Mail::to('briandosha@gmail.com')->send(new OrderFormMail($data));

	}
}
