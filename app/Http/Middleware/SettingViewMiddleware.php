<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class SettingViewMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah ada data setting yang bisa diambil
        $setting = Setting::first();
        $companyName = $setting ? $setting->companyName : 'Pesisir Wedding';

        // Membagikan data ke semua tampilan
        View::share('companyName', $companyName);

        return $next($request);
    }
}
