<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Detail;
use App\User;
use App\Post;
use DB;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'profile_image' => 'image|nullable|max:1999',
            'address' => 'required',
            'country' => 'required',
            'user_details' => 'required'
        ]);

        // Handle File Upload
        if ($request->hasFile('profile_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile_image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $detail = new Detail;
        $detail->user_id = auth()->user()->id;
        $detail->address = $request->input('address');
        $detail->country = $request->input('country');
        $detail->user_details = $request->input('user_details');
        $detail->profile_image = $fileNameToStore;
        $detail->save();

        return redirect('/Setup/2')->with('success', 'Select Profile Type');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show profile
        
        $detail = Detail::find($id)
            ->leftJoin('users', 'details.user_id', '=', 'users.id')
            ->where('users.id','=',$id)
            ->leftJoin('posts', 'details.user_id', '=', 'posts.user_id')
            ->where('posts.user_id','=',$id)
            ->get();
            

        return view('pages.ShowProfile')->with('details', $detail);
        
         
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'profile_image' => 'image|nullable|max:1999',
            'address' => 'required',
            'country' => 'required',
            'user_details' => 'required'
        ]);

        // Handle File Upload
        if ($request->hasFile('profile_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile_image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        //Update Detail
        $detail = Detail::find($id);
        $detail->address = $request->input('address');
        $detail->country = $request->input('country');
        $detail->user_details = $request->input('user_details');
        if($request->hasFile('profile_image')){
            $post->cover_image = $fileNameToStore;
        }
        $detail->save();

        return view('/posts')->with('success', 'Updated Profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
