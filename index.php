<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Web | D1A240404</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkbg: '#0f0f0f',
                        neon: '#39ff14',
                        blood: '#ff003c',
                        steel: '#1f1f1f',
                        graylite: '#9ca3af'
                    },
                    fontFamily: {
                        gamer: ['Orbitron', 'sans-serif']
                    },
                    boxShadow: {
                        neon: '0 0 12px #39ff14',
                        redglow: '0 0 12px #ff003c'
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="logo.png" type="image/png">
</head>

<body class="bg-darkbg text-white font-gamer min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-gradient-to-r from-blood to-neon text-black text-center p-6 text-3xl font-extrabold tracking-widest shadow-neon">
        PERSONAL WEB | DEDE WILLI
    </header>

    <!-- Navigation -->
    <nav class="bg-black text-neon border-b border-blood shadow-md sticky top-0 z-50">
        <ul class="flex justify-center space-x-10 py-4 text-lg uppercase tracking-wide font-bold">
            <li><a href="index.php" class="text-blood border-b-2 border-neon">Artikel</a></li>
            <li><a href="gallery.php" class="hover:text-blood transition">Gallery</a></li>
            <li><a href="about.php" class="hover:text-blood transition">About</a></li>
            <li><a href="admin/login.php" class="hover:text-blood transition">Login</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <!-- Artikel Utama -->
        <section class="md:col-span-2 bg-steel p-6 rounded-xl shadow-lg hover:shadow-neon transition">
            <h2 class="text-xl font-bold mb-4 text-neon">Artikel Terbaru</h2>
            <div class="space-y-6">
                <?php
                $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
                $query = mysqli_query($db, $sql);
                while ($data = mysqli_fetch_array($query)) {
                    echo "<div class='border-b border-blood pb-4'>";
                    echo "<h3 class='text-lg font-semibold text-blood'>" . htmlspecialchars($data['nama_artikel']) . "</h3>";
                    echo "<p class='text-graylite'>" . htmlspecialchars($data['isi_artikel']) . "</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </section>

        <!-- Sidebar -->
        <aside class="bg-steel p-6 rounded-xl shadow-md hover:shadow-redglow transition">
            <h2 class="text-lg font-bold mb-4 text-blood">Daftar Artikel</h2>
            <ul class="space-y-3 list-disc list-inside text-graylite">
                <?php
                $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
                $query = mysqli_query($db, $sql);
                while ($data = mysqli_fetch_array($query)) {
                    echo "<li>" . htmlspecialchars($data['nama_artikel']) . "</li>";
                }
                ?>
            </ul>
        </aside>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-neon text-center py-6 mt-10 border-t border-blood text-sm">
        &copy; <?php echo date('Y'); ?> | Powered by <span class="text-blood font-bold">DEDE WILLI</span> •D1A240404 👾
    </footer>

</body>

</html>
