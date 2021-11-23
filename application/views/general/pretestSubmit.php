<div class="min-vh-100 p-head">
    <div class="container-xxl p-md-5">
        <div class="border-bottom w-100 py-3">
            <p class="fs-4 font-w-600">Pretest</p>
        </div>

        <div class="container">
            <div class="w-full border b-radius-28 text-center my-5 pretest-img">
                <img src="<?= site_url() ?>assets/src/img/pretest.png">
            </div>

            <p class="fs-3 font-w-600 mt-5 mb-0">
                Pengumpulan Design Test
            </p>
            <p class="color-secondary-dark">
                Unggah dengan format PDF dengan ukuran maksimal 20 MB
            </p>
            <div class="input-file">
                <span class="course-card-title button-file mb-0" id="buttonSubmit">
                    Pilih File
                    <input type="file" id="submit" name="dokPend[]" accept=".pdf">
                </span>
                <div id="labelSubmit">
                    <div>
                        <span class="iconify color-success fs-4" data-icon="akar-icons:circle-check-fill"></span>
                        <i></i>
                    </div>
                    <div class="text-center mt-3">
                        <span class="me-2 text-danger fw-bold c-pointer" id="deleteSubmit">Hapus File</span>
                        <label for="submit" class="ms-2 fw-bold c-pointer">Ganti File</label>
                    </div>
                </div>
            </div>

            <div class="w-full d-flex">
                <a href="#" class="auth-btn px-5 my-5 mx-auto w-auto">Kumpulkan</a>
            </div>

        </div>

    </div>
</div>