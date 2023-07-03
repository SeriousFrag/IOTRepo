<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Carbon\Carbon;
use App\Models\Device;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        $schedule->call(function () {
            $threshold = Carbon::now()->subSeconds(30);
    
            // Find devices that haven't been seen in the last 30 seconds
            $inactiveDevices = Device::where('last_seen', '<', $threshold)->get();
            // Mark the devices as inactive
            $inactiveDevices->each(function ($device) {
                $device->update(['active' => false]);
            });
    
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
