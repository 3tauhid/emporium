<?php

namespace App\Http\Middleware;

use Closure;

class EnsureAuthUserIsSeller {
   public function handle($request, Closure $next)
   {
      $user = auth()->user(); /** @var \App\Models\User $user */
      
      if (isset($user)) {
         if ($user->isSeller() && $user->is_active != 0) {
            return $next($request);
         }
      }

      if ($request->expectsJson()) {
         return response()->json(['message'=> 'Only registered seller can access.'], 401);
      } else {
         session(['error_message' => 'Only registered seller can access. Please signin to proceed.']);

         return redirect(route('signin'));
      }
   }
}