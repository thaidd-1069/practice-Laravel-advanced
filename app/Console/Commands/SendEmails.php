<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send {address?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a welcome email to address';

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
        $address = $this->argument('address');

        $address != null ? : $address = $this->ask('What is your mail address?');

        while (! $this->confirm('Do you sure about this mail address?'))
        {
            $address = $this->ask('What is your mail address?');
        }

        Mail::to($address)->send(new WelcomeMail());
    }
}
