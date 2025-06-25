# debug-nodejs

Script ini menggunakan shell_exec() untuk menjalankan perintah terminal dari PHP.
Informasi yang ditampilkan:
- Versi Node.js (node -v)
- Versi NPM (npm -v)
- Lokasi binary (which node, which npm)
- Daftar global package
- Variabel lingkungan (ENV)

⚠️ Catatan Penting:
shell_exec() harus diaktifkan di konfigurasi PHP. Di banyak shared hosting, fungsi ini bisa dibatasi demi keamanan.
Pastikan Anda telah mengaktifkan aplikasi Node.js dari cPanel > "Setup Node.js App" sebelum menjalankan tool ini.

Jalankan script ini dari browser, misalnya:

https://domainanda.com/tools/nodejs_debug.php
