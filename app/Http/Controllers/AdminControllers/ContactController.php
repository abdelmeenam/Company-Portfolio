<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterfaces\ContactInterface;
use App\Http\Requests\contact\CreateContactRequest;
use App\Http\Requests\contact\DeleteContactRequest;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{

    public $ContactInterface;

    public function __construct(ContactInterface $ContactInterface){
        $this->ContactInterface = $ContactInterface;
    }

    public function index(){
        return $this->ContactInterface->index();
    }

    public function delete(DeleteContactRequest $request)
    {
        return $this->ContactInterface->delete($request);
    }

    public function sendMessage(CreateContactRequest $request){
        return $this->ContactInterface->loginPsendMessageage($request);
    }

}
