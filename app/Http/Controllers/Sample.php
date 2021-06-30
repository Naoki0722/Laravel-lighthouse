<?php

namespace App\Http\Controllers;

use App\Jobs\SampleJob;
use Illuminate\Http\Request;

class Sample extends Controller
{

    public function job()
    {
        SampleJob::dispatch("afterResponse")->afterResponse();
        SampleJob::dispatch("delay 3 Seconds")->delay(now()->addSeconds(3));

        return view('sample.job');
    }
}
