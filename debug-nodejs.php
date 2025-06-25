<?php
// nodejs_debug.php - Cek info debugging Node.js di cPanel hosting

echo "<h2>Node.js Debug Info on cPanel</h2>";
echo "<pre>";

// Cek apakah perintah shell bisa dijalankan
if (!function_exists('shell_exec')) {
    echo "⚠️ shell_exec() tidak tersedia di konfigurasi PHP ini.";
    exit;
}

// Coba cek versi Node.js
echo "🔍 Node.js Version:\n";
$nodeVersion = shell_exec('node -v 2>&1');
echo $nodeVersion ? $nodeVersion : "Node.js tidak terdeteksi atau tidak tersedia\n";

// Cek NPM version
echo "\n🔍 NPM Version:\n";
$npmVersion = shell_exec('npm -v 2>&1');
echo $npmVersion ? $npmVersion : "NPM tidak terdeteksi\n";

// Cek environment variable
echo "\n🔍 Environment Variables:\n";
print_r($_ENV);

// Cek lokasi binary
echo "\n🔍 Lokasi Binary Node.js:\n";
echo shell_exec('which node 2>&1');

echo "\n🔍 Lokasi Binary NPM:\n";
echo shell_exec('which npm 2>&1');

// Cek package global yang terinstal
echo "\n🔍 Daftar Global Package NPM:\n";
echo shell_exec('npm list -g --depth=0 2>&1');

echo "</pre>";
?>
