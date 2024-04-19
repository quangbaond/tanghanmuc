<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = $this->argument('url');

        file_get_contents($url);
    }
}
