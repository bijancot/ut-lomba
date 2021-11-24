<div class="min-vh-100 p-head">
    <div class="container-xxl p-md-5">
        <div class="border-bottom w-100 py-3">
            <p class="fs-4 font-w-600">Pretest</p>
        </div>

        <div class="container">
            <div class="w-full border b-radius-28 text-center my-5 pretest-img">
                <img src="<?= $pu->IMG_PRETEST?>">
            </div>

            <p class="fs-3 font-w-600 mt-5 mb-0">
                Pengumpulan <?= $pu->NAMA_PRETEST?> Test
            </p>
            <p class="color-secondary-dark">
                Unggah dengan format <?= str_replace("|", "/", $pu->FORMATFILE_PRETEST)?> dengan ukuran maksimal 2 MB
            </p>
            <?php
                if($this->session->flashdata('err_msg')){
                    echo '
                        <div class="mb-4">
                            <div class="mb-3 bg-lighter-danger color-danger font-w-600 b-radius-6 p-3 py-2">
                                '.$this->session->flashdata('err_msg').'
                            </div>
                        </div>
                    ';
                }
            ?>
            <form action="<?= site_url('pretest/collect')?>" enctype="multipart/form-data" method="post">
                <div class="input-file">
                    <span class="course-card-title button-file mb-0" id="buttonSubmit">
                        Pilih File
                        <input type="file" id="submit" name="file" accept="<?= ".".str_replace("|",",.", $pu->FORMATFILE_PRETEST)?>">
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
                    <input type="hidden" name="id" value="<?= $pu->ID_PU?>">
                    <input type="hidden" name="type" value="<?= $pu->FORMATFILE_PRETEST?>">
                    <button type="submit" class="auth-btn px-5 my-5 mx-auto w-auto">Kumpulkan</button>
                </div>
            </form>

        </div>

    </div>
</div>