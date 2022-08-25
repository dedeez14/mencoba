<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repos\ContactRepository;



class ContactController extends Controller
{
    private $contactRepo;

    public function __construct(ContactRepository $contactRepo){
        $this->ContactRepository =  $contactRepo;
    }

    public function index(){
        $contact = $this->ContactRepository->getAll();

        return $contact;
    }

    public function show($id){
        $contact = $this->ContactRepository->findById($id);
        return $contact;
    }


}
