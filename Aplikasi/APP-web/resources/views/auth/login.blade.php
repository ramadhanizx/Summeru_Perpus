<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membuat Form Login</title>
  <link rel="stylesheet" href="assets/css/daftarsekarang.css"> <!-- Pastikan path ke file CSS sesuai -->
</head>
<body>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Form Login</div>
      <div class="title signup">Form Registrasi</div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Daftar</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form method="post" action="{{ route('login.post') }}" class="login">
          @csrf
          @if ($errors->any())
            <div class="errors">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div class="field">
            <input type="email" value="{{ old('email') }}" name="email" placeholder="Masukkan Email" required> <!-- Gunakan old('email') untuk menampilkan email sebelumnya jika ada kesalahan -->
          </div>
          <div class="field">
            <input type="password" name="password" placeholder="Masukkan Password" required>
          </div>
          <div class="pass-link"><a href="#">Lupa password?</a></div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Buat akun <a href="{{ url('registration') }}">Daftar sekarang</a></div>
        </form>

        <form method="post" action="{{ route('registration.post') }}"  class="signup">
          @csrf
          <div class="field">
            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama">
            @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="field">
            <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
            @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="field">
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
            @if ($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" name="daftar" class="btn btn-success" value="Daftar">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/js/script.js"></script>
</body>
</html>
