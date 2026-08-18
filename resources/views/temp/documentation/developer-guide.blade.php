@extends('layouts.vertical')

@section('title', 'Developer Guide')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    @include('layouts.partials.breadcrumb')

    <div class="mb-4">
        <h2 class="mb-2 lh-sm">Developer Guide</h2>
        <p class="text-body-tertiary lead mb-0">Panduan standar dan petunjuk teknis pengembangan proyek Phoenix Laravel Template.</p>
    </div>

    <!-- BAB 1: SOP REFACTORING HALAMAN -->
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0">1. Standard Operating Procedure (SOP) Refactoring Halaman</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-4">
            <p>Setiap pembuatan atau pemindahan halaman baru dari template HTML ke Blade View wajib mengikuti 4 langkah SOP berikut:</p>
            
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="border rounded-2 p-3 h-100 bg-body-emphasis">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-phoenix badge-phoenix-primary me-2 fs-9">Langkah 1</span>
                            <h6 class="mb-0">Inspeksi Structure Content Class</h6>
                        </div>
                        <p class="fs-9 text-body-tertiary mb-0">Periksa atribut dan class pada <code>&lt;div class="content ..."&gt;</code> dari HTML asli (misal: <code>pt-0</code> atau <code>px-0 pt-navbar</code>) dan teruskan ke master layout via <code>@@section('content_class', '...')</code>.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border rounded-2 p-3 h-100 bg-body-emphasis">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-phoenix badge-phoenix-primary me-2 fs-9">Langkah 2</span>
                            <h6 class="mb-0">Include Vendor CSS & JS Khusus</h6>
                        </div>
                        <p class="fs-9 text-body-tertiary mb-0">Periksa referensi <code>&lt;link&gt;</code> dan <code>&lt;script&gt;</code> di HTML asli. Tambahkan asset khusus halaman via <code>@@push('styles')</code> dan <code>@@push('scripts')</code>.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border rounded-2 p-3 h-100 bg-body-emphasis">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-phoenix badge-phoenix-primary me-2 fs-9">Langkah 3</span>
                            <h6 class="mb-0">Salin Konten & Bersihkan Modal Global</h6>
                        </div>
                        <p class="fs-9 text-body-tertiary mb-0">Salin konten di dalam <code>&lt;div class="content"&gt;</code>. Pertahankan modal khusus halaman tersebut, dan hapus modal global duplikat (seperti <code>searchBoxModal</code>, <code>supportChatContainer</code>, <code>settingsOffcanvas</code>).</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border rounded-2 p-3 h-100 bg-body-emphasis">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-phoenix badge-phoenix-primary me-2 fs-9">Langkah 4</span>
                            <h6 class="mb-0">Strict Tag Balance (Keseimbangan &lt;div&gt;)</h6>
                        </div>
                        <p class="fs-9 text-body-tertiary mb-0">Pastikan keseimbangan jumlah penutup tag <code>&lt;/div&gt;</code> agar kontainer utama tidak tertutup prematur yang dapat merusak tampilan footer/sidebar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BAB 2: ATURAN ASSETS (CSS & JS) -->
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0">2. Aturan Pengelolaan Asset (CSS & JavaScript)</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-4">
            <div class="alert alert-subtle-danger fs-9 mb-4">
                <h6 class="alert-heading font-semibold"><i class="fa-solid fa-triangle-exclamation me-2"></i>Dilarang Inline Style & Script!</h6>
                Jangan pernah menambahkan tag <code>&lt;style&gt;</code> atau <code>&lt;script&gt;</code> langsung di dalam file Blade view untuk penyesuaian UI atau penanganan event.
            </div>

            <h5 class="mb-3">A. Hierarki Pemuatan Asset (Load Order)</h5>
            <p class="fs-9">Urutan pemuatan asset sangat krusial agar styling dan library JS berjalan dengan benar:</p>
            <ul class="fs-9 mb-4">
                <li><strong>Vendor CSS:</strong> Harus dimuat <em>SEBELUM</em> <code>theme.min.css</code> melalui <code>@@push('styles')</code> yang ditangkap oleh <code>@@stack('styles')</code> di master layout.</li>
                <li><strong>Vendor JS:</strong> Harus dimuat <em>SEBELUM</em> <code>phoenix.js</code> melalui <code>@@push('scripts')</code> agar fungsi inisialisasi Phoenix dapat mengenali plugin vendor.</li>
            </ul>

            <h5 class="mb-3">B. Lokasi Modifikasi Style & Event Behavior</h5>
            <div class="table-responsive">
                <table class="table table-bordered fs-9 mb-0">
                    <thead class="bg-body-highlight">
                        <tr>
                            <th>Jenis Perubahan</th>
                            <th>File Target Modifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Event Handler JS / Behavior / Inisialisasi</td>
                            <td><code>public/assets/js/phoenix.js</code></td>
                        </tr>
                        <tr>
                            <td>Kustomisasi CSS & Theme Overrides</td>
                            <td><code>public/assets/css/user.min.css</code> atau <code>theme.min.css</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- BAB 3: BREADCRUMB & PARTIALS -->
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0">3. Komponen & Partial Terpusat</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-4">
            <h5 class="mb-2">A. Breadcrumb Partial</h5>
            <p class="fs-9">Untuk menampilkan breadcrumb di halaman, gunakan partial terpusat yang otomatis membaca hierarki rute yang sedang dibuka:</p>
            
            <div class="bg-body-highlight rounded-2 p-3 my-3">
                <pre class="m-0"><code class="language-html">@@include('layouts.partials.breadcrumb')</code></pre>
            </div>

            <p class="fs-9">Jika halaman membutuhkan kustomisasi label/link rute tertentu, gunakan parameter <code>items</code>:</p>
            <div class="bg-body-highlight rounded-2 p-3 my-3">
                <pre class="m-0"><code class="language-php">@@include('layouts.partials.breadcrumb', [
    'items' => [
        'Dashboard' => route('dashboard'),
        'Kategori' => url('/category'),
        'Detail' => '#'
    ]
])</code></pre>
            </div>

            <h5 class="mt-4 mb-2">B. Modular Layout Partials</h5>
            <p class="fs-9 mb-0">Gunakan partial yang sudah disediakan di folder <code>resources/views/layouts/partials/</code> untuk komponen header, navbar, sidebar, dan footer agar struktur aplikasi tetap bersih dan modular.</p>
        </div>
    </div>

    <!-- BAB 4: ROUTING & SIDEBAR CONFIG -->
    <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                    <h4 class="text-body mb-0">4. Konfigurasi Routing & Menu Sidebar</h4>
                </div>
            </div>
        </div>
        <div class="card-body p-4">
            <h5 class="mb-2">A. Routing System</h5>
            <ul class="fs-9 mb-4">
                <li><strong>Dynamic Template Route:</strong> Dikendalikan via <code>routes/temp.php</code> yang menangani rute otomatis untuk preview halaman di folder <code>resources/views/temp/</code>.</li>
                <li><strong>Application Routes:</strong> Didefinisikan di <code>routes/web.php</code> atau file rute Laravel standar.</li>
            </ul>

            <h5 class="mb-2">B. Sidebar Navigation Config</h5>
            <p class="fs-9">Menu pada sidebar tidak ditulis secara hardcode di file view, melainkan dikelola secara dinamis melalui file konfigurasi PHP pada folder:</p>
            <div class="alert alert-subtle-info fs-9 mb-0">
                <code>config/sidebar/*.php</code> (Contoh: <code>config/sidebar/documentation.php</code>, <code>config/sidebar/apps.php</code>)
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
