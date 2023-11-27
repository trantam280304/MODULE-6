<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/* PostService */
use App\Services\Interfaces\PostServiceInterface;
use App\Services\PostService;

/* PostRepository */
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Eloquents\PostRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
            Các interface không thể dùng để khởi tạo đối tượng
            Binding interface với một lớp giúp chúng ta có thể dùng được
            Tắt dòng binding là thấy tai hại liền :)
        */
        /* Binding Services*/
        $this->app->singleton(PostServiceInterface::class, PostService::class);


        
        /* Binding Repositories*/
        $this->app->singleton(PostRepositoryInterface::class, PostRepository::class);

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
