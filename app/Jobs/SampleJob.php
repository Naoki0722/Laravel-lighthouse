<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SampleJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $sample;

    public function __construct($sample)
    {
        $this->sample = $sample;
    }

    public function handle()
    {
        error_log("SampleJob " . $this->sample . PHP_EOL, 3, __DIR__ . DIRECTORY_SEPARATOR  . "SampleJob.log");
    }
}
