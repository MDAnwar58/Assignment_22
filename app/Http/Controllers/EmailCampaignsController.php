<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailCampaignRequest;
use App\Models\User;
use Illuminate\Http\Request;

class EmailCampaignsController extends Controller
{
    function index()
    {
        return view('email-campaign.index');
    }
    function campaign(EmailCampaignRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('email.campaign')->with('success', 'Your information send successfully!');
    }
}
