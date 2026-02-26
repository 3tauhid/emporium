<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;

class EnsureAuthUserIsAdmin {
   public function handle($request, Closure $next)
   {
      if (Gate::allows('admin')) {
         return $next($request);
      }

      if ($request->expectsJson()) {
         return response()->json(['message'=> 'Only admin can access.'], 401);
      } else {
         session(['error_message' => 'Only admin can access. Please signin to proceed.']);

         return redirect(route('signin'));
      }
   }
}