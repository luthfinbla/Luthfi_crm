<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Customer Aktif</title>
    <link rel="stylesheet" href="/css/customer.css" />
</head>
<body>
    <header class="header">
        <h1>✅ Customer Aktif</h1>
        <p>Berikut adalah daftar customer yang telah disetujui.</p>
    </header>

    <main class="main-content">
        <table class="leads-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                    @if ($lead->project && strtolower($lead->project->status) === 'disetujui')
                        <tr>
                            <td>{{ $lead->nama }}</td>
                            <td>{{ $lead->email }}</td>
                            <td>{{ $lead->telepon }}</td>
                            <td>{{ $lead->project->status }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>
