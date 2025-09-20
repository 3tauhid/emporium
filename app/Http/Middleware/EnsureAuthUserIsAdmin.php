<?php

namespace App\Http\Middleware;

use Closure;

class EnsureAuthUserIsAdmin {
   public function handle($request, Closure $next)
   {
      $user = auth()->user(); /** @var \App\Models\User $user */
      
      if (isset($user)) {
         if ($user->isAdmin()) {
            return $next($request);
         }
      }

      if ($request->expectsJson()) {
         return response()->json(['message'=> 'Only admin can access.'], 401);
      } else {
         session(['error_message' => 'Only admin can access. Please signin to proceed.']);

         return redirect(route('signin'));
      }
   }
}