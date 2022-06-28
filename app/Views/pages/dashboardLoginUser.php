<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<main>
    <div class="big-wrapper light">
        <img src="/aset/Responsive-Landing-Page-main/img/shape.png" alt="" class="shape" />
        <header>
            <div class="container">
                <div class="logo">
                    <h3>Kelurahan Buaran Indah</h3>
                </div>

                <div class="links">
                    <ul>
                        <li><a href="/pages">Home</a></li>
                        <li><a href="/Bantuan">Bantuan</a></li>
                        <li><a href="/Login" class="btn">Log In</a></li>
                    </ul>
                </div>

                <div class="overlay"></div>

                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </header>
        <div class="showcase-area">
            <div class="container">
                <div class="left">
                    <div class="big-title">
                        <h1>Kelurahan Buaran Indah,</h1>
                        <h1>Tangerang.</h1>
                    </div>
                    <p class="text">
                        Buaran Indah adalah kelurahan yang berada di kecamatan Tangerang, Kota Tangerang, Banten,
                        Indonesia. Kelurahan ini terdiri atas 52 rukun tetangga dan 9 rukun warga.
                    </p>
                </div>
                <div class="right" style="padding-right: 100px; margin-bottom: 20px;">
                    <img src="/aset/Responsive-Landing-Page-main/img/Kota Tangerang.png" alt="Person Image"
                        class="person" />
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>