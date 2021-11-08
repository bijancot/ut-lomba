<div class="min-vh-100 p-head">
    <div class="container-xxl px-md-5 form-container b-radius-28">
        <div class="d-flex position-relative h-100">
            <div class="w-50 bg-white border border-3 border-white b-radius-28 position-absolute start-0 bottom-0 top-0">
                <section class="form-section px-5 h-100 d-flex flex-column justify-content-center align-items-start">
                    <p class="brand mb-4">Masuk</p>
                    <input class="auth-input mb-4" type="text" placeholder="Email">
                    <input class="auth-input mb-4" type="password" placeholder="Password">
                    <a href="#" class="font-w-600 my-3 ps-2">Forgot your password</a>
                    <button type="submit" class="auth-btn mt-3">Masuk</button>
                    <p class="text-center w-100 mt-3">Belum punya akun ? <a href="<?= site_url('/register')?>" class="font-w-600">Daftar</a></p>
                </section>
            </div>
            <div class="auth-img ms-auto">
                <img src="<?= site_url()?>assets/src/img/login-image.png" alt="">
            </div>
        </div>
    </div>
</div>