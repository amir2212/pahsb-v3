<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PahsbContactController extends Controller
{
    public function enquiry(): View
    {
        return view('pahsb.contact-v6', ['formType' => 'enquiry']);
    }

    public function registration(): View
    {
        return view('pahsb.contact-v6', ['formType' => 'registration']);
    }

    public function storeEnquiry(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['required', 'string', 'max:30', 'regex:/^[0-9+() .-]{7,30}$/'],
            'subject' => ['required', 'string', 'max:180'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
            'consent' => ['accepted'],
            'website' => ['nullable', 'max:0'],
        ]);

        DB::table('pahsb_submissions')->insert([
            'type' => 'enquiry',
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'subject' => $data['subject'],
            'message' => $data['message'],
            'project_interest' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('pahsb.enquiry')->with('pahsb_success', 'Your enquiry has been saved in this local test website. No email was sent.');
    }

    public function storeRegistration(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['required', 'string', 'max:30', 'regex:/^[0-9+() .-]{7,30}$/'],
            'project_interest' => ['required', 'in:residential,commercial,general'],
            'message' => ['nullable', 'string', 'max:3000'],
            'consent' => ['accepted'],
            'website' => ['nullable', 'max:0'],
        ]);

        DB::table('pahsb_submissions')->insert([
            'type' => 'registration',
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'subject' => null,
            'message' => $data['message'] ?? null,
            'project_interest' => $data['project_interest'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('pahsb.registration')->with('pahsb_success', 'Your interest has been saved in this local test website. No email was sent.');
    }
}
