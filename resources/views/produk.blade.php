<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Master Produk - Layanan</title>
    <link rel="stylesheet" href="/css/produk.css" />
</head>
<body>
    <header class="header">
        <h1>🧾 Master Produk Layanan</h1>
        <p>Pilih produk layanan yang tersedia untuk ditawarkan ke calon customer.</p>
    </header>

    <main class="main-content">
        <div class="produk-grid">
            <div class="produk-card">
                <h2>Layanan A</h2>
                <p>Internet Dedicated 100 Mbps</p>
                <button class="btn">Pilih Produk</button>
            </div>
            <div class="produk-card">
                <h2>Layanan B</h2>
                <p>VPN MPLS untuk kantor cabang</p>
                <button class="btn">Pilih Produk</button>
            </div>
            <div class="produk-card">
                <h2>Layanan C</h2>
                <p>Cloud Hosting Private Server</p>
                <button class="btn">Pilih Produk</button>
            </div>
        </div>

        <div class="footer-action">
            <a href="{{ route('leads.index') }}" class="back-link">← Kembali ke Homepage</a>
        </div>
    </main>
</body>
</html>
