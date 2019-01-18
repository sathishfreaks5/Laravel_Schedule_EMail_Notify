<?php
namespace App\Console\Commands;

use Illuminate\Console\Command; 
use App\Mail\PendingUserSchedule;
use App\User; 
use DB;
use Mail;


class EmailInPendingUsers extends Command
{ 
   
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'EmailInPendingUsers:pendingusers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send the remainder email who is pending users';

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
     * @return mixed
     */
    public function handle()
    { 
        $user = \App\User::all();
        $mail = Mail::to($user->email)
                                ->queue(new \App\Mail\PendingUserSchedule($user));
    }
}
