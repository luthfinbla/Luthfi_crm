# Web CRM - PT. Smart (Divisi Sales)

Aplikasi Customer Relationship Management (CRM) berbasis web ini dikembangkan khusus untuk mendukung kegiatan divisi sales di PT. Smart. Sebelumnya, proses pencatatan data calon pelanggan, layanan yang ditawarkan, serta data pelanggan aktif masih dilakukan secara manual, yang rentan terhadap kesalahan, duplikasi, dan kesulitan dalam pelacakan informasi.

## Tujuan Proyek

Divisi sales PT. Smart sebelumnya masih mencatat data secara manual untuk:
- Calon customer (leads)
- Produk atau layanan internet
- Pelanggan aktif
- Penjualan

---

## Fitur Utama

### 1. Halaman Login
- Autentikasi pengguna (sales/manager)
- Hanya pengguna yang berhasil login yang bisa mengakses sistem

### 2. Halaman Leads (Calon Customer)
- Menampilkan daftar calon customer
- Menambahkan data calon customer
- Edit/Hapus calon customer (opsional)
- Pengajuan calon customer menjadi proyek

### 3. Halaman Master Produk (Layanan Internet)
- Menampilkan daftar layanan/produk yang tersedia
- Produk dipilih saat pengajuan calon customer ke project

### 4. Halaman Project (Proses Pengajuan)
- Menampilkan form pengajuan calon customer menjadi project
- Memilih layanan dari master produk
- Mengisi detail layanan
- Status awal: **Menunggu Approval Manager**
- Jika detail memuat kata *"fix"*, otomatis dianggap **disetujui**
- Data customer yang disetujui akan masuk ke halaman Customer

### 5. Halaman Customer Aktif
- Menampilkan daftar customer tetap (yang sudah disetujui)
- Menampilkan layanan yang digunakan oleh masing-masing customer

---

## Alur Sistem

Berikut adalah flow diagram alur aplikasi:

![Flow Diagram CRM]![luthfi_crm drawio](https://github.com/user-attachments/assets/4d8b7bb7-f670-489e-9b4e-4f9ffb274f31)


### Penjelasan Flow:
1. Pengguna login ke sistem.
2. Sales melihat dan mengelola daftar calon customer.
3. Sales dapat menambahkan, mengedit, atau menghapus calon customer.
4. Jika ingin diproses ke project, sales memilih layanan dari master produk dan mengisi detail pengajuan.
5. Project menunggu approval manager. Jika detail berisi "fix", status otomatis menjadi *disetujui*.
6. Jika disetujui, customer masuk ke halaman pelanggan tetap. Jika tidak, tetap di halaman project dengan status "menunggu" atau "ditolak".

---

## Teknologi yang Digunakan

- **Laravel** – Framework PHP untuk backend dan routing
- **Blade** – Template engine Laravel
- **PostgreSQL / MySQL** – Database untuk menyimpan data leads, produk, dan customer
- **HTML/CSS** – Tampilan antarmuka pengguna

---

## Struktur Halaman

- `/login` – Halaman login
- `/leads` – Daftar calon customer
- `/produk` – Master produk (layanan)
- `/project` – Form pengajuan calon customer
- `/customer` – Daftar customer tetap

---

##  Batasan Proyek Saat Ini

Beberapa fitur dalam aplikasi CRM ini masih dalam tahap pengembangan dan memiliki keterbatasan sebagai berikut:

-  **Integrasi Database Terbatas**  
  Saat ini, sistem hanya menghubungkan database untuk **data customer (leads)** dan **pengajuan project**. Halaman **Master Produk** masih bersifat statis dan belum terhubung langsung ke database maupun sistem pengajuan.

-  **Status Pengajuan Belum Otomatis Terproses**  
  Meskipun terdapat field `status` untuk menandai apakah pengajuan project telah disetujui atau belum, sistem **approval otomatis atau manual belum diimplementasikan**. Saat ini, semua project tetap berstatus "Menunggu Approval Manager".

-  **Customer Tetap Masih Kosong**  
  Karena status pengajuan belum pernah disetujui, halaman daftar **Customer Tetap** saat ini masih kosong. Proses pemindahan dari leads ke customer aktif akan tersedia setelah fitur approval selesai dibuat.

-  **Interaksi Master Produk dan Project Belum Tersinkronisasi**  
  Produk layanan yang dipilih dalam proses pengajuan project belum menggunakan data dari halaman **Master Produk** secara dinamis. Ini masih menggunakan dropdown statis.

>  Fitur-fitur di atas direncanakan akan dikembangkan pada tahap selanjutnya untuk menyempurnakan alur CRM secara penuh.

---

## Cara Menjalankan

```bash
# 1. Clone repo
git clone https://github.com/luthfinbla/laravel-xampp.git

# 2. Install dependency
composer install

# 3. Setup env & database
cp .env.example .env
php artisan key:generate
php artisan migrate

# 4. Jalankan server lokal
php artisan serve
