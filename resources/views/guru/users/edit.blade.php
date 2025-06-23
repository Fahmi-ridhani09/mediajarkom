<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-4">
        <h4>Edit Siswa</h4>

        <form action="{{ route('guru.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control"
                    value="{{ old('nama', $user->nama) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control"
                    value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" id="role" class="form-control" required>
                    <option value="siswa" {{ $user->role === 'siswa' ? 'selected' : '' }}>Siswa</option>
                    <option value="guru" {{ $user->role === 'guru' ? 'selected' : '' }}>Guru</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="form-control"
                    value="{{ old('kelas', $user->Kelas) }}">
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('users') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>
