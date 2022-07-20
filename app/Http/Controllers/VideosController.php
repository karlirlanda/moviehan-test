<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideosController extends Controller
{
    public function get_url(Videos $video, $id)
    {
        $video = Videos::where('id', $id)->first();

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
