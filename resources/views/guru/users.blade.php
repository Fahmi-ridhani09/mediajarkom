@extends('guru.layout.layout_guru')

@push('styles')
<style>
    body, .section, .section-body {
        background-color: #fefce8 !important; /* krem terang */
        color: #5d3a00; /* coklat tua */
    }

    .card {
        background-color: #f5e0c3; /* coklat pastel cerah */
        border: 1px solid #e0c9a6;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.05);
    }

    .card-header h4, .section-header h1 {
        color: #5d3a00;
        font-family: 'Comic Sans MS', cursive, sans-serif;
    }

    .table {
        background-color: #ffffff;
        color: #5d3a00;
    }

    .table thead {
        background-color: #d7b899; /* coklat muda */
        color: #3e2723;
    }

    .table-hover tbody tr:hover {
        background-color: #f9f1e7;
    }

    .badge.bg-primary {
        background-color: #a97453 !important; /* badge coklat sedang */
    }

    .badge.bg-secondary {
        background-color: #bc987e !important;
    }

    .btn-custom {
        background-color: #a97453;
        color: white;
        font-weight: bold;
    }

    .btn-custom:hover {
        background-color: #bc987e;
    }

    .text-center {
        text-align: center;
    }

    .section-body {
        margin-top: 20px;
    }
</style>
@endpush

@section('main-content')
<section class="section">
    <div class="section-header">
        <h1>Daftar Pengguna</h1>
    </div>

    <div class="section-body">
        <div class="card-body">
            <div class="mb-4">
                <a href="{{ route('guru.users.create') }}" class="btn btn-custom">
                    Tambah Pengguna
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover shadow-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Kelas</th>
                            <th>Waktu Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>
                                    <span class="badge bg-{{ $user->role === 'guru' ? 'primary' : 'secondary' }}">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->Kelas }}</td>
                                <td>{{ $user->created_at->format('d-m-Y H:i') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('guru.users.edit', $user->id) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{ route('guru.users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data pengguna.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
@endpush
