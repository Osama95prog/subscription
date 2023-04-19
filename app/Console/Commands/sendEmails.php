<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class sendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:send-emails ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to each user when creating a post.';

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
        return 0;
    }
}
