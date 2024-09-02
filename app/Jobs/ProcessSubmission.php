<?php

namespace App\Jobs;

use AllowDynamicProperties;
use App\Models\Submission;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessSubmission implements ShouldQueue
{
    use Queueable;

    public string $name;
    public string $email;
    public string $message;

    /**
     * Create a new job instance.
     */
    public function __construct($submissionArray)
    {
        $this->name = $submissionArray['name'];
        $this->email = $submissionArray['email'];
        $this->message = $submissionArray['message'];
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $submission = new Submission();

        $submission->name = $this->name;
        $submission->email = $this->email;
        $submission->message = $this->message;


        $isSaved = $submission->save();
    }
}
