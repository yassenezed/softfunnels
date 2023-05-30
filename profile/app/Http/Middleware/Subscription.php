<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Subscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!session()->has('pack')) {
            $packs = auth()->user()->packs()->wherePivot("end_date", '>=' , Carbon::today() )
                ->wherePivot('active', true)
                ->get();
            // dd( $packs );
        }

        $pack = session()->get('pack');
        session()->put('pack', $pack);
        
        return $next($request);
    }
}
