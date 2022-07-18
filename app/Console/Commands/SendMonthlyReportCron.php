<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Mail;
use \Carbon\Carbon;
use App\Mail\SendMonthlyReport;

class SendMonthlyReportCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monthlyreport:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $users = User::whereMonth('date_of_birth', '=', date('m'))->whereDay('date_of_birth', '=', date('d'))->get();
        $users  = User::where('email','fraz.shabbir54@gmail.com')->get();
        foreach($users as $key => $user)
        {
            $email = $user->email;

            Mail::to($email)->send(new SendMonthlyReport($user));
        }

        // return 0;
    }
}
