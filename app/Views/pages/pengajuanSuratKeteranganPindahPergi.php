<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<main>
    <div class="big-wrapperr light">


        <header>
            <div class="container">
                <div class="logo">
                    <h3>Kelurahan Buaran Indah</h3>
                </div>

                <div class="links">
                    <ul>
                        <li><a href="/DashboardUser">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="dashboardUser.html" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengajuan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/PengajuanSuratKeteranganUsaha">Surat Keterangan
                                    Usaha</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/PengajuanSuratKeteranganTidakMampu">Surat Keterangan
                                    Tidak
                                    Mampu</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/PengajuanSuratKeteranganGhaib">Surat Keterangan
                                    Ghaib</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/PengajuanSuratKeteranganPengantarPindah">Surat
                                    Keterangan
                                    Pindah Pergi</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/PengajuanSuratKeteranganOrangYangSama">Surat Keterangan
                                    Orang Yang Sama</a>
                            </div>
                        </li>
                        <li><a href="/BantuanUser">Bantuan</a></li>
                        <li><a href="/pages" class="btn">Log Out</a></li>
                    </ul>
                </div>

                <div class="overlay"></div>

                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </header>

        <div class="form">
            <div class="btn"><a href="/DashboardUser">Kembali</a></div>
            <div class="title">Surat Pengantar Pindah Datang <br>Antar Kelurahan Dalam Satu Kota</div>
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">NIK</span>
                        <input type="text" class="nik" id="nik" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input type="text" class="nama_lengkap" id="nama_lengkap">
                    </div>
                    <div class="input-box">
                        <span class="details">No. KK</span>
                        <input type="text" class="no_kk" id="no_kk">
                    </div>
                    <div class="input-box">
                        <span class="details">Nama Kepala Keluarga</span>
                        <input type="text" class="nama_kk" id="nama_kk">
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat Sekarang</span>
                        <input type="text" class="alamat_sekarang" id="alamat_sekarang">
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat Tujuan Pindah</span>
                        <input type="text" class="alamat_pindah" id="alamat_pindah">
                    </div>
                    <div class="input-box">
                        <span class="details">Jumlah Keluarga Yang Pindah</span>
                        <input type="text" class="jumlah_pindah" id="jumlah_pindah">
                    </div>
                </div>

                <hr style="margin-top: 50px;height: 20px;border-width: 1px;">
                <div class="title">Kelengkapan Form</div>
                <div class="input-box" style="margin-bottom: 15px;">
                    <span class="details"
                        style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Surat Pengantar
                        RT/RW</span>
                    <div class="custom-file">
                        <input type="file" class="spRT" id="spRT">
                        <label class="custom-file-label" for="spRT">Choose file</label>
                    </div>
                </div>
                <div class="input-box" style="margin-bottom: 15px;">
                    <span class="details"
                        style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Foto KTP</span>
                    <div class="custom-file">
                        <input type="file" class="ktp" id="ktp">
                        <label class="custom-file-label" for="ktp">Choose file</label>
                    </div>
                </div>
                <div class="input-box" style="margin-bottom: 15px;">
                    <span class="details"
                        style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Foto KK</span>
                    <div class="custom-file">
                        <input type="file" class="kk" id="kk">
                        <label class="custom-file-label" for="kk">Choose file</label>
                    </div>
                </div>
                <div class="input-box" style="margin-bottom: 15px;">
                    <span class="details"
                        style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Dokumen Izin
                        Tempat Tinggal</span>
                    <div class="custom-file">
                        <input type="file" class="ijin_tinggal" id="ijin tinggal">
                        <label class="custom-file-label" for="ijin_tinggal">Choose file</label>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" value="Kirim">
                </div>
            </form>
        </div>
        <?= $this->endSection(); ?>