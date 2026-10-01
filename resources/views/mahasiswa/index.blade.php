<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Mahasiswa
        </h2>
    </x-slot>

    @php
        $isAdmin = auth()->user()->role === 'admin';
    @endphp

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div style="margin-bottom:16px; background:#dcfce7; color:#166534; padding:12px 16px; border-radius:8px;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:24px;">

                        <h3 style="font-size:18px; font-weight:600;">
                            Daftar Mahasiswa
                        </h3>

                        @if ($isAdmin)
                            <a
                                href="{{ route('mahasiswa.create') }}"
                                style="background:#2563eb; color:white; padding:10px 16px; border-radius:8px; text-decoration:none; font-weight:600;"
                            >
                                + Tambah Mahasiswa
                            </a>
                        @endif

                    </div>


                    @if ($mahasiswas->count() > 0)

                        <div style="overflow-x:auto;">

                            <table style="width:100%; border-collapse:collapse;">

                                <thead style="background:#f3f4f6;">

                                    <tr>

                                        <th style="border:1px solid #d1d5db; padding:10px; text-align:left;">
                                            NIM
                                        </th>

                                        <th style="border:1px solid #d1d5db; padding:10px; text-align:left;">
                                            Nama
                                        </th>

                                        <th style="border:1px solid #d1d5db; padding:10px; text-align:left;">
                                            Program Studi
                                        </th>

                                        <th style="border:1px solid #d1d5db; padding:10px; text-align:left;">
                                            Email
                                        </th>

                                        <th style="border:1px solid #d1d5db; padding:10px; text-align:left;">
                                            Angkatan
                                        </th>

                                        @if ($isAdmin)
                                            <th style="border:1px solid #d1d5db; padding:10px; text-align:left;">
                                                Aksi
                                            </th>
                                        @endif

                                    </tr>

                                </thead>


                                <tbody>

                                    @foreach ($mahasiswas as $mahasiswa)

                                        <tr>

                                            <td style="border:1px solid #d1d5db; padding:10px;">
                                                {{ $mahasiswa->nim }}
                                            </td>

                                            <td style="border:1px solid #d1d5db; padding:10px;">
                                                {{ $mahasiswa->nama }}
                                            </td>

                                            <td style="border:1px solid #d1d5db; padding:10px;">
                                                {{ $mahasiswa->program_studi }}
                                            </td>

                                            <td style="border:1px solid #d1d5db; padding:10px;">
                                                {{ $mahasiswa->email }}
                                            </td>

                                            <td style="border:1px solid #d1d5db; padding:10px;">
                                                {{ $mahasiswa->angkatan }}
                                            </td>


                                            @if ($isAdmin)

                                                <td style="border:1px solid #d1d5db; padding:10px;">

                                                    <div style="display:flex; gap:8px;">

                                                        <a
                                                            href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"
                                                            style="background:#eab308; color:white; padding:7px 12px; border-radius:6px; text-decoration:none; font-weight:600;"
                                                        >
                                                            Edit
                                                        </a>


                                                        <form
                                                            method="POST"
                                                            action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}"
                                                            style="display:inline;"
                                                            onsubmit="return confirm('Yakin ingin menghapus data ini?');"
                                                        >

                                                            @csrf

                                                            @method('DELETE')

                                                            <button
                                                                type="submit"
                                                                style="background:#dc2626; color:white; padding:7px 12px; border-radius:6px; border:none; font-weight:600; cursor:pointer;"
                                                            >
                                                                Hapus
                                                            </button>

                                                        </form>

                                                    </div>

                                                </td>

                                            @endif

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    @else

                        <p style="color:#6b7280;">
                            Belum ada data mahasiswa.
                        </p>

                    @endif

                </div>
            </div>

        </div>
    </div>

</x-app-layout>