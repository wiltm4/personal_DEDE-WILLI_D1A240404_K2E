<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}
require_once("../koneksi.php");

$username = $_SESSION['username'];
$sql = "SELECT * FROM tbl_user WHERE username = '$username'";
$query = mysqli_query($db, $sql);
$hasil = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Control | D1A240404</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkbg: '#0a0a0a',
                        neonblue: '#00f0ff',
                        neontitan: '#ff3c7e',
                        darkpanel: '#161b22',
                        softgray: '#9ca3af'
                    },
                    fontFamily: {
                        orbitron: ['Orbitron', 'sans-serif']
                    },
                    boxShadow: {
                        cyber: '0 0 10px #00f0ff, 0 0 20px #00f0ff',
                        redglow: '0 0 10px #ff3c7e'
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" href="../logo.png" type="image/png">
</head>

<body class="bg-darkbg text-white font-orbitron min-h-screen">

    <!-- Header -->
    <header class="bg-gradient-to-r from-neonblue to-neontitan text-black text-center py-6 shadow-cyber">
        <h1 class="text-3xl font-extrabold tracking-wider"> Halaman administrator | D1A240404</h1>
    </header>

    <!-- Layout -->
    <div class="flex max-w-7xl mx-auto mt-10 px-4">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-darkpanel p-6 rounded-lg shadow-md border border-neontitan">
            <h2 class="text-neonblue text-xl font-bold text-center mb-6">🎛️ MENU </h2>
            <ul class="space-y-4 text-softgray font-semibold text-sm tracking-wide">
                <li><a href="beranda_admin.php" class="block hover:text-neonblue">🧭 Beranda</a></li>
                <li><a href="data_artikel.php" class="block hover:text-neonblue">📝 Kelola Artikel</a></li>
                <li><a href="data_gallery.php" class="block hover:text-neonblue">🖼️ Kelola Gallery</a></li>
                <li><a href="about.php" class="block hover:text-neonblue">📌 Tentang</a></li>
                <li>
                    <a href="logout.php" onclick="return confirm('Keluar dari sistem?');"
                        class="block text-neontitan hover:underline">🚪 Logout</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="w-3/4 bg-darkpanel p-8 ml-6 rounded-lg shadow-md border border-neonblue">
            <div class="text-lg mb-4">
                 Halo, <span class="text-neonblue font-bold"><?php echo $_SESSION['username']; ?></span>
            Apa Kabar?
                </div>

            <?php
            $jumlah_artikel = mysqli_num_rows(mysqli_query($db, "SELECT id_artikel FROM tbl_artikel"));
            $jumlah_gallery = mysqli_num_rows(mysqli_query($db, "SELECT id_gallery FROM tbl_gallery"));
            ?>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="bg-black p-6 rounded shadow-cyber border-t-4 border-neonblue text-center">
                    <h3 class="text-xl font-bold text-neonblue mb-2">🧾 TOTAL ARTIKEL</h3>
                    <p class="text-5xl font-extrabold"><?php echo $jumlah_artikel; ?></p>
                </div>
                <div class="bg-black p-6 rounded shadow-redglow border-t-4 border-neontitan text-center">
                    <h3 class="text-xl font-bold text-neontitan mb-2">📷 TOTAL GALLERY</h3>
                    <p class="text-5xl font-extrabold"><?php echo $jumlah_gallery; ?></p>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-softgray text-center py-5 mt-12 text-xs border-t border-neontitan">
        &copy; <?php echo date('Y'); ?> • Powered by <span class="text-neonblue font-semibold">DEDE WILLI</span> | Admin 
    </footer>

</body>

</html>
