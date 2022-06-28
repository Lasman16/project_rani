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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengajuan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/PengajuanSuratKeteranganUsaha">Surat Keterangan
                                    Usaha</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/PengajuanSuratKeteranganTidakMampu">Surat Keterangan
                                    Tidak
                                    Mampu</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/PengajuanSuratKeteranganGhaib">Surat Keterangan
                                    Ghaib</a>
                                <div class=" dropdown-divider">
                                </div>
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
            <div class="title">Surat Keterangan Ghaib</div>
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input type="text" class="nama_Lengkap" id="nama_Lengkap" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Tempat Lahir</span>
                        <input type="text" class="tempat_lahir" id="tempat_Lahir">
                    </div>
                    <div class="input-box">
                        <span class="details">Tanggal Lahir</span>
                        <input type="date" class="tanggal_Lahir" id="tanggal_Lahir">
                    </div>
                    <div class="input-box">
                        <span class="details">NIK</span>
                        <input type="text" class="nik" id="nik">
                    </div>
                    <div class="input-box">
                        <span class="details">Negara</span>
                        <input type="text" class="negara" id="negara">
                    </div>
                    <div class="input-box">
                        <span class="details">Pekerjaan</span>
                        <input type="text" class="pekerjaan" id="pekerjaan">
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat Lengkap</span>
                        <input type="text" class="alamat" id="alamat">
                    </div>
                    <div class="input-box">
                        <span class="details">Status</span>
                        <input type="text" class="status" id="status">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="group">
                        <label for="agama">Agama</label>
                    </div>
                    <div class="group-listt">
                        <div class="form-check">
                            <input type="radio" name="agama" class="form-check-input" id="kristen>
                    <label for=" kristen" class="form-check-label">Kristen</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="agama" class="form-check-input" id="katolik">
                            <label for="katolik" class="form-check-label">Katolik</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="agama" class="form-check-input" id="islam">
                            <label for="islam" class="form-check-label">Islam</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="agama" class="form-check-input" id="hindu">
                            <label for="hindu" class="form-check-label">Hindu</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="agama" class="form-check-input" id="budha">
                            <label for="budha" class="form-check-label">Budha</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="agama" class="form-check-input" id="konghucu">
                            <label for="konghucu" class="form-check-label">Konghucu</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                    </div>
                    <div class="group-list">
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="L" class="form-check-input" id="laki">
                            <label for="laki" class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="P" class="form-check-input" id="perempuan">
                            <label for="perempuan" class="form-check-label">Perempuan</label>
                        </div>
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

                <div class="button">
                    <input type="submit" value="Kirim">
                </div>
            </form>
        </div>
        <?= $this->endSection(); ?>