<?php

namespace App\Console\Commands;

use App\Mail\MessagForUser;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class every_day_message extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'User:Message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sned Message Mail Every Day To Users';

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
        $emails = User::select('email')->get();
        $data = ['title' => 'Hi', 'body' => 'From Body'];
        foreach ($emails as $email) {
            Mail::to($email)->send(new MessagForUser($data));
        }
    }
}
