<div class="min-vh-100 p-head">
    <div class="container-xxl p-md-5 pb-md-0">
        <div class="border-bottom w-100 py-3">
            <p class="fs-4 font-w-600">Course</p>
        </div>

        <div class="row mt-5">
            <div class="col-12 col-lg-6 pe-5">
                <div class="d-flex flex-row justify-content-between">
                    <p class="fs-5 font-w-600">Done<span class="iconify ms-2 fs-3 color-success" data-icon="fluent:checkmark-circle-12-filled"></span></p>
                    <p><span class="font-w-600">Kategori :</span> Pengembangan Diri</p>
                </div>
                <p class="fs-2 font-w-600 mt-3">Strategi Mengembangkan dan Mempertahankan Karyawan </p>
                <div class="desc-text-container mb-5">

                    <p class="color-secondary-dark">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, consequuntur? Asperiores commodi esse natus doloremque corrupti architecto consequatur accusamus voluptatem aperiam earum sunt sit quas consectetur quibusdam beatae, ut laudantium?
                        <br><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam totam laudantium, repellat perspiciatis consectetur repellendus, veritatis illo maiores dolor commodi dolorem doloremque fugit voluptate perferendis similique omnis autem delectus doloribus!
                        <br><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam totam laudantium, repellat perspiciatis consectetur repellendus, veritatis illo maiores dolor commodi dolorem doloremque fugit voluptate perferendis similique omnis autem delectus doloribus!
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
                <img class="course-image" src="<?= site_url() ?>assets/src/img/course.png">
                <div class="d-flex flex-row justify-content-end align-items-center mt-4">
                    <p class="font-w-600 mb-0">Share :</p>
                    <span class="iconify fs-5 ms-3" data-icon="brandico:facebook"></span>   
                    <span class="iconify fs-5 ms-3" data-icon="brandico:twitter-bird"></span>   
                    <span class="iconify fs-4 ms-3" data-icon="ant-design:instagram-filled"></span>   
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