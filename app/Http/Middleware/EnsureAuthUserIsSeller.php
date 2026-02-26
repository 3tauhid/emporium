<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;

class EnsureAuthUserIsSeller {
   public function handle($request, Closure $next)
   {
      if (Gate::allows('seller')) {
         return $next($request);
      }

      if ($request->expectsJson()) {
         return response()->json(['message'=> 'Only registered seller can access.'], 401);
      } else {
         session(['error_message' => 'Only registered seller can access. Please signin to proceed.']);

         return redirect(route('signin'));
      }
   }
}