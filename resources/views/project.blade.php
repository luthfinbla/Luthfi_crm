<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Proses Calon Customer menjadi Project</title>
    <link rel="stylesheet" href="/css/project.css" />
</head>
<body>
    <header class="header">
        <h1>🛠️ Proses Calon Customer Menjadi Project</h1>
        <p>Pengajuan layanan oleh Sales dan Approval oleh Manager</p>
    </header>

    <main class="main-content">
        <form method="POST" action="{{ route('project.store') }}">
            @csrf
            <input type="hidden" name="lead_id" value="{{ $lead->id }}">

            <div class="form-group">
                <label for="customer_name">Nama Customer</label>
                <input type="text" id="customer_name" name="customer_name" value="{{ $lead->nama }}" readonly>
            </div>

            <div class="form-group">
                <label for="product">Pilih Produk Layanan</label>
                <select id="product" name="product">
                    <option value="service_1">Layanan A</option>
                    <option value="service_2">Layanan B</option>
                    <option value="service_3">Layanan C</option>
                </select>
            </div>

            <div class="form-group">
                <label for="details">Detail Lainnya</label>
                <textarea id="details" name="details" rows="4" placeholder="Masukkan detail pengajuan proyek..."></textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" id="status" name="status" value="Menunggu Approval Manager" readonly>
            </div>

            <button type="submit" class="btn">Ajukan Project</button>
        </form>
    </main>
</body>
</html>
