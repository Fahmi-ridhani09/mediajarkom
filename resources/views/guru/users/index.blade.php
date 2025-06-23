<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Daftar Siswa</h4>
            <a href="/users/create" class="btn btn-success">+ Tambah Siswa</a>
        </div>

        <!-- Contoh pesan sukses -->
        <div class="alert alert-success" style="display: none;">
            Data berhasil disimpan.
        </div>

        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ganti bagian ini dengan data dari controller -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>siswa</td>
                    <td>10A</td>
                    <td>
                        <a href="/users/1/edit" class="btn btn-sm btn-primary">Edit</a>
                        <form action="/users/1" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus siswa ini?')">
                            <!-- Tambahkan input _method dan csrf jika pakai Laravel -->
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="CSRF_TOKEN_HERE">
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                <!-- Ulangi baris ini untuk data lainnya -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
