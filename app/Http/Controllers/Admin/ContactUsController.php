<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Redirect;

class ContactUsController extends Controller
{
  public function getlist()
  {
    $contacts = ContactUs::orderBy('id', 'DESC')->get();
    foreach ($contacts as $con) {
      $con->update([
        'status' => 1,
      ]);
    }
    return view('admin.contact-us.list')
      ->with('contacts', $contacts);
  }
  public function getUpdate(Request $request)
  {
    $input = $request->all();
    $contact = ContactUs::findOrfail($input['id']);

    if ($contact->status == 0) {
      $contact->update([
        'status' => 1
      ]);
    } else {
      $contact->update(['status' => 0]);
    }
    return redirect()->back();
  }
  public function getDelete($id)
  {
    ContactUs::find($id)->delete();
    return Redirect::action([ContactUsController::class, 'getlist']);
  }
}
