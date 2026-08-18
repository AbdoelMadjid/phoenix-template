# Phoenix Template - Laravel Admin Dashboard

Template admin web berbasis **Laravel** dan **Phoenix Admin Template** yang dilengkapi dengan komponen UI modern, sistem navigasi sidebar rekursif dinamis, serta fitur pencarian menu *real-time*.

---

## 📌 Deskripsi Proyek

**Phoenix Template Laravel** adalah starter kit dashboard admin yang dirancang untuk mempercepat pengembangan aplikasi web berskala kecil hingga besar. Template ini menggabungkan fleksibilitas kerangka kerja Laravel dengan desain estetis dan kaya fitur dari Phoenix Admin.

### ✨ Fitur Utama
- **Dashboard UI Modern**: Tampilan antarmuka yang bersih, responsif, serta mendukung mode Gelap/Terang (*Dark/Light Mode*).
- **Sidebar Navigasi Rekursif**: Menu navigasi yang disusun secara terstruktur melalui konfigurasi PHP (`config/sidebar/`).
- **Pencarian Menu Real-Time**: Pencarian menu di atas sidebar secara langsung (*live search*) tanpa me-refresh halaman.
- **Layout Modular Blade**: Struktur Blade view yang rapi dan terpisah (`layouts.vertical`, `layouts.partials`).
- **Vite & Modern Asset Bundling**: Kompilasi stylesheet dan script yang cepat dan efisien.

---

## 💻 Prasyarat Sistem

Sebelum memulai proses instalasi, pastikan sistem Anda memenuhi kebutuhan berikut:

- **PHP** `>= 8.2` (Direkomendasikan PHP 8.3)
- **Composer** `>= 2.x`
- **Node.js** `>= 18.x` & **NPM**
- **Database**: MySQL / MariaDB / PostgreSQL / SQLite
- **Web Server**: Laragon / XAMPP / Nginx / Apache / PHP Built-in Server

---

## 🚀 Langkah-Langkah Clone & Instalasi

Ikuti panduan di bawah ini untuk menginstal proyek di lingkungan lokal Anda:

### 1. Clone Repository
Buka terminal/command prompt, lalu jalankan perintah clone git:
```bash
git clone https://github.com/username/phoneix-template.git
```
> *Ganti URL di atas dengan lokasi repository Git Anda.*

### 2. Masuk ke Direktori Proyek
```bash
cd phoneix-template
```

### 3. Install Dependensi PHP (Composer)
Jalankan Composer untuk mengunduh seluruh dependensi framework Laravel:
```bash
composer install
```

### 4. Install Dependensi Frontend (NPM)
Jalankan NPM untuk mengunduh dependensi JavaScript dan CSS:
```bash
npm install
```

### 5. Konfigurasi Environment File (`.env`)
Salin file konfigurasi sampel `.env.example` menjadi `.env`:

**Linux / macOS / Git Bash:**
```bash
cp .env.example .env
```

**Windows PowerShell:**
```powershell
copy .env.example .env
```

Buka file `.env` lalu sesuaikan konfigurasi database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=phoneix_template
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Generate Application Key
Buat kunci enkripsi aplikasi Laravel:
```bash
php artisan key:generate
```

### 7. Jalankan Migrasi & Database Seeder
Pastikan database sudah dibuat di server MySQL/Laragon Anda, kemudian jalankan migrasi:
```bash
php artisan migrate
```
*(Opsional) Jika ada seeder:*
```bash
php artisan migrate --seed
```

### 8. Build & Compile Asset Frontend
Jalankan server pengembangan Vite untuk mengompilasi asset secara *real-time*:
```bash
npm run dev
```

### 9. Jalankan Server Aplikasi Laravel
Buka terminal baru di direktori proyek dan jalankan Artisan Server:
```bash
php artisan serve
```

Aplikasi dapat diakses melalui browser di alamat:
👉 **`http://127.0.0.1:8000`** *(atau via URL Laragon seperti `http://phoneix-template.test`)*

---

## 🛠️ Perintah-Perintah Penting

Berikut adalah beberapa perintah bermanfaat yang sering digunakan saat pengembangan:

| Perintah | Deskripsi |
| :--- | :--- |
| `npm run dev` | Menjalankan Vite dev server dengan HMR (*Hot Module Replacement*) |
| `npm run build` | Mengompilasi asset untuk kebutuhan produksi (*production build*) |
| `php artisan serve` | Menjalankan server lokal bawaan Laravel |
| `php artisan route:list` | Melihat daftar seluruh route yang terdaftar |
| `php artisan config:clear` | Membersihkan cache konfigurasi aplikasi |
| `php artisan cache:clear` | Membersihkan cache aplikasi |
| `php artisan view:clear` | Membersihkan cache tampilan Blade |

---

## 📂 Struktur Folder Penting

```text
phoneix-template/
├── app/                      # Logika aplikasi (Controllers, Models, Middleware)
├── config/
│   └── sidebar/              # Konfigurasi data menu sidebar (apps, modules, pages)
├── public/
│   └── assets/               # File CSS, JS kustom (phoenix.js, user.min.css)
├── resources/
│   ├── views/
│   │   ├── layouts/          # Layout master (vertical.blade.php)
│   │   │   └── partials/     # Header, Sidebar, Footer, Search Box
│   │   └── temp/             # Halaman-halaman konten aplikasi temp/demo
└── routes/
    └── web.php               # Routing utama web
```

---

## 📄 Lisensi

Proyek ini menggunakan lisensi [MIT License](LICENSE).
