<div class="min-vh-100 p-head">
    <div class="container form-container b-radius-28">
        <div class="d-flex position-relative h-100">
            <div class="w-50 bg-white b-radius-28 position-absolute start-0 bottom-0 top-0">
                <section class="form-section px-5 h-100 d-flex flex-column justify-content-center align-items-start">
                   
                    <div class="position-relative d-flex align-items-center w-100">
                        <div class="register-slide position-absolute">
                            <div class="d-flex align-items-center w-100 mb-5">
                                <p class="brand mb-0">Daftar</p>
                                <p class="small opacity-5 ms-auto">1/2</p>
                            </div>

                            <input class="auth-input mb-4" type="text" placeholder="Nama Lengkap">
                            <input class="auth-input mb-4" type="text" placeholder="Asal Kampus">
                            <input class="auth-input mb-4" type="text" placeholder="Jurusan">
                            <input class="auth-input mb-4" type="text" placeholder="Semester">

                            <button type="submit" class="auth-btn mt-3">Selanjutnya</button>
                            <p class="text-center w-100 mt-3">Sudah punya akun ? <a href="#" class="font-w-600">Masuk</a></p>
                        </div>
                        <div class="register-slide active position-absolute">
                            <div class="d-flex align-items-center w-100 mb-5">
                                <button class="border-0 bg-transparent"><span class="iconify me-3 h4 mb-0" data-icon="akar-icons:chevron-left"></span></button>
                                <p class="brand mb-0">Daftar</p>
                                <p class="small opacity-5 ms-auto">2/2</p>
                            </div>

                            <input class="auth-input mb-4" type="text" placeholder="Alamat Email">
                            <input class="auth-input mb-4" type="text" placeholder="Nomor Hp">
                            <input class="auth-input mb-4" type="password" placeholder="Password">
                            <input class="auth-input mb-4" type="password" placeholder="Konfirmasi Password">

                            <button type="submit" class="auth-btn mt-3">Daftar</button>
                            <p class="text-center w-100 mt-3">Sudah punya akun ? <a href="#" class="font-w-600">Masuk</a></p>
                        </div>
                    </div>
                    
                </section>
            </div>
            <div class="auth-img ms-auto">
                <img src="<?= site_url()?>assets/src/img/login-image.png" alt="">
            </div>
        </div>
    </div>
</div>