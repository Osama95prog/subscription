<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function store(Request $request)
    {
        try {

        $this->validate($request, [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'website_id' => 'required',
        ],[
            'title.required' => 'Thers is any title for the post!',
            'title.unique' => 'The title for the post should be unique',
            'body.required' => 'Thers is no body for the post!',
            'website_id.required' => 'Thers is no website for the post!',
        ]);



            $post = new Post;

            $post->title = $request->title;
            $post->body = $request->title;
            $post->website_id = $request->website_id;
            $post->notes = $request->notes;
            if($request->file && $request->hasFile('file'))
                $post->file = $request->file->store('post_attached_files', 'public');

            $post->save();
            return response()->json(['msg' => 'saved correctly', 'status' => 200]) ;
        }catch (\Exception $e) {
            $message =  $e->getMessage();
            return response()->json(['msg' => $message, 'status' => 404]) ;
        }

    }


}
