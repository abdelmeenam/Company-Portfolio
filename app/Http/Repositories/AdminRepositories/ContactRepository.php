<?php

namespace App\Http\Repositories\AdminRepositories;

use App\Http\Interfaces\AdminInterfaces\ContactInterface;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;

class ContactRepository implements  ContactInterface
{
    public function index(){
        $contacts = Contact::get();
        return view('Admin.contact.contacts', compact('contacts'));
    }

    public function delete( $request)
    {
        $contact = Contact::find($request->contact_id);
        $contact->delete();

        Alert::success('Success', 'Contact was deleted');
        return redirect()->back();
    }

    public function sendMessage($request){
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
