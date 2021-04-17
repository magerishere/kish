<?php

namespace App\Console\Commands;

use App\Models\VerificationCode;
use Carbon\Carbon;
use DateTime;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DeleteVerificationCodeAfterOneMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:vcode';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete verification code which old than 1 minute';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $date = new DateTime;
        $date->modify('-1 minutes');
        $formatted_date = $date->format('Y-m-d H:i:s');

        $result = VerificationCode::where('created_at','<=',$formatted_date)->get();

        foreach($result as $item)
        {
            $item->delete();
        }

    }
}
