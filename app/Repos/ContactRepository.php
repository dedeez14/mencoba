<?php

namespace App\Repos;

use App\Models\Contact;


class ContactRepository
{
        public function getAll(){
            $contact = Contact::where('is_active', 1)
            ->get()
            ->map(function ($contact) {
                return $this->format($contact);
            });
            return $contact;
        }

        public function findById($id){
            $contact = Contact::where('id', $id)->firstOrFail();
            return $this->format($contact);
        }

        public function format($contact){
            return [
                'nik' => $contact->nik,
                'nama' => $contact->nama,
                'email' => $contact->email,
                'status' => $contact->is_active ? 'aktif' : 'tidak_aktif'
            ];
        }
}
