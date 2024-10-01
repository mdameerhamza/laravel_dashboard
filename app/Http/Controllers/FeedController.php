<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directories = array_map('basename', File::directories(resource_path('views/feed')));
        $feed = [];
        // $folder = 
        foreach($directories as $directory){
            $feed[$directory] = [];
            $path = resource_path('views/feed/'.$directory);
            $files = File::files($path);
            $blades = [];
            foreach($files as $path){
                $file = pathinfo($path);
                $filename = explode('.blade', $file['filename']);
                array_push($blades,$filename[0]);
            }
            $feed[$directory]= $blades;
        }
        // dd($feed);
        // $path = resource_path('views/content');

        // $files = File::files($path);
        // $blades = [];
        // foreach($files as $path){
        //     $file = pathinfo($path);
        //     $filename = explode('.blade', $file['filename']);
            
        //     array_push($blades,$filename[0]);
        // }
        // dd($blades);
        return view('welcome')->with(['feed' => $feed]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function show(Feed $feed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function edit(Feed $feed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feed $feed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feed $feed)
    {
        //
    }
}
