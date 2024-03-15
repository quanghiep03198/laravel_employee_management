<x-guest-layout>


   <div class="prose mb-6 text-center prose-h2:mb-1">
      <h2>Register</h2>
      <p class="text-muted">Create your own account. It's free and only take a
         minute</p>
   </div>
   <form method="POST" action="{{ route('register') }}" class="mb-6 flex w-full max-w-lg flex-col gap-6 rounded-lg bg-background p-6 xl:px-6 xl:py-10">
      @csrf
      <!-- Name -->
      <x-ui.input-field-control name="name" :label="'Your name'" :errors="$errors" type="text" placeholder="Your display name" required />
      <x-ui.input-field-control name="email" :label="'Email'" :errors="$errors" type="email" placeholder="example@email.com" />
      <x-ui.input-field-control name="password" :label="'Password'" :errors="$errors" type="password" placeholder="******" />
      <x-ui.input-field-control name="password_confirmation" :label="'Confirm password'" :errors="$errors" type="password" placeholder="******" />
      <x-ui.button class="py-3">
         {{ __('Register') }}
      </x-ui.button>
   </form>
   <a class="self-center rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
      href="{{ route('login') }}">
      {{ __('Already registered?') }}
   </a>

</x-guest-layout>
