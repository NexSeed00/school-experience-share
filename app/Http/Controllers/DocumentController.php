<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests\DocumentRequest;

class DocumentController extends Controller
{
    //
    public function send(DocumentRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->last . $request->first;
        $customer->email = $request->email;
        $customer->tel = $request->tel;
        $customer->content = $request->content;
        $customer->save();

        return view('document.thanks');
    }
}
