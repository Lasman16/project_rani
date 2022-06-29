<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/aset/Responsive-Landing-Page-main/styleLogin.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="/Login/validation" method="POST">
                <h1>Login</h1>
                <hr>
                <p>Kelurahan Buaran Indah</p>
                <label for="">NIK</label>
                <input type="text" placeholder="Masukkan NIK" id="username"
                    class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>"
                    value="<?= old('username'); ?>" autofocus name="username">
                <div class="invalid-feedback" style="color: red; padding-left: 10px; font-size: 12px;">
                    <?= $validation->getError('username'); ?>
                </div>

                <label for="">Password</label>
                <input type="password" placeholder="Masukkan Password" id="password"
                    class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>"
                    value="<?= old('password'); ?>" autofocus name="password">
                <div class="invalid-feedback" style="color: red; padding-left: 10px; font-size: 12px;">
                    <?= $validation->getError('password'); ?>
                </div>

                <button type="submit">Login</button>
                <div class="signup-link">
                    <a href="/Registrasi">Registrasi</a>
                </div>

            </form>
        </div>
        <div class="right">
            <img src="/aset/Responsive-Landing-Page-main/img/Kota Tangerang.png" alt="">
        </div>
    </div>
</body>

</html>