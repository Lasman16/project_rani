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
                        <li><a href="pages">Home</a></li>
                        <li><a href="Bantuan">Bantuan</a></li>
                        <li><a href="Login" class="btn">Log In</a></li>
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
                        <li>Alamat : Jl. Prof. Dr. Soepomo, Tangerang, 15119</li>
                        <li>No. Telp : (021) 5531161</li>
                    </p>
                </div>

                <div class="right">
                    <img src="/aset/Responsive-Landing-Page-main/img/Kota Tangerang.png" alt="Person Image"
                        class="person" />
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>