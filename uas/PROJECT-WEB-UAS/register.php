<!DOCTYPE html>
<html>
<head>
    <title>Wisata Sendang Growong</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <span class="header-title">Wisata Sendang Growong</span>
            <div class="menu">
                <a href="wisata.html">Wisata</a>
                <a href="produk.html">Produk Unggulan</a>
                <a href="berita.html">Berita</a>
                <a href="profil.html">Profil</a>
            </div>
        </div>
        <div class="content">
            <div class="left-section">
                <h1>Sign Up</h1>
                <p>Buat akunmu dan jelajahi wisata</p>
            </div>
            <div class="right-section">
                <div class="form-container">
                    <form action="proses_register.php" method="post" enctype="multipart/form-data" name="register" id="register">
                        <div class="input-container">
                            <label id="label-nama"></label><br>
                            <input id="form-nama" type="text" name="form-nama" placeholder="Masukan nama lengkap anda" /><br>
                            <span class="icon">&#128100;</span>
                        </div>
                        <div class="input-container">
                            <label id="label-jenis-kelamin"></label><br>
                            <input id="form-jenis-kelamin" type="text" name="form-jenis-kelamin" placeholder="Masukan jenis kelamin anda" /><br>
                            <span class="icon">&#9794;</span>
                        </div>
                        <div class="input-container">
                            <label id="label-tanggal-lahir"></label><br>
                            <input id="form-tanggal-lahir" type="date" name="form-tanggal-lahir" placeholder="Masukan tanggal lahir anda" /><br>

                        </div>
                        <div class="input-container">
                            <label id="label-email"></label><br>
                            <input id="form-email" type="email" name="form-email" placeholder="Masukan email anda" />
                            <span class="icon">&#9993;</span>
                        </div>
                        <div class="input-container">
                            <label id="label-password"></label><br>
                            <input id="form-password" type="password" name="form-password" placeholder="Masukan password anda" /><br>
                        </div>
                        <div class="button-SignUp">
                            <button class="sign-up-button" type="submit" name="register" id="SignUp" style="font-family: 'Poppins', sans-serif;">SignUp</button>
                        </div>
                    </form>
                    <p class="login-link">Sudah memiliki akun? <a href="login.php">Log In</a></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('form-password');
        if (togglePassword) {
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                togglePassword.innerHTML = type === 'password' ? '&#128274;' : '&#128065;';
            });
        }
    </script>
</body>
</html>
