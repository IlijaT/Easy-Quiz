<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\User;
use App\Result;
use App\Question;
use App\Test;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('home', function ($view) {
            $users = User::all()->count();
            $tests = Test::all()->count();
            $questions = Question::all()->count();
            $results = Result::all()->count();

            return $view->with(compact('users', 'tests', 'questions', 'results'));
        });

    }
}
