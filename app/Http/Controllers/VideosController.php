<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function get_url(Videos $video, $id)
    {

        $video = Video::where('id', $id)->first();

        $url = $video->video_url;

        return $url;
    }
}
