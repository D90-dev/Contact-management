<?php

namespace App\Services;

use App\Models\Contact;

class ContactService
{
    public function getAllContacts()
    {
        return Contact::all();
    }

    public function createContact($data)
    {
        return Contact::create($data);
    }

    public function getContactById($id)
    {
        return Contact::findOrFail($id);
    }

    public function updateContact($id, $data)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($data);
        return $contact;
    }

    public function deleteContact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return $contact;
    }
}
