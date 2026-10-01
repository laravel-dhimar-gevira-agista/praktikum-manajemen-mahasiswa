<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 style="font-size: 24px; font-weight: 700; margin-bottom: 10px;">
                        Selamat Datang!
                    </h3>

                    <p style="font-size: 18px; margin-bottom: 8px;">
                        Anda login sebagai:
                        <strong>
                            {{ ucfirst(auth()->user()->role) }}
                        </strong>
                    </p>

                    <p style="color: #6b7280;">
                        Selamat datang, {{ auth()->user()->name }}.
                    </p>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>