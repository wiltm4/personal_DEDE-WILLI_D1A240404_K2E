<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:beranda_admin.php');
}
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Admin | D1A240404</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" href="../logo.png" type="image/png">
</head>

<body class="bg-darkbg text-white font-gamer min-h-screen flex items-center justify-center">
    <div class="bg-steel p-8 rounded-2xl shadow-neon w-full max-w-md border border-blood">
        <h2 class="text-3xl text-neon font-bold text-center mb-8 tracking-wide">LOGIN ADMIN</h2>
        <form action="cek_login.php" method="post" class="space-y-6">
            <div>
                <label for="username" class="block text-sm text-graylite">Username</label>
                <input type="text" name="username" id="username" required
                    class="mt-1 block w-full bg-black text-neon border border-blood rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-neon">
            </div>
            <div>
                <label for="password" class="block text-sm text-graylite">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full bg-black text-neon border border-blood rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-neon">
            </div>
            <div class="flex justify-between items-center">
                <input type="submit" name="login" value="ACCESS"
                    class="bg-blood text-white px-5 py-2 rounded-md font-bold uppercase hover:bg-red-700 shadow-md hover:shadow-redglow transition">
                <input type="reset" name="cancel" value="ABORT"
                    class="bg-graylite text-black px-5 py-2 rounded-md font-bold uppercase hover:bg-gray-400 transition">
            </div>
        </form>
        <div class="text-center text-sm text-graylite mt-8 tracking-wide">
            &copy; <?php echo date('Y'); ?> • Coded by <span class="text-neon">DEDE WILLI</span>
        </div>
    </div>
</body>

</html>
