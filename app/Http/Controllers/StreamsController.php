<?php

namespace App\Http\Controllers;

use App\Models\Streams;
use Illuminate\Http\Request;

class StreamsController extends Controller
{
    public function stream_url(Streams $stream, $id)
    {
        $stream = Streams::where('id', $id)->first();

        $url = $stream->stream_url;

        return $url;
    }
}
