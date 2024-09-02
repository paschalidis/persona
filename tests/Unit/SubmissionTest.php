<?php

namespace Tests\Unit;

use App\Models\Submission;
use PHPUnit\Framework\TestCase;

class SubmissionTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_modelSetterGetter(): void
    {
        $name = 'John Wick';
        $email = 'john@mail.com';
        $message = 'Test it';
        $submission = New Submission();
        $submission->name = $name;
        $submission->email = $email;
        $submission->message = $message;

        $this->assertTrue($name === $submission->name);
        $this->assertTrue($email === $submission->email);
        $this->assertTrue($message === $submission->message);
    }
}
