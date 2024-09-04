<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\BasicInfo;
use App\Models\Rooms;
use App\Models\Logo;
use Illuminate\Support\Facades\Schema;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('basic_infos')) {
            // Code dépendant de la table
            // Fetch the data from the models
            $email = BasicInfo::take(1)->first();
            $phone = BasicInfo::where('id', 2)->first();
            $rooms = Rooms::where('IsOnline', 1)->get();
            $logo = Logo::take(1)->first();
            View::share([
                'email' => $email,
                'phone' => $phone,
                'rooms' => $rooms,
                'logo' => $logo,
            ]);
        }
        // This will dump the contents of $logo and stop the execution
        // Share the data with all views
    }
}
