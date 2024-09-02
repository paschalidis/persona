<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessSubmission;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class SubmissionController extends Controller
{

    public function create(Request $request): Response
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $submission = new Submission();

        $submission->name = $request->input('name');
        $submission->email = $request->input('email');
        $submission->message = $request->input('message');

        try {
            ProcessSubmission::dispatch($submission->toArray());
        } catch (\Throwable $exception){
            //log the $exception
            Log::error($exception->getMessage(), $exception->getTrace());
            return  response(['message' => 'submission failed'], 400);
        }

        return response(['message' => 'submission queued'], 200);
    }
}
