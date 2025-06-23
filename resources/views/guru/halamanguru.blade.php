@extends('guru.layout.layout_guru')

@push('styles')
@endpush

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>
                                Total Siswa
                            </h4>
                        </div>
                        <div class="card-body">
                            {{ $users }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Kelas</h4>
                        </div>
                        <div class="card-body">
                            {{ count($kelas) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><a href="{{ route('guru.dashboard') }}#hasil-belajar" style="text-decoration: none; color: inherit;">Hasil Belajar</a></h4>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>
                                <a href="/users" class="text-gray-600 hover:underline">
                                    Daftar Pengguna
                                </a>
                            </h4>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Statistik Jumlah Siswa per Kelas</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart" height="110"></canvas>
                        @php
                            $labels = $kelas->pluck('kelas');
                            $data = $kelas->pluck('jumlah_siswa');
                        @endphp

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            const ctx = document.getElementById('myChart').getContext('2d');

                            const myChart = new Chart(ctx, {
                                type: 'bar', // bisa diganti dengan 'pie', 'doughnut', 'line', dll.
                                data: {
                                    labels: {!! json_encode($labels) !!},
                                    datasets: [{
                                        label: 'Jumlah Siswa per Kelas',
                                        data: {!! json_encode($data) !!},
                                        backgroundColor: 'rgba(210, 180, 140, 0.7)', // coklat cerah (tan)
                                        borderColor: 'rgba(160, 82, 45, 1)', // coklat lebih tua untuk tepi
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            ticks: {
                                                precision: 0 // pastikan tidak ada angka desimal
                                            }
                                        }
                                    },
                                    plugins: {
                                        legend: {
                                            position: 'top'
                                        }
                                    }
                                }

                            });
                        </script>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kelas & Jumlah Siswa</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($kelas as $kelas)
                            @php
                                $persentase = min(100, ($kelas->jumlah_siswa / $users) * 100);
                            @endphp
                            <div class="mb-4">
                                <div class="text-small float-right font-weight-bold text-muted">{{ $kelas->jumlah_siswa }}
                                </div>
                                <div class="font-weight-bold mb-1">{{ $kelas->kelas }}</div>
                                <div class="progress" data-height="3">
                                    <div class="progress-bar" role="progressbar" data-width="{{ $persentase }}%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body" id="hasil-belajar">
            <h1>Daftar Hasil Belajar Siswa</h1>

            <form method="GET" action="{{ route('guru.dashboard') }}" class="mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <input type="text" name="materi" class="form-control" placeholder="Cari berdasarkan materi"
                            value="{{ request('materi') }}">
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="nama" class="form-control" placeholder="Cari berdasarkan nama user"
                            value="{{ request('nama') }}">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Cari</button>
                    </div>
                </div>
            </form>
            <div class=" table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <th>Kelas</th>
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
                                <td>{{ $quiz->user->nama }}</td>
                                <td>{{ $quiz->user->Kelas }}</td>
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
            </div>
            {{ $quizzes->withQueryString()->links('pagination::bootstrap-4') }}

        </div>

    </section>
@endsection


@push('scripts')
@endpush
