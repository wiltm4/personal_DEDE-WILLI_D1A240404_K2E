<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery | DEDE WILLI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkbg: '#0f0f1a',
                        neon: '#39ff14',
                        cyber: '#08f7fe',
                        magenta: '#fe53bb'
                    },
                    fontFamily: {
                        gamer: ['Orbitron', 'sans-serif']
                    },
                    boxShadow: {
                        neon: '0 0 10px #08f7fe, 0 0 20px #08f7fe',
                        glow: '0 0 10px #39ff14, 0 0 20px #39ff14'
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
    <header class="bg-gradient-to-r from-cyber to-magenta text-black text-center p-6 text-3xl font-extrabold tracking-widest shadow-neon">
        GALLERY | DEDE WILLI
    </header>

    <!-- Navigation -->
    <nav class="bg-black text-cyber border-b border-cyber shadow-md">
        <ul class="flex justify-center space-x-12 py-4 text-lg uppercase font-bold tracking-wide">
            <li><a href="index.php" class="hover:text-neon transition duration-200">Artikel</a></li>
            <li><a href="gallery.php" class="text-neon border-b-2 border-neon">Gallery</a></li>
            <li><a href="about.php" class="hover:text-neon transition duration-200">About</a></li>
            <li><a href="admin/login.php" class="hover:text-neon transition duration-200">Login</a></li>
        </ul>
    </nav>

    <!-- Gallery Grid -->
    <main class="max-w-6xl mx-auto p-6">
        <h2 class="text-2xl font-bold mb-8 text-center text-cyber border-b border-cyber pb-3">Galeri Foto</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php
            $sql = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC";
            $query = mysqli_query($db, $sql);
            while ($data = mysqli_fetch_array($query)) {
                echo "<div class='bg-black border border-cyber rounded-lg shadow-md hover:shadow-neon transition duration-300 overflow-hidden'>";
                echo "<img src='images/{$data['foto']}' class='w-full h-48 object-cover hover:scale-105 transition duration-300' alt='Gambar'>";
                echo "<div class='p-4'>";
                echo "<h3 class='text-lg font-bold text-neon'>" . htmlspecialchars($data['judul']) . "</h3>";
                echo "</div></div>";
            }
            ?>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-cyber text-center py-5 mt-12 border-t border-cyber">
        &copy; <?php echo date('Y'); ?> | Created by <span class="text-neon font-bold">DEDE WILLI</span> D1A240404
    </footer>
</body>

</html>
