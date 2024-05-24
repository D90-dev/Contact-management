<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Services\ContactService;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        return $this->contactService->getAllContacts();
    }

    public function store(CreateContactRequest $request)
    {
        $requestData = $request->validated();
        $contact = $this->contactService->createContact($requestData);
        return response()->json(['message' => 'Contact created successfully', 'contact' => $contact]);
    }

    public function show($id)
    {
        $contact = $this->contactService->getContactById($id);
        return response()->json(['contact' => $contact]);
    }

    public function update(UpdateContactRequest $request, $id)
    {
        $requestData = $request->validated();
        $contact = $this->contactService->updateContact($id, $requestData);
        return response()->json(['message' => 'Contact updated successfully', 'contact' => $contact]);
    }

    public function destroy($id)
    {
        $this->contactService->deleteContact($id);
        return response()->json(['message' => 'Contact deleted successfully']);
    }
}
