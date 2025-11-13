<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar ke UBeli</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
  </head>
  <body>
    <div class="wrapper">
      <div class="form-container">
        <h2 class="title">Daftar ke <span class="highlight">U</span><span class="secondary">Beli</span></h2>

        <form action="#" method="POST" class="register-form">
          <input type="email" placeholder="email@domain.com" required>
          <input type="tel" placeholder="nomor telepon" required>
          <div class="password-field">
            <input id="password" type="password" placeholder="konfirmasi password" required>

            <!-- kita masukkan dua ikon sekaligus; lucide akan render keduanya menjadi SVG -->
            <button type="button" class="eye-toggle" aria-label="Toggle password visibility">
                <i data-lucide="eye" class="icon-eye"></i>
                <i data-lucide="eye-off" class="icon-eye-off hidden"></i>
            </button>
          </div>
          <button type="submit" class="btn">Daftar</button>
        </form>
      </div>
    </div>
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // render semua <i data-lucide="..."> menjadi SVG
        lucide.createIcons();

        // tunggu DOM siap (ada kemungkinan script ditempatkan di atas tetapi sebaiknya di bawah body)
        document.addEventListener('DOMContentLoaded', () => {
            const toggleBtn = document.querySelector('.eye-toggle');
            const passwordInput = document.getElementById('password');
            const iconEye = document.querySelector('.icon-eye');
            const iconEyeOff = document.querySelector('.icon-eye-off');

            if (!toggleBtn || !passwordInput || !iconEye || !iconEyeOff) {
            console.warn('Toggle password: element missing');
            return;
            }

            toggleBtn.addEventListener('click', () => {
            const isPassword = passwordInput.getAttribute('type') === 'password';

            // toggle input type
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');

            // toggle which icon is visible (we only hide/show, no re-render)
            if (isPassword) {
                iconEye.classList.add('hidden');
                iconEyeOff.classList.remove('hidden');
            } else {
                iconEye.classList.remove('hidden');
                iconEyeOff.classList.add('hidden');
            }
            });
        });
    </script>
  </body>
</html>
