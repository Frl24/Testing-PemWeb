<?php
// Script ini dipanggil dari index.html menggunakan method POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $pesan = htmlspecialchars($_POST['pesan'] ?? '');

    echo "<h2>Data berhasil dikirim</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Pesan: $pesan</p>";
    echo "<p><a href='index.html'>Kembali ke index.html</a></p>";
} else {
    echo "<h2>Form belum dikirim</h2>";
    echo "<p>Pastikan form di index.html menggunakan:</p>";
    echo "<pre>&lt;form action='submit_form.php' method='post'&gt; ... &lt;/form&gt;</pre>";
    echo "<p><a href='index.html'>Ke index.html</a></p>";
}
?>
