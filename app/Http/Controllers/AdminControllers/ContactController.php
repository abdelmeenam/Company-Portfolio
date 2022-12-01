<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\contact\CreateContactRequest;
use App\Http\Requests\contact\DeleteContactRequest;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{

    public function index(){
        $contacts = Contact::get();
        return view('Admin.contact.contacts', compact('contacts'));
    }

    public function delete(DeleteContactRequest $request)
    {
        $contact = Contact::find($request->contact_id);
        $contact->delete();

        Alert::success('Success', 'Contact was deleted');
        return redirect()->back();
    }

    public function sendMessage(CreateContactRequest $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        Contact::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,

        ]);
        Alert::success('Success', 'Message was sent');
        return redirect()->back();
    }

}
