<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Leads - Calon Customer</title>
    <link rel="stylesheet" href="/css/homepage.css" />
</head>
<body>
    <header class="header">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h1>📋 Daftar Calon Customer</h1>
                <p>Kelola calon pelanggan di bawah ini.</p>
            </div>
            <div style="display: flex; gap: 1rem;">
                <a href="{{ route('produk.index') }}" class="nav-link">🧾 Master Produk</a>
                <a href="{{ route('customer.index') }}" class="nav-link">✅ Customer Aktif</a>
            </div>

        </div>
    </header>
    <main class="main-content">
        <div class="action-buttons">
        <a href="{{ route('leads.create') }}" class="btn">+ Tambah Calon Customer</a>
        </div>
        <table class="leads-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                    <tr>
                        <td>{{ $lead->nama }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->telepon }}</td>
                        <td>
                            @if ($lead->project)
                                @if ($lead->project->status == 'Disetujui')
                                    <span class="status-approved">{{ $lead->project->status }}</span>
                                @else
                                    <span class="status-pending">{{ $lead->project->status }}</span>
                                @endif
                            @else
                                <span>Belum diajukan</span>
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn small edit">Edit</a>
                            <form action="{{ route('leads.destroy', $lead->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn small delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                            @if ($lead->project)
                                <button class="btn small process disabled" disabled>Sudah Diajukan</button>
                            @else
                                <a href="{{ route('project.create', $lead->id) }}" class="btn small process">Ajukan Project</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </tbody>
        </table>
    </main>
</body>
</html>
