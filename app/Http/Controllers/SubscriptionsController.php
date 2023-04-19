<?php

namespace App\Http\Controllers;

use App\SubscriberWebsite;
use App\Subscriber;
use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{

    public function store(Request $request)
    {

        try {

            $this->validate($request, [
                'email' => 'required|email|max:255',
                'website_id' => 'required',
            ],[
                'email.required' => 'Thers is no email for the subscription!',
                'website_id.unique' => 'Thers is no website for the subscription!',
            ]);

                $subscriber = Subscriber::where('email',$request->email)->first() ;
                if (!isset($Subscriber) ){
                    $subscriber = new Subscriber ;
                    $subscriber->email = $request->email;
                    $subscriber->name = $request->name;
                    $subscriber->save();
                }

                $newSubscription = new SubscriberWebsite;

                $newSubscription->subscriber_id = $subscriber->id;
                $newSubscription->website_id = $request->website_id;

                $newSubscription->save();

                return response()->json(['msg' => 'saved correctly', 'status' => 200]) ;
            }catch (\Exception $e) {
                $message =  $e->getMessage();
                return response()->json(['msg' => $message, 'status' => 404]) ;
            }
    }


}
