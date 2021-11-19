<div class="min-vh-100 p-head">
    <div class="container-xxl px-md-5 form-container b-radius-28">
        <div class="d-flex position-relative row h-100">
            <div class="col-12 col-lg-6 bg-white b-radius-28 position-absolute start-0 bottom-0 top-0">
                <section class="form-section p-3 p-md-4 h-100 d-flex flex-column justify-content-center align-items-start">
                    <div class="mb-4" id="alert" hidden>
                        <div id="alert-msg" class="mb-3 bg-lighter-danger color-danger font-w-600 b-radius-6 p-3 py-2">
                            Kamu sudah 3x gagal memasukkan password, coba lagi dalam ..
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden d-flex align-items-center w-100 h-100">
                        <form action="<?= site_url('register')?>" method="post" enctype="multipart/form-data">

                            <div class="register-slide active" id="register-step-1">
                                <div class="d-flex align-items-center w-100 mb-5">
                                    <p class="brand mb-0">Daftar</p>
                                    <p class="small opacity-5 ms-auto">1/4</p>
                                </div>
                                <div>
                                    <input class="auth-input mb-4" type="text" name="email" placeholder="Alamat Email">
                                    <input class="auth-input mb-4" type="number" name="telp" placeholder="Nomor Hp" onkeypress="return isNumberKey(event)">
                                    <input class="auth-input mb-4" type="password" name="pass" placeholder="Buat Password">
                                    <input class="auth-input mb-4" type="password" name="confirmPass" placeholder="Konfirmasi Password">
                                </div>


                                <span class="auth-btn py-3 mt-3 goToStep2">Selanjutnya</span>
                                <p class="text-center w-100">Sudah punya akun ? <a href="<?= site_url('sign-in') ?>" class="font-w-600">Masuk</a></p>
                            </div>

                            <div class="register-slide" id="register-step-2">

                                <div class="d-flex align-items-center w-100 mb-5">
                                    <span class="border-0 bg-transparent goToStep1"><span class="iconify me-3 h4 mb-0" data-icon="akar-icons:chevron-left"></span></span>
                                    <p class="brand mb-0">Daftar</p>
                                    <p class="small opacity-5 ms-auto">2/4</p>
                                </div>

                                <div>
                                    <input class="auth-input mb-4" type="text" name="nama" placeholder="Nama Lengkap">
                                    <input class="auth-input mb-4" type="text" name="jk" placeholder="Jenis Kelamin">
                                    <input class="auth-input mb-4" type="text" name="alamat" placeholder="Alamat">
                                    <input class="auth-input mb-4" type="text" name="tmpt_lahir" placeholder="Tempat Kelahiran">
                                    <div class="d-flex gap-3 mb-4">
                                        <select id="tanggal" name="tgl_lahir">
                                            <option value="">Tanggal Lahir</option>
                                            <?php
                                            for ($x = 1; $x <= 31; $x++) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                            ?>
                                        </select>
                                        <select id="bulan" name="bln_lahir">
                                            <option value="">Bulan</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <select id="tahun" name="thn_lahir">
                                            <option value="">Tahun</option>
                                            <?php
                                            for ($x = 2021; $x >= 1900; $x--) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <select id="agama" name="agama">
                                        <option value="">Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                    </select>
                                    <input class="auth-input mb-4" type="number" name="nik" placeholder="NIK" onkeypress="return isNumberKey(event)">
                                </div>

                                <span class="auth-btn py-3 mt-3 goToStep3">Selanjutnya</span>
                            </div>

                            <div class="register-slide" id="register-step-3">
                                <div class="d-flex align-items-center w-100 mb-5">
                                    <span class="border-0 bg-transparent goToStep2"><span class="iconify me-3 h4 mb-0" data-icon="akar-icons:chevron-left"></span></span>
                                    <p class="brand mb-0">Daftar</p>
                                    <p class="small opacity-5 ms-auto">3/4</p>
                                </div>

                                <div>
                                    <input class="auth-input mb-4" type="text" name="pt" placeholder="Perguruan Tinggi">
                                    <input class="auth-input mb-4" type="number" name="nim" placeholder="NIM" onkeypress="return isNumberKey(event)">
                                    <input class="auth-input mb-4" type="text" name="ps" placeholder="Program Studi">
                                    <input class="auth-input mb-4" type="text" name="jenjang" placeholder="Jenjang">
                                    <input class="auth-input mb-4" type="number" name="semester" placeholder="Semester" onkeypress="return isNumberKey(event)">
                                </div>

                                <span class="auth-btn py-3 mt-3 goToStep4">Selanjutnya</span>
                            </div>

                            <div class="register-slide" id="register-step-4">
                                <div class="d-flex align-items-center w-100 mb-5">
                                    <span class="border-0 bg-transparent goToStep3"><span class="iconify me-3 h4 mb-0" data-icon="akar-icons:chevron-left"></span></span>
                                    <p class="brand mb-0">Daftar</p>
                                    <p class="small opacity-5 ms-auto">4/4</p>
                                </div>

                                <div>
                                    <p class="mb-2">Curriculum Vitae</p>
                                    <p class="small color-secondary-dark">Unggah dengan format PDF dengan ukuran maksimal 2 MB</p>
                                    <div class="input-file">
                                        <span class="course-card-title button-file mb-0" id="buttonCV">
                                            Pilih File
                                            <input type="file" id="cv" name="cv" accept=".pdf">
                                        </span>
                                        <div id="labelCV">
                                            <div>
                                                <span class="iconify color-success fs-4" data-icon="akar-icons:circle-check-fill"></span>
                                                <i></i>
                                            </div>
                                            <div class="text-center mt-3">
                                                <span class="me-2 text-danger fw-bold c-pointer" id="deleteCV">Hapus File</span>
                                                <label for="cv" class="ms-2 fw-bold c-pointer">Ganti File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-2">Portfolio (Opsional)</p>
                                    <p class="small color-secondary-dark">Unggah dengan format PDF dengan ukuran maksimal 2 MB</p>
                                    <div class="input-file">
                                        <span class="course-card-title button-file mb-0" id="buttonPorto">
                                            Pilih File
                                            <input type="file" id="porto" name="porto" accept=".pdf">
                                        </span>
                                        <div id="labelPorto">
                                            <div>
                                                <span class="iconify color-success fs-4" data-icon="akar-icons:circle-check-fill"></span>
                                                <i></i>
                                            </div>
                                            <div class="text-center mt-3">
                                                <span class="me-2 text-danger fw-bold c-pointer" id="deletePorto">Hapus File</span>
                                                <label for="porto" class="ms-2 fw-bold c-pointer">Ganti File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-2">Sertifikat/Dokumen Pendukung</p>
                                    <p class="small color-secondary-dark">Unggah dengan format PDF dengan ukuran maksimal 2 MB</p>
                                    <div class="input-file">
                                        <span class="course-card-title button-file mb-0" id="buttonSertif1">
                                            Pilih File
                                            <input type="file" id="sertif1" name="dokPend[0]" accept=".pdf">
                                        </span>
                                        <div id="labelSertif1">
                                            <div>
                                                <span class="iconify color-success fs-4" data-icon="akar-icons:circle-check-fill"></span>
                                                <i></i>
                                            </div>
                                            <div class="text-center mt-3">
                                                <span class="me-2 text-danger fw-bold c-pointer" id="deleteSertif1">Hapus File</span>
                                                <label for="sertif1" class="ms-2 fw-bold c-pointer">Ganti File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-file">
                                        <span class="course-card-title button-file mb-0" id="buttonSertif2">
                                            Pilih File
                                            <input type="file" id="sertif2" name="dokPend[1]" accept=".pdf">
                                        </span>
                                        <div id="labelSertif2">
                                            <div>
                                                <span class="iconify color-success fs-4" data-icon="akar-icons:circle-check-fill"></span>
                                                <i></i>
                                            </div>
                                            <div class="text-center mt-3">
                                                <span class="me-2 text-danger fw-bold c-pointer" id="deleteSertif2">Hapus File</span>
                                                <label for="sertif" class="ms-2 fw-bold c-pointer">Ganti File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-file">
                                        <span class="course-card-title button-file mb-0" id="buttonSertif3">
                                            Pilih File
                                            <input type="file" id="sertif3" name="dokPend[2]" accept=".pdf">
                                        </span>
                                        <div id="labelSertif3">
                                            <div>
                                                <span class="iconify color-success fs-4" data-icon="akar-icons:circle-check-fill"></span>
                                                <i></i>
                                            </div>
                                            <div class="text-center mt-3">
                                                <span class="me-2 text-danger fw-bold c-pointer" id="deleteSertif3">Hapus File</span>
                                                <label for="sertif3" class="ms-2 fw-bold c-pointer">Ganti File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-2">Surat Rekomendasi Universitas</p>
                                    <p class="small color-secondary-dark">Unggah dengan format PDF dengan ukuran maksimal 2 MB</p>
                                    <div class="input-file">
                                        <span class="course-card-title button-file mb-0" id="buttonRekom">
                                            Pilih File
                                            <input type="file" id="rekom" name="rekom" accept=".pdf">
                                        </span>
                                        <div id="labelRekom">
                                            <div>
                                                <span class="iconify color-success fs-4" data-icon="akar-icons:circle-check-fill"></span>
                                                <i></i>
                                            </div>
                                            <div class="text-center mt-3">
                                                <span class="me-2 text-danger fw-bold c-pointer" id="deleteRekom">Hapus File</span>
                                                <label for="rekom" class="ms-2 fw-bold c-pointer">Ganti File</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <span class="auth-btn py-3 mt-3 finalStep">Daftar</span>
                            </div>
                        </form>

                    </div>

                </section>
            </div>
            <div class="auth-img ms-auto">
                <img src="<?= site_url() ?>assets/src/img/login-image.png" alt="">
            </div>
        </div>
    </div>
</div>