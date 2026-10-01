<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="space-y-4">
                        <div>
                            <p class="text-sm text-gray-500">NIM</p>
                            <p class="font-semibold">{{ $mahasiswa->nim }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-500">Nama</p>
                            <p class="font-semibold">{{ $mahasiswa->nama }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-500">Program Studi</p>
                            <p class="font-semibold">{{ $mahasiswa->program_studi }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="font-semibold">{{ $mahasiswa->email }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-500">Angkatan</p>
                            <p class="font-semibold">{{ $mahasiswa->angkatan }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('mahasiswa.index') }}"
                           class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
                            Kembali
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>