<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nome -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Telefone -->
        <div class="mt-4">
            <x-input-label for="telefone" :value="__('Telefone')" />

            <x-text-input id="telefone" class="block mt-1 w-full"
                            type="tel"
                            name="telefone"
                            required
                             />

            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- Observação -->
        <div class="mt-4">
            <x-input-label for="obs" :value="__('Observação')" />

            <x-text-input id="obs" class="block mt-1 w-full"
                            type="text"
                            name="obs" />

            <x-input-error :messages="$errors->get('obs')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"">
                {{ __('Emergênica ligue 188') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Confirma') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
