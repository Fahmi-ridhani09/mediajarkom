@extends('guru.layout.layout_guru')

@section('content')
<div class="container">
    <h1>Daftar Quiz</h1>

    <form method="GET" action="{{ route('quizzes.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-5">
                <input type="text" name="materi" class="form-control" placeholder="Cari berdasarkan materi" value="{{ request('materi') }}">
            </div>
            <div class="col-md-5">
                <input type="text" name="nama" class="form-control" placeholder="Cari berdasarkan nama user" value="{{ request('nama') }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary btn-block">Cari</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama User</th>
                <th>Materi</th>
                <th>Nilai</th>
                <th>Status</th>
                <th>Waktu Mulai</th>
                <th>Waktu Selesai</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($quizzes as $quiz)
                <tr>
                    <td>{{ $quiz->user->name }}</td>
                    <td>{{ $quiz->materi }}</td>
                    <td>{{ $quiz->nilai }}</td>
                    <td>{{ ucfirst($quiz->status) }}</td>
                    <td>{{ $quiz->waktu_mulai }}</td>
                    <td>{{ $quiz->waktu_selesai }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Tidak ada data ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $quizzes->withQueryString()->links() }}
</div>
@endsection
