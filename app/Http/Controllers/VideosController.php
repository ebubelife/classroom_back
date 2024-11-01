<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function add_videos(Request $request)
{
    if ($request->isMethod('post')) {

        $url = '';
        // Validate the input
        $request->validate([
            'video_source' => 'string|in:youtube,local',
            'subject' => 'required|string',
            'title' => 'required|string',
            'exam' => 'required|string',
            'class' => 'required|string',
            'youtube_link' => 'required_if:video_source,youtube|nullable|string',
            'video_file' => 'required_if:video_source,local|nullable|file|mimes:mp4,avi,mkv,webm', // Max 10gb
        ]);


       try{
         // Check video source and handle accordingly
         if ($request->input('video_source') === 'youtube') {
            // Handle YouTube video
            $url = $request->input('youtube_link');
        } elseif ($request->input('video_source') === 'local') {
            // Handle local video file upload
            if ($request->hasFile('video_file')) {
                $file = $request->file('video_file');
                $filePath = $file->store('videos', 'public');
                $url = $filePath;
            }
        }
       }catch(\Exception $e){
        return redirect()->back()->with('error', 'An error occurred while processing the video.');
       }

       //  Store the video details (assuming you have a Video model)
        Videos::create([
            'url' => $url,
            'subject' => $request->input('subject'),
            'title' => $request->input('title'),
            'exam' => $request->input('exam'),
            'class' => $request->input('class'),
            'video_source' => $request->input('video_source') ,
        ]); 

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Video added successfully - <a href="'.route('admin.dashboard.videos').'" style="text-decoration: underline; color: #007bff;">View videos</a>');


    }else{


    // If the request method is GET, simply display the form
    return view('admin_videos_add');
    }


}


public function videos(Request $request)
{

      $videos = Videos::all();
      return view('admin_videos', ['videos' => $videos, 'count' => $videos->count()]);
      
}

}
