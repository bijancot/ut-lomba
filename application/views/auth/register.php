<div class="min-vh-100 p-head">
    <div class="container-xxl px-md-5 form-container b-radius-28">
        <div class="d-flex position-relative row h-100">
            <div class="col-12 col-lg-6 bg-white b-radius-28 position-absolute start-0 bottom-0 top-0">
                <section class="form-section p-3 p-md-4 h-100 d-flex flex-column justify-content-center align-items-start">

                    <div class="position-relative overflow-hidden d-flex align-items-center w-100 h-100">
                        <form action="">

                            <div class="register-slide active" id="register-step-1">
                                <div class="d-flex align-items-center w-100 mb-5">
                                    <p class="brand mb-0">Daftar</p>
                                    <p class="small opacity-5 ms-auto">1/4</p>
                                </div>
                                <div>
                                    <input class="auth-input mb-4" type="text" placeholder="Alamat Email">
                                    <input class="auth-input mb-4" type="number" placeholder="Nomor Hp">
                                    <input class="auth-input mb-4" type="password" placeholder="Buat Password">
                                    <input class="auth-input mb-4" type="password" placeholder="Konfirmasi Password">
                                </div>


                                <span class="auth-btn py-3 mt-3 goToStep2">Selanjutnya</span>
                                <p class="text-center w-100">Sudah punya akun ? <a href="<?= site_url('/login') ?>" class="font-w-600">Masuk</a></p>
                            </div>

                            <div class="register-slide" id="register-step-2">

                                <div class="d-flex align-items-center w-100 mb-5">
                                    <span class="border-0 bg-transparent goToStep1"><span class="iconify me-3 h4 mb-0" data-icon="akar-icons:chevron-left"></span></span>
                                    <p class="brand mb-0">Daftar</p>
                                    <p class="small opacity-5 ms-auto">2/4</p>
                                </div>

                                <div>
                                    <input class="auth-input mb-4" type="text" placeholder="Nama Lengkap">
                                    <input class="auth-input mb-4" type="text" placeholder="Jenis Kelamin">
                                    <input class="auth-input mb-4" type="text" placeholder="Tempat Kelahiran">
                                    <div class="d-flex gap-3 mb-4">
                                        <select id="tanggal">
                                            <option value="hide">Tanggal Lahir</option>
                                            <?php
                                            for ($x = 1; $x <= 31; $x++) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                            ?>
                                        </select>
                                        <select id="bulan">
                                            <option value="hide">Bulan</option>
                                            <option value="january">January</option>
                                            <option value="february">February</option>
                                            <option value="march">March</option>
                                            <option value="april">April</option>
                                            <option value="may">May</option>
                                            <option value="june">June</option>
                                            <option value="july">July</option>
                                            <option value="august">August</option>
                                            <option value="september">September</option>
                                            <option value="october">October</option>
                                            <option value="november">November</option>
                                            <option value="december">December</option>
                                        </select>
                                        <select id="tahun">
                                            <option value="hide">Tahun</option>
                                            <?php
                                            for ($x = 2021; $x >= 1900; $x--) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <input class="auth-input mb-4" type="text" placeholder="Agama">
                                    <input class="auth-input mb-4" type="number" placeholder="NIK">
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
                                    <input class="auth-input mb-4" type="text" placeholder="Perguruan Tinggi">
                                    <input class="auth-input mb-4" type="number" placeholder="NIM">
                                    <input class="auth-input mb-4" type="text" placeholder="Program Studi">
                                    <input class="auth-input mb-4" type="text" placeholder="Jenjang">
                                    <input class="auth-input mb-4" type="number" placeholder="Semester">
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
                                            <input type="file" id="cv">
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
                                            <input type="file" id="porto">
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
                                            <input type="file" id="sertif1">
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
                                            <input type="file" id="sertif2">
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
                                            <input type="file" id="sertif3">
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
                                            <input type="file" id="rekom">
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

                                <button type="submit" class="auth-btn py-3 mt-3">Daftar</button>
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