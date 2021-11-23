<div class="min-vh-100 p-head">
    <div class="container-xxl p-md-5">
        <div class="border-bottom w-100 py-3">
            <p class="fs-4 font-w-600">Pretest</p>
        </div>

        <div class="container">
            <?php
                if($pu->IMG_PRETEST != null){
                    echo '
                        <div class="w-full border b-radius-28 text-center my-5 pretest-img">
                            <img src="'.$pu->IMG_PRETEST.'">
                        </div>
                    ';
                }
            ?>
            

            <p class="fs-3 font-w-600 my-5">
                <?= $pu->NAMA_PRETEST?> Test
            </p>

            <article>
                <?= $pu->SOAL_PRETEST?>
            </article>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                        Materi
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                        Komentar
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <table class="table table-striped table-responsive my-3">
                        <tbody class="tbody-card">

                            <tr>
                                <td>Waktu Tersisa</td>
                                <td>:</td>
                                <?php
                                    $currDate   = date_create(date('Y-m-d H:i:s'));
                                    $deadlinePU = date_create($pu->DEADLINE_PU);
                                    $diff       = date_diff($deadlinePU, $currDate);
                                ?>
                                <td><?= $diff->format('%d hari %h jam %i menit')?></td>
                            </tr>
                            <tr>
                                <td>File yang dikumpul</td>
                                <td>: </td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Format pengerjaan</td>
                                <td>: </td>
                                <td><?= $pu->FORMATPENGERJAAN_PRETEST?></td>
                            </tr>
                            <tr>
                                <td>Format File</td>
                                <td>: </td>
                                <td><?= str_replace('|', '/', $pu->FORMATFILE_PRETEST)?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="w-full d-flex">
                        <a href="<?= site_url() ?>home/pretest/submit" class="auth-btn px-5 my-5 mx-auto w-auto">Kumpulkan</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <article class="container p-5">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices sem id aliquet sed quis. Ipsum eget hac nunc, nunc enim. Neque, pellentesque arcu amet, et duis aliquet ultrices imperdiet nunc. Ac mattis eu, volutpat, amet mi. Enim ipsum enim sed leo commodo, sit ut tincidunt. Lectus sed sed risus donec tortor in vel vulputate. Sed nunc placerat aliquet felis. Felis mattis tristique a nulla lorem. Dis praesent egestas tempus, bibendum risus volutpat. In diam ultricies pellentesque tempor tempor felis vivamus vel nulla. Cras bibendum montes, mauris dui ultrices habitant diam libero facilisis.
                        </p>
                    </article>
                </div>
            </div>

        </div>

    </div>
</div>