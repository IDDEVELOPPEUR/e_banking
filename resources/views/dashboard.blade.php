<x-app-layout>

{{--    deuxieme partie du header--}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('E-BANKING') }}
        </h2>
    </x-slot>
{{--fin    deuxieme partie du header--}}

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 t">
                    {{ __("Vous vous êtes connecté avec succès
!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
