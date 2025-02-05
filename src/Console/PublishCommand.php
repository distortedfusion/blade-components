<?php

namespace DistortedFusion\BladeComponents\Console;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'df:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish all of the ddfsn/blade-components resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--tag' => 'df-assets',
            '--force' => true,
        ]);
    }
}
