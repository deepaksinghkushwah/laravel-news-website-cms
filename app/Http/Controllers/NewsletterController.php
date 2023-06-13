<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function save(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
        ]);

        $exists = Newsletter::where("email", $validate['email'])->get();
        //dd($exists);
        if (count($exists)>0) {
            return redirect()->route("category.index")->with("danger", "Already subscribed to newsletter");
        } else {
            Newsletter::create([
                'email' => $validate['email'],
            ]);

            return redirect()->route("category.index")->with("success", "You are subscribed to newsletter");

        }

    }
}
