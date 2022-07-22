<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function get_url(Video $video, $id)
    {
        $video = Video::where('id', $id)->first();

        $url = $video->video_url;

        return $url;
    }

    public function active_videos()
    {
        $video = DB::table('videos')->where('is_active', '=', 1)->get();

        return $video;
    }

    public function inactive_videos()
    {
        $video = DB::table('videos')->where('is_active', '=', 0)->get();

        return $video;
    }
}