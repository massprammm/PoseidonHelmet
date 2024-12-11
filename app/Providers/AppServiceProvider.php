<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Hapus pengikatan jika tidak diperlukan
    }

    public function boot(): void
    {
        //
    }
}