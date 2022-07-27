<?php

namespace App\Http\Controllers;

use App\Models\Stream;

class StreamController extends Controller
{
    public function stream_url(Stream $stream, $id)
    {
        $stream = Stream::where('id', $id)->first();

        $url = $stream->stream_url;

        return $url;
    }
}
