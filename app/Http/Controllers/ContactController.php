<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contact = Contact::first();
        $array = explode('lang=',$request->getQueryString());
        $lang = isset($array[1])? $array[1]:"fa";
        return view($lang.'.contact.index',compact('contact'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'subject' => 'required|string',
            'phoneOrEmail' => 'required',
            'text' => 'required|string|min:10|max:1000',
        ]);
        Contact::create($data);
        alert()->success('پیام شما برای مدیر سایت ارسال گردید');
        return back();
    }

}
