<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">

                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block font-medium text-sm text-gray-700">
                                NIM
                            </label>

                            <input
                                type="text"
                                name="nim"
                                value="{{ old('nim', $mahasiswa->nim) }}"
                                class="mt-1 block w-full rounded-md border-gray-300"
                                required
                            >

                            @error('nim')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label class="block font-medium text-sm text-gray-700">
                                Nama
                            </label>

                            <input
                                type="text"
                                name="nama"
                                value="{{ old('nama', $mahasiswa->nama) }}"
                                class="mt-1 block w-full rounded-md border-gray-300"
                                required
                            >

                            @error('nama')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label class="block font-medium text-sm text-gray-700">
                                Program Studi
                            </label>

                            <input
                                type="text"
                                name="program_studi"
                                value="{{ old('program_studi', $mahasiswa->program_studi) }}"
                                class="mt-1 block w-full rounded-md border-gray-300"
                                required
                            >

                            @error('program_studi')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label class="block font-medium text-sm text-gray-700">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email', $mahasiswa->email) }}"
                                class="mt-1 block w-full rounded-md border-gray-300"
                                required
                            >

                            @error('email')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <div class="mb-6">
                            <label class="block font-medium text-sm text-gray-700">
                                Angkatan
                            </label>

                            <input
                                type="number"
                                name="angkatan"
                                value="{{ old('angkatan', $mahasiswa->angkatan) }}"
                                class="mt-1 block w-full rounded-md border-gray-300"
                                required
                            >

                            @error('angkatan')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <div style="display:flex; gap:12px; margin-top:20px;">

                            <button
                                type="submit"
                                style="display:inline-block; background-color:#eab308; color:white; padding:10px 20px; border-radius:8px; border:none; font-weight:600; cursor:pointer;"
                            >
                                Simpan Perubahan
                            </button>


                            <a
                                href="{{ route('mahasiswa.index') }}"
                                style="display:inline-block; background-color:#6b7280; color:white; padding:10px 20px; border-radius:8px; text-decoration:none; font-weight:600;"
                            >
                                Batal
                            </a>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>