<?php

namespace App\Http\Controllers;

use App\Website;
use Illuminate\Http\Request;

class WebsitesController extends Controller
{



    public function store(Request $request)
    {

        try {

        $this->validate($request, [
            'name' => 'required|unique:websites|max:255',


        ],[
            'name.required' => 'Thers is any name for the website!',
            'name.unique' => 'The naem for the website should be unique',
        ]);

            $website = new Website;

            $website->name = $request->name;
            $website->notes = $request->notes;

            $website->save();
            return response()->json(['msg' => 'saved correctly', 'status' => 200]) ;
        }catch (\Exception $e) {
            $message =  $e->getMessage() ;
            return response()->json(['msg' => $message, 'status' => 404]) ;
        }


    }


    public function getWebsite( $website_id)
    {
        return Website::with('post')->findOrFail($website_id) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
