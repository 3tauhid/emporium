<?php

namespace App\Http\Middleware;

use Closure;

class EnsureAuthUserIsCustomer {
   public function handle($request, Closure $next)
   {
      $user = auth()->user(); /** @var \App\Models\User $user */
      
      if (isset($user)) {
         if ($user->isCustomer() && $user->is_active != 0) {
            return $next($request);
         }
      }

      if ($request->expectsJson()) {
         return response()->json(['message'=> 'Only registered customer can access.'], 401);
      } else {
         session(['error_message' => 'Only registered customer can access. Please signin to proceed.']);

         return redirect(route('signin'));
      }
   }
}