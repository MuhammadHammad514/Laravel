<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        Commands\SendMail::class,
    ];
    protected function schedule(Schedule $schedule): void
    {
        // Example:
        // $schedule->command('app:send-mail')->daily();
        $schedule->command('app:send-mail')->everyFiveSeconds();
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
