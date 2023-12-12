<?php

namespace App\Http\Middleware;

use App\Models\SessionCount;
use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (is_null(session()->get('locale'))) {
            session()->put('locale', Config::get('app.locale'));
            session()->save();
        }

        App::setLocale(session('locale'));



        return $next($request);
    }
}
