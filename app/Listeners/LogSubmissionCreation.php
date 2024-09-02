<?php

namespace App\Listeners;

use App\Events\SubmissionCreated;
use App\Models\Submission;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogSubmissionCreation
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubmissionCreated $event): void
    {
        // Log the data
        Log::info("Submission saved successfully", ['name' => $event->submission->name, 'email' => $event->submission->email]);
    }
}
