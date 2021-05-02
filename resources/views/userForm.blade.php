<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/user">Your profil !</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                        <div>
                            <label for="name" value="Name" />

                            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <label for="email" value="Email" />

                            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <label for="password" value="Password" />

                            <input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     required autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <label for="image_confirmation" value="Confirm Image" />

                            <input id="image_confirmation" class="block mt-1 w-full"
                                     type="file"
                                     name="image_confirmation" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button class="ml-4">
                                Edit
                            </button>
                            <a class="ml-4" href="{{}}">
                                Delete
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
