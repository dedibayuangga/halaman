<!DOCTYPE html>
<html>

<head>
    <title>login Presensi Hai </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <h1>Selamat Datang di Aplikasi kami</h1>

    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>

        <form>
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username atau email ..">

            <label>Password</label>
            <input type="text" name="password" class="form_login" placeholder="Password ..">
            <center><input type="submit" class="tombol_login" value="LOGIN"></center>

            <br />
            <br />
            <center>
                <a class="link" href="<?= base_url('controller_welcome'); ?>">kembali</a>
            </center>
        </form>

    </div>


</body>

</html>