<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan file CSS -->
</head>
<body>
    <div class="success-container">
        <h1>Terima Kasih, 
            <?php 
                if (isset($_POST['nama'])) {
                    echo htmlspecialchars($_POST['nama']);
                } else {
                    echo "Pengguna";
                }
            ?>!
        </h1>
        <p class="description">Selamat, Anda telah berhasil mendaftar. Kami sangat senang Anda bergabung dengan kami!</p>
        <p class="message">Sebagai bagian dari komunitas kami, Anda akan mendapatkan akses ke berbagai informasi, event, dan kesempatan menarik. Kami berharap perjalanan Anda bersama kami akan menjadi pengalaman yang bermanfaat dan menyenangkan.</p>
        
        <div class="user-data">
            <h2>Data yang Anda Isi:</h2>
            <p><strong>Nama:</strong> <?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : 'Data tidak tersedia'; ?></p>
            <p><strong>Email:</strong> <?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Data tidak tersedia'; ?></p>
            <p><strong>Hobby:</strong> <?php echo isset($_POST['hobby']) ? htmlspecialchars($_POST['hobby']) : 'Data tidak tersedia'; ?></p>
            <p><strong>No Handphone:</strong> <?php echo isset($_POST['no_handphone']) ? htmlspecialchars($_POST['no_handphone']) : 'Data tidak tersedia'; ?></p>
            <p><strong>Gender:</strong> <?php echo isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : 'Data tidak tersedia'; ?></p>
        </div>

        <button onclick="window.location.href='latihanWeek5.php'">Kembali ke Beranda</button>
    </div>
</body>
</html>
