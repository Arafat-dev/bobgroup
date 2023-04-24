<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

           <!-- Lastname -->
           <div>
            <x-input-label for="lastname" :value="__('Prenom')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"  required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>



           <!-- CIN number -->
           <div>
            <x-input-label for="cni" :value="__('Numero CIN')" />
            <x-text-input id="cni" class="block mt-1 w-full" type="text" name="identity_number" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('cin')" class="mt-2" />
        </div>




           <!-- City -->
           <div>
            <x-input-label for="ville" :value="__('Ville')" />
            <x-text-input id="ville" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>



           <!-- Adress -->
           <div>
            <x-input-label for="address" :value="__('Adresse')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>




           <!-- Tel -->
           <div>
            <x-input-label for="name" :value="__('Telephone')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('tel')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
