<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use mail;
use App\Mail\WarningMail;
use App\Issue;
use App\User;
use Auth;

class WeeklyWarning extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'week:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an Warning email to all confirmed users';

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
    {       $user_id = User::all()->id;
            $start_date   = Issue::all()->updated_at;
            $end_date   = date();
            $diff    = abs($start_date-$end_date);
            $user    = User::all()->with('reserve','issue')->where('status','C')
                       ->where('user_id',$user_id)
                       ->get();
             //dd($user);
            //Mail::to($user)->send(new WarningMail());
            if($diff>3){
            Mail::to($user)->send(new WarningMail());
            }/*else{

            }*/
            $this->info('send Warning Successfully.!');          

    }
}
