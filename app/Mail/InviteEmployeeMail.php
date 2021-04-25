<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InviteEmployeeMail extends Mailable
{
    use Queueable, SerializesModels;
    private $id;
    private $employerName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($employerName,$id)
    {
        $this->id = $id; // Employer id
        $this->employerName = $employerName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.InviteEmployee')
            ->with(['employerName'=>$this->employerName,'id'=>$this->id]);
    }
}
