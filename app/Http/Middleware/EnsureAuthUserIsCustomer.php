<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;

class EnsureAuthUserIsCustomer {
   public function handle($request, Closure $next)
   {
      if (Gate::allows('customer')) {
         return $next($request);
      }

      if ($request->expectsJson()) {
         return response()->json(['message'=> 'Only registered customer can access.'], 401);
      } else {
         session(['error_message' => 'Only registered customer can access. Please signin to proceed.']);

         return redirect(route('signin'));
      }
   }
}