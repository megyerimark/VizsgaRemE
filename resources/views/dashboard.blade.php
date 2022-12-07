<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  dark:text-gray-100 leading-tight">
            {{ __('Irányítópult') }}
        </h2>
    </x-slot>

<!-- 
    header -->
    <div class="py-12">
        <div class=" ml-4 pm-2">
            <div class="bg-white dark:bg-pink-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-gray-300">
                    {{ __("Bejelentkezve") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
