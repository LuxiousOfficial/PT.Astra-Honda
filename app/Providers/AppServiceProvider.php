<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Position;
use App\Models\Skill;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        Gate::define('admin', function(User $user) {
            return $user->is_admin;
        });
        
        Gate::define('developer', function(User $user) {
            return $user->is_developer;
        });

        Gate::define('profile', function(User $user, Profile $profile) {
            return $user->id === $profile->user_id;
        });

        Gate::define('education', function(User $user, Education $education) {
            return $user->id === $education->user_id;
        });

        Gate::define('experience', function(User $user, Experience $experience) {
            return $user->id === $experience->user_id;
        });

        Gate::define('skills', function(User $user, Skill $skill) {
            return $user->id === $skill->user_id;
        });

        Gate::define('position', function(User $user, Position $position) {
            return $user->id === $position->user_id;
        });
    }
}
