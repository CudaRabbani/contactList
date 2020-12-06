<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

  public function getContacts()
  {
    return response()->json(Contacts::all(), 200);
  }

  public function showContact(Request $request)
  {
    $id = $request->route('id');
    $contact = Contacts::find($id);

    if (is_null($contact)) {
      return response([
        'error' => 'Contact not found'
      ], 404);
    }

    return response()->json([$contact->toArray()], 200);
  }

  public function createContact(Request $request)
  {
    $newContact = Contacts::create($request->all());
    return response()->json([$newContact->toArray()], 201);
  }

  public function updateContact(Request $request)
  {
    $id = $request->route('id');
    $contact = Contacts::find($id);

    if (is_null($contact)) {
      return response([
        'error' => 'Contact not found, Can\'t update contact information'
      ], 404);
    }

    $updatedInfo = $request->all();
    $updatedInfo['last_updated_at'] = date_format(new \DateTime(), 'Y-m-d H:i:s');
    $contact->update($updatedInfo);
    return response()->json([$contact->toArray()], 200);

  }

  public function removeContact(Request $request)
  {
    $id = $request->route('id');

    $contact = Contacts::find($id);
    if (is_null($contact)) {
      return response([
        'error' => 'Contact not found, Can\'t be deleted'
      ], 404);
    }
    $deletedContact = $contact;
    $contact->delete();
    return response()->json([$deletedContact->toArray()], 200);
  }

}
