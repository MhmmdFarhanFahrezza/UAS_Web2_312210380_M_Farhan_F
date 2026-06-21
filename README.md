# UAS Pemrograman Web 2 - E-Report (Sistem Pelaporan Masyarakat)

Sistem Pelaporan Pengaduan Layanan Masyarakat (E-Report) adalah aplikasi berbasis web dengan **Decoupled Architecture** yang memisahkan Backend (API) dan Frontend (SPA). Aplikasi ini dirancang untuk memfasilitasi komunikasi antara warga dan administrator pemerintah secara efisien.

---

## 🚀 Fitur Utama

### 👨‍💻 Administrator (Wajib Login)
- **Dashboard Overview**: Ringkasan statistik laporan masuk (Pending, Proses, Selesai).
- **Manajemen Laporan**: Mengubah status laporan dan menghapus aduan yang tidak valid.
- **Manajemen Kategori**: Menambah, mengubah, dan menghapus kategori pengaduan.
- **Security**: Proteksi endpoint dengan Bearer Token dan Navigation Guards.

### 👥 Publik (Tanpa Login)
- **Landing Page**: Visualisasi statistik laporan secara real-time.
- **E-Form**: Melaporkan kendala layanan publik disertai unggah foto bukti.

---

## 🛠️ Spesifikasi Teknologi
- **Backend API**: PHP CodeIgniter 4 (RESTful Resource Controller)
- **Frontend SPA**: VueJS 3 (Composition API)
- **Styling**: TailwindCSS (Responsive Utility-First)
- **Database**: MySQL/MariaDB
- **Authentication**: Token-based Authentication

---

## 📂 Struktur Folder
```text
.
├── backend-api/           # RESTful API Server (CodeIgniter 4)
│   ├── app/Filters/       # Auth & CORS Security
│   ├── public/uploads/    # Storage Gambar Bukti
│   └── .env               # Konfigurasi Database
├── frontend-spa/          # Single Page Application (VueJS 3)
│   ├── index.html         # Struktur & Layout Utama
│   └── app.js             # Logic, Routing, & Axios Interceptor
├── .github/workflows/     # CI/CD GitHub Pages
├── database.sql           # Skema Database & Data Awal
└── README.md              # Dokumentasi Proyek
```

---

## 🧪 Dokumentasi Pengujian API (Postman)

### 1. Proof of Security (Error 401)
Membuktikan bahwa endpoint `/category` (POST) tidak dapat diakses tanpa menyertakan token yang valid.

> **[TEMPEL SCREENSHOT POSTMAN 401 DI SINI]**
> *(Keterangan: Screenshot menunjukkan respon Status 401 Unauthorized)*

### 2. Authentication (Login)
Mendapatkan token untuk akses administrator.

> **[TEMPEL SCREENSHOT POSTMAN LOGIN DI SINI]**
> *(Keterangan: Screenshot menunjukkan respon JSON berisi token sukses)*

### 3. Authorized Access (Success)
Mengakses endpoint terproteksi setelah memasukkan Bearer Token.

> **[TEMPEL SCREENSHOT POSTMAN SUKSES DI SINI]**
> *(Keterangan: Screenshot menunjukkan Status 200/201 setelah memasukkan token)*

---

## 📸 Dokumentasi Antarmuka (UI)

### 🏠 Landing Page & Dashboard
> **[TEMPEL SCREENSHOT HALAMAN BERANDA DI SINI]**
> *(Keterangan: Tampilan Statistik Publik)*

> **[TEMPEL SCREENSHOT DASHBOARD ADMIN DI SINI]**
> *(Keterangan: Sidebar navigasi dan ringkasan data)*

### 📝 Form Pengaduan & Manajemen Data
> **[TEMPEL SCREENSHOT FORM LAPOR DI SINI]**
> *(Keterangan: Antarmuka pengiriman aduan masyarakat)*

> **[TEMPEL SCREENSHOT TABEL DATA ADMIN DI SINI]**
> *(Keterangan: Halaman manajemen laporan dan kategori)*

---

## ⚙️ Cara Instalasi Lokal

1. **Database**: Import `database.sql` ke MySQL (Nama DB: `uasweb2_ereport`).
2. **Backend**:
   - Atur `.env` di folder `backend-api`.
   - Jalankan via XAMPP atau `php spark serve`.
3. **Frontend**:
   - Sesuaikan `baseURL` di `frontend-spa/app.js` ke URL backend Anda.
   - Buka `index.html` di browser.

---

**Informasi Login Admin:**
- **Username**: `admin`
- **Password**: `password`

---
**Dibuat oleh**: [NAMA ANDA] - [NIM ANDA]
**Mata Kuliah**: Pemrograman Web 2
