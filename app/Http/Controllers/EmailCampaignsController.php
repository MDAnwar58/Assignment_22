<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailCampaignRequest;
use App\Mail\MailCampagin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailCampaignsController extends Controller
{
    function index()
    {
        return view('email-campaign.index');
    }
    function campaign(EmailCampaignRequest $request)
    {
        $user = User::create($request->validated());
        // $user = $request->validated();
        Mail::to($request->email)->send(new MailCampagin($user));
        return redirect()->route('email.campaign')->with('success', 'Your information send successfully!');
    }
}
