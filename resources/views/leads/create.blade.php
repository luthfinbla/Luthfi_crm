<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tambah Calon Customer</title>
    <link rel="stylesheet" href="/css/create.css" />
</head>
<body>
    <header class="header">
        <h1>+ Tambah Calon Customer</h1>
        <p>Isi data calon pelanggan baru.</p>
    </header>

    <main class="main-content">
        <form action="{{ route('leads.store') }}" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Customer</label>
                <input type="text" name="nama" id="nama" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" name="telepon" id="telepon" required>
            </div>

            <button type="submit" class="btn">Simpan</button>
        </form>
    </main>
</body>
</html>
