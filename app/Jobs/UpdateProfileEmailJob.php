<?php

namespace App\Jobs;

use App\Mail\ChangeUserProfileMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class UpdateProfileEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $email;
    private $values;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email,$values)
    {
        $this->email = $email;
        $this->values = $values;


    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new ChangeUserProfileMail($this->values));


    }
}
