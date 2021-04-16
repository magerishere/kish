<?php

namespace App\Jobs;

use App\Http\Controllers\SmsController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendSmsVerificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $MobileNumbers,$Messages,$SendDateTime;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($MobileNumbers,$Messages,$SendDateTime)
    {
        $this->MobileNumbers = $MobileNumbers;
        $this->Messages = $Messages;
        $this->SendDateTime = $SendDateTime;
      
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $SmsIR_SendMessage = new SmsController();
        $SmsIR_SendMessage->sendMessage($this->MobileNumbers, $this->Messages, $this->SendDateTime);
    }
}
