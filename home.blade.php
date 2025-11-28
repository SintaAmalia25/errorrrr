<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JudoIdant By SMK 3 Perguruan Cikini</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css" rel="stylesheet" />
</head>
<body>
    <div class="neural-background"></div>
    
    <div class="geometric-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>   
    </div>

    <div class="neural-lines">
        <div class="neural-line"></div>
        <div class="neural-line"></div>
        <div class="neural-line"></div>
    </div>

    <header class="glass">
        <nav>
            <a href="#home" class="logo">
                JudoIdant
            </a>
            <ul class="nav-links">
                <li><a href="#edukasi">Edukasi</a></li>
                <li><a href="#ai">Assisten AI</a></li>
                <li><a href="#lapor">Lapor</a></li>
                <li><a href="#contact">Tentang Kami</a></li>
            </ul>
            </ul>
            <div class="mobile-menu-toggle">
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
            </div>
        </nav>
        <div class="mobile-nav">
                <a href="#edukasi">Edukasi</a>
                <a href="#ai">Assisten AI</a>
                <a href="#lapor">Lapor</a>
                <a href="#contact">Tentang Kami</a>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-subtitle">KATAKAN TIDAK PADA JUDI ONLINE</div>
            <h1>JudoIdant</h1>
            
            <div class="hero-description">
                <p>Kurangi dan Hindari Penggunaan Judi Online Pada Kalangan Remaja</p>
            </div>

            <div class="hero-stats">
                <div class="hero-stat">
                    <span class="hero-stat-number">Judi Online?</span>
                    <span class="hero-stat-label">Spoiler Alert: Masa Depanmu Hancur</span>
                </div>
                <div class="hero-stat">
                    <span class="hero-stat-number">Sikat Situs Judi!</span>
                    <span class="hero-stat-label">Report Sekarang, Amankan Temanmu!</span>
                </div>
                <div class="hero-stat">
                    <span class="hero-stat-number">AI Anti-Judi</span>
                    <span class="hero-stat-label">siap kasih feedback cepat, tanpa judgement</span>
                </div>
            
            </div>
            

        </div>
    </section>

    <!-- Section 2: Edukasi -->
    <section class="edukasi" id="edukasi">
        <div class="edukasi-container">
            <h2 class="section-title">Bukan Cuan, Tapi Cuma Khayalan</h2>
            <div class="diagonal-grid">
                <!-- <div class="feature-row">
                    <div class="feature-content glass">
                        <h3>Warning Sign</h3>
                        <p>Otakmu diciptakan untuk jadi pemenang, bukan pecundang slot. Judi online didesain agar kamu selalu kalah! Mereka untung, kamu buntung. Jangan mau dijadikan ATM berjalan. Uang jajan habis buat top-up? No way!</p>
                    </div>
                    
                </div>
                <div class="feature-visual glass">

                </div> -->
                <div class="feature-content glass">
                    <h3>Dampak Negatif</h3>
                    <p>Judi online itu racun buat masa depanmu. Mulai dari nilai jeblok, hubungan keluarga retak, sampai utang menumpuk. Jangan biarkan dirimu terjerumus ke dalam lubang hitam yang sulit keluar. Pilih masa depan cerah, bukan gelap gulita.</p>
                    <div class="cta-buttons">
                        <a href="{{ route('content') }}" class="cta-button">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        
        </div>
    </section>

    <!-- Section 3: ai -->
    <section class="ai" id="ai">
        <h2 class="section-title">Assisten Artifical intelligence</h2>
        <div class="cta-buttons">
                <a href="https://aai.digihome.co.id/webhook/595b5c4f-8762-4a3e-91c6-1ba410e31b7d/chat" class="cta-button">Chat Sekarang</a>
        </div>
        <div id="ai-orb"></div>
    </section>

    <!-- Section 4: lapor -->
    <section class="lapor" id="lapor">
        <h2 class="section-title">Lapor Situs Judi Online</h2>
            <div class="contact-container">
            <div class="contact-info glass">
                <h3>Ayo Lapor!</h3>
                <p>Kami mengajak seluruh rakyat Indonesia agar segera melaporkan konten Judi Online</p>
                <p>Stop judi online karena judi online adalah jalan menuju kesengsaraan.</p>
                
            </div>
        
            
        <form id="laporanForm" method="POST" class="form-group">
            <label for="url">URL ATAU SITUS</label>
            <input type="text" name="url" id="url" placeholder="nama situs" required>

            <label for="alasan">Deskripsi</label>
            <textarea name="alasan" id="alasan" placeholder="Jelaskan alasan laporan" required></textarea>

            <label for="pelapor">Nama Pelapor (Opsional)</label>
            <input type="text" name="pelapor" id="pelapor" placeholder="Nama Anda (Boleh dikosongkan untuk anonim)">

            <label for="buktiFile">Upload Bukti</label>
            <input type="file" name="buktiFile" id="buktiFile" accept="image/*" required>

            <button id="submit-btn" type="submit">Kirim</button>
        </form>
        
    </div>

    <footer>
            <div class="footer-copyright">
                <p>&copy; 2025 Pencegahan Judol Sedari Dini</p>
            </div>
    </footer>


     
<script>
    document.getElementById('laporanForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form submit standar

        const url = document.getElementById('url').value;
        const alasan = document.getElementById('alasan').value;
        const pelapor = document.getElementById('pelapor').value;
        const fileInput = document.getElementById('buktiFile');
        const file = fileInput.files[0];

        if (!file) {
            alert("Mohon unggah file bukti.");
            return;
        }

        // 1. Inisialisasi FileReader untuk membaca file
        const reader = new FileReader();

        reader.onload = function(e) {
            // Data URL (String Base64) berisi prefix "data:image/png;base64,..."
            const base64StringWithPrefix = e.target.result;
            
            // Hapus prefix untuk mendapatkan string Base64 murni yang dibutuhkan n8n
            const base64Data = base64StringWithPrefix.split(',')[1];
            
            // 2. Susun Objek JSON
            const reportData = {
                url: url,
                alasan: alasan,
                timestamp: new Date().toISOString(),
                // Tambahkan pelapor hanya jika diisi
                ...(pelapor && { pelapor: pelapor }), 
            };

            const base64image = {
                // Data Bukti
                bukti_file: {
                    file_name: file.name,
                    mime_type: file.type,
                    // Ini adalah string Base64 yang akan dibaca oleh node n8n
                    file_data_base64: base64Data
                }
            };
            // Di sini, Anda dapat menambahkan kode untuk mengirim JSONString ke webhook n8n
            // (Menggunakan fetch() atau XMLHttpRequest)
            
            // /* // Contoh cara mengirim (uncomment untuk mengaktifkan)*/
            fetch('https://aai.digihome.co.id/webhook/raffaganteng', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify([
                    reportData,
                    base64Data
                ])
            })
            .then(response => response.json())
            .then(data => console.log('Sukses terkirim:', data))
            .catch((error) => console.error('Error saat mengirim:', error));
            
        };

        // Mulai membaca file sebagai Data URL (mengandung Base64)
        reader.readAsDataURL(file);
    });
</script>
<script src="{{ asset('assets/script.js') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css" rel="stylesheet" />
<script type="module">
	import { createChat } from 'https://cdn.jsdelivr.net/npm/@n8n/chat/dist/chat.bundle.es.js';

	createChat({
		webhookUrl: 'https://aai.digihome.co.id/webhook/595b5c4f-8762-4a3e-91c6-1ba410e31b7d/chat'
	});
</script>
</body>
</html>
