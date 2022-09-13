<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Policy;
use App\Models\Terms;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {

        $aboutInfo = About::all();
        $contactInfo = Contact::all();
        $policyInfo = Policy::all();
        $termsInfo = Terms::all();

        return view('pages.admin.dashboard')
            ->with('aboutInfo', $aboutInfo)
            ->with('contactInfo', $contactInfo)
            ->with('policyInfo', $policyInfo)
            ->with('termsInfo', $termsInfo);

    }

    public function updateAbout(request $request, $id)
    {
        $aboutInfo = About::findOrFail($id);
        $aboutInfo->description = $request->input('description');
        $aboutInfo->update();
        return back()->with('message', 'Information updated successfully!');
    }

    public function updateContact(request $request, $id)
    {
        $contactInfo = Contact::findOrFail($id);
        $contactInfo->description = $request->input('description');
        $contactInfo->update();
        return back()->with('message', 'Information updated successfully!');
    }

    public function updatePolicy(request $request, $id)
    {
        $policyInfo = Policy::findOrFail($id);
        $policyInfo->description = $request->input('description');
        $policyInfo->update();
        return back()->with('message', 'Information updated successfully!');
    }
    public function updateTerms(request $request, $id)
    {
        $termsInfo = Terms::findOrFail($id);
        $termsInfo->description = $request->input('description');
        $termsInfo->update();
        return back()->with('message', 'Information updated successfully!');
    }
}
