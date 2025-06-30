<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About | D1A240404</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        neon: '#39ff14',
                        darkbg: '#0f0f1a',
                        cyber: '#08f7fe',
                        danger: '#fe53bb'
                    },
                    fontFamily: {
                        gamer: ['"Orbitron"', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;800&display=swap" rel="stylesheet">
    <link rel="icon" href="logo.png" type="image/png">
</head>

<body class="bg-darkbg text-white font-gamer min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-gradient-to-r from-cyber to-danger py-6 shadow-xl flex items-center justify-center space-x-4">
        <h1 class="text-4xl font-extrabold tracking-widest text-black animate-pulse">ABOUT | DEDE WILLI</h1>
    </header>

    <!-- Navigation -->
    <nav class="bg-black text-cyber border-b border-cyber shadow-md">
        <ul class="flex justify-center space-x-12 py-4 text-lg font-bold uppercase tracking-wide">
            <li><a href="index.php" class="hover:text-neon transition duration-200">Artikel</a></li>
            <li><a href="gallery.php" class="hover:text-neon transition duration-200">Gallery</a></li>
            <li><a href="about.php" class="text-neon border-b-2 border-neon">About</a></li>
            <li><a href="admin/login.php" class="hover:text-neon transition duration-200">Login</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        <section class="max-w-4xl mx-auto px-6 py-12 bg-black rounded-xl shadow-xl mt-10 border-2 border-cyber">
            <h2 class="text-3xl font-bold mb-10 text-cyber text-center border-b-2 border-cyber pb-4">Tentang Saya</h2>
            <div class="space-y-10 text-base leading-relaxed text-gray-200">
                <?php
                $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC";
                $query = mysqli_query($db, $sql);
                while ($data = mysqli_fetch_array($query)) {
                    echo "<div class='relative pl-6 border-l-4 border-neon bg-gray-900 rounded-lg p-4 hover:border-cyber transition duration-300 shadow-md hover:shadow-cyber'>";
                    echo "<p class='before:content-[\"\"] before:absolute before:-left-2 before:top-2 before:w-3 before:h-3 before:bg-neon before:rounded-full'>" . nl2br(htmlspecialchars($data['about'])) . "</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-cyber text-center py-5 mt-12 border-t border-cyber">
        &copy; <?php echo date('Y'); ?> | Made by <span class="text-neon font-bold">DEDE WILLI</span>. D1A240404 
    </footer>
</body>

</html>
