<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!--Card 1-->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                        </svg>
                        You're logged in !
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2 hover:bg-blue-dark font-bold py-2 px-4 rounded">
                        <a href="/user">Change my profil !</a>
                    </div>
                    <p class="text-gray-700 text-base">{{ Auth::user()->email }}</p>
                </div>
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="instaLogo.png" alt="Avatar of Writer">
                    <div class="text-sm">
                        <p class="text-gray-900 leading-none">{{ Auth::user()->name }}</p>
                        <p class="text-gray-600">Since {{ Auth::user()->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- LIVEWIRE -->
                    <livewire:form>
                    <livewire:posts>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
