<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Console\Scheduling\Schedule; // Make sure to import the Schedule class

class Kernel extends ConsoleKernel
{
    protected $commands = [
        // Register your console commands here
        // Example: \App\Console\Commands\YourCommand::class,
    ];

    protected function schedule(Schedule $schedule) // Use the fully qualified name if needed
    {
        // Schedule tasks here
        // $schedule->command('inspire')->hourly();
    }

    protected function commands()
    {
        // Load console commands from the Command directory
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
