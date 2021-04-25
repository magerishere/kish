<?php

namespace App\Jobs;

use App\Mail\InviteEmployeeMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class InviteEmployeeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $email,$employerName,$id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email,$employerName,$id)
    {
        $this->email = $email;
        $this->employerName = $employerName;
        $this->id = $id;
        // dd($this);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new InviteEmployeeMail($this->employerName,$this->id));

    }
}
