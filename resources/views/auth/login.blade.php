<x-guest-layout class="flex h-screen w-screen items-center justify-center">
   <!-- Session Status -->
   <x-auth-session-status class="mb-4" :status="session('status')" />

   <form method="POST" action="{{ route('login') }}" class="mx-auto mt-10 flex w-full max-w-lg flex-col items-stretch gap-y-6 rounded-lg bg-background p-10">
      @csrf

      <!-- Email Address -->
      <x-ui.input-field-control name="email" placeholder="example@email.com" :error="$errors" :label="'Email'" type="email" />

      <!-- Password -->
      <x-ui.input-field-control name="password" placeholder="******" :error="$errors" :label="'Email'" type="password" />

      <!-- Remember Me -->
      <div class="flex items-center justify-between">
         <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-border text-primary focus:ring-[1px] focus:ring-primary" name="remember">
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
         </label>
         @if (Route::has('password.request'))
            <a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
               href="{{ route('password.request') }}">
               {{ __('Forgot your password?') }}
            </a>
         @endif
      </div>

      <x-ui.button>
         {{ __('Log in') }}
      </x-ui.button>
   </form>

   <div class="mt-10">
      <p><span class="text-gray-500">Not a member? </span> <a href="{{ route('register') }}" class="text-primary hover:underline">Register now</a></p>
   </div>
</x-guest-layout>
