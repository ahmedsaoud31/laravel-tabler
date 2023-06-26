<?php

namespace Tabler\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
 
class TablerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tabler:install';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Tabler';
 
	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
        
        $this->question('Please be patient while we copy all Tabler files to your project');
        $this->call('vendor:publish', [
            '--provider' => 'Tabler\TablerServiceProvider'
        ]);
        $this->question('Go To:');
        $this->info(url(config('tabler.dashboard_name') ?? 'dashboard'));
	}
}