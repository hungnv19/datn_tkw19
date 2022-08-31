<?php

namespace App\Providers;

use App\Repositories\Admin\AdminInterface;
use App\Repositories\Admin\AdminRepository;
use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\UserTmp\UserTmpInterface;
use App\Repositories\UserTmp\UserTmpRepository;
use App\Repositories\News\NewsInterface;
use App\Repositories\News\NewsRepository;
use App\Repositories\Prefecture\PrefectureInterface;
use App\Repositories\Prefecture\PrefectureRepository;
use App\Repositories\City\CityInterface;
use App\Repositories\City\CityRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AdminInterface::class, AdminRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(UserTmpInterface::class, UserTmpRepository::class);
        $this->app->bind(NewsInterface::class, NewsRepository::class);
        $this->app->bind(PrefectureInterface::class, PrefectureRepository::class);
        $this->app->bind(CityInterface::class, CityRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
