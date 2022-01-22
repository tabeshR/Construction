<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::where('id','!=',1)->latest()->paginate(10);
        return view('admin.contacts.index',compact('contacts'));
    }


    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back();
    }

    public function getSocials()
    {
        $contact = Contact::find(1);
        return view('admin.contacts.socials',compact('contact'));
    }

    public function postSocials(Request $request)
    {
        $contact = Contact::find(1);
        $contact->update($request->all());
        alert()->success('عملیات با موفقیت انجام شد');
        return back();
    }
}
