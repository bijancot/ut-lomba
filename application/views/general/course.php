<div class="min-vh-100 p-head">
    <div class="container-xxl p-md-5 pb-md-0">
        <div class="border-bottom w-100 py-3">
            <p class="fs-4 font-w-600">Course</p>
        </div>

        <div class="row mt-5">
            <div class="col-12 col-lg-6 pe-5">
                <div class="d-flex flex-row justify-content-between">
                    <?php
                        if($course->STAT_CU == "2"){
                            echo '
                                <p class="fs-5 font-w-600">Done<span class="iconify ms-2 fs-3 color-success" data-icon="fluent:checkmark-circle-12-filled"></span></p>
                            ';        
                        }else{
                            echo '
                                <p class="fs-5 font-w-600">Progress: '.$course->PROGRESS_CU.'%</p>
                            ';
                        }
                    ?>
                    
                    <p><span class="font-w-600">Kategori :</span> <?= $course->NAMA_KATCOU?></p>
                </div>
                <p class="fs-2 font-w-600 mt-3"><?= $course->NAMA_COURSE?></p>
                <div class="desc-text-container mb-5">

                    <p class="color-secondary-dark">
                        <?= $course->DESKRIPSI_COURSE?>
                    </p>
                    <div class="gradient-decor d-flex justify-content-center align-items-end">
                        <button class="border-0 outline-none bg-transparent fs-5 font-w-500 d-flex align-items-center" id="toggleSee">
                            <span class="see-more">Selengkapnya <span class="iconify ms-3" data-icon="akar-icons:chevron-down"></span></span>
                            <span class="see-less">Lebih Sedikit <span class="iconify ms-3" data-icon="akar-icons:chevron-up"></span></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img class="course-image" src="<?= $course->IMG_COURSE?>">
                <div class="d-flex flex-row justify-content-end align-items-center mt-4">
                    <!-- <p class="font-w-600 mb-0">Share :</p>
                    <button class="border-0 bg-transparent"><span class="iconify fs-5 ms-3" data-icon="brandico:facebook"></span></button>   
                    <button class="border-0 bg-transparent"><span class="iconify fs-5 ms-3" data-icon="brandico:twitter-bird"></span></button>   
                    <button class="border-0 bg-transparent"><span class="iconify fs-4 ms-3" data-icon="ant-design:instagram-filled"></span></button>    -->
                </div>
            </div>
        </div>

        <div class="border-bottom w-100 pt-3 mt-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                        Materi
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                        Pengumuman
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <?php
            $this->load->view('_components/course/course');
            ?>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <article class="container p-5">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices sem id aliquet sed quis. Ipsum eget hac nunc, nunc enim. Neque, pellentesque arcu amet, et duis aliquet ultrices imperdiet nunc. Ac mattis eu, volutpat, amet mi. Enim ipsum enim sed leo commodo, sit ut tincidunt. Lectus sed sed risus donec tortor in vel vulputate. Sed nunc placerat aliquet felis. Felis mattis tristique a nulla lorem. Dis praesent egestas tempus, bibendum risus volutpat. In diam ultricies pellentesque tempor tempor felis vivamus vel nulla. Cras bibendum montes, mauris dui ultrices habitant diam libero facilisis.
                    <br><br>
                    Hac nisl velit nec erat. Etiam pellentesque sit lacinia lectus risus, tincidunt nulla. Pellentesque tempor massa vulputate placerat rutrum tortor praesent et. Viverra vitae viverra nam aliquam non vitae sollicitudin. Sed tincidunt sit urna a arcu. Orci gravida sapien mauris, neque rhoncus diam dolor. Sit amet at fermentum, ullamcorper urna. Dolor imperdiet condimentum est platea.
                    <br><br>
                    Sed vehicula gravida malesuada interdum. A a, lorem sapien sagittis viverra eros, turpis odio nibh. Vitae cursus non commodo nisl in. Ultricies sagittis, donec ut nec pharetra ante nec. Aliquam lacus, eu, a pellentesque nisl senectus pretium lorem posuere. Nunc aliquet lorem sodales et lacus odio et orci ut. In nunc nam gravida id vestibulum platea.
                </p>
            </article>
        </div>
    </div>
</div>
<!-- NEXT MATERIAL MODAL -->
<div class="modal fade" id="nextMaterialModal" tabindex="-1" aria-labelledby="nextMaterialModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-0">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="<?= base_url('assets/src/img/icon-materi.svg')?>" style="width: 300px;" alt="material">
        <p class="my-3" style="font-weight: 600;">Apakah anda sudah memahami materi dan lanjut ke materi selanjutnya ?</p>
      </div>
      <div class="modal-footer border-top-0">
        <form id="formMateri" action="<?= site_url('course/next-materi')?>" method="post">
          <input type="hidden" id="idMateri" name="id" value="<?= $materials[$course->STEP_CU]->ID_MU?>" />
          <input type="hidden" id="idMateri" name="idcu" value="<?= $course->ID_CU?>" />
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Belajar Lagi</button>
          <button type="submit" class="btn btn-warning text-white">Lanjut</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END NEXT MATERIAL MODAL -->
<!-- FINISH MATERIAL MODAL -->
<div class="modal fade" id="finishMaterialModal" tabindex="-1" aria-labelledby="finishMaterialModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-0">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="<?= base_url('assets/src/img/icon-materi.svg')?>" style="width: 300px;" alt="material">
        <p class="my-3" style="font-weight: 600;">Apakah anda sudah memahami materi dan menyelesaikan course ini ?</p>
      </div>
      <div class="modal-footer border-top-0">
        <form id="formMateri" action="<?= site_url('course/finish-materi')?>" method="post">
          <input type="hidden" id="idMateri" name="id" value="<?= $materials[$course->STEP_CU]->ID_MU?>" />
          <input type="hidden" id="idMateri" name="idcu" value="<?= $course->ID_CU?>" />
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Belajar Lagi</button>
          <button type="submit" class="btn btn-warning text-white">Selesai</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END FINISH MATERIAL MODAL -->
<script>
    $('.btnCard').click(function(){
        const id = $(this).data('id')
        const no = $(this).data('no')
        $.ajax({
            url: "<?= site_url('course/ajxGetMU')?>",
            method: "POST",
            data: {id: id },
            success: function(res){
                const htmlDone = `<span class="iconify fs-3 color-success" data-icon="fluent:checkmark-circle-12-filled"></span>`;

                res = JSON.parse(res)
                $('#title').html(`${res.STAT_MU == "2" ? htmlDone : ""} Materi ${no} : ${res.NAMA_MATERIAL}`);
                $('#desc').html(`${res.DESKRIPSI_MATERIAL}`);
                $('#content').attr('src', res.CONTENT_MATERIAL);
                $('#idMateri').val(id);

                let htmlBtn = ``;
                if(res.STAT_MU != "2"){
                    const countMaterial = "<?= count($materials)?>";
                    if(countMaterial == no){
                        htmlBtn += `<a href="#" data-bs-toggle="modal" data-bs-target="#finishMaterialModal" class="auth-btn">Selesai</a>`;
                    }else{
                        htmlBtn = `<a href="#" data-bs-toggle="modal" data-bs-target="#nextMaterialModal" class="auth-btn">Materi Selanjutnya</a>`;
                    }
                }
                $('#btnSubmit').html(htmlBtn);

                let html = "";
                const resources = res.RESOURCE_MATERIAL.split(';');
                for(const item of resources){
                    baseUrl = "<?= site_url()?>"
                    html += `
                        <a href="${item}" class="course-pdf d-flex flex-wrap flex-col py-3">
                            <button class="course-card-title option">
                                <img src="${baseUrl}assets/src/img/pdf.svg" width="24" height="24" class="me-2">
                                Materi Tambahan
                            </button>
                        </a>
                    `;
                }
                $('#resources').html(html);

                
            }
        })
    })
</script>