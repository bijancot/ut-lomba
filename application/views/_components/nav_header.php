<header class="header px-5 py-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
    <a href="<?= site_url()?>home" class="brand mr-auto">UTNGL</a>
    <div class="d-flex flex-column flex-md-row align-items-center h-100">
        <a href="<?= site_url()?>home/pretest" class="links <?= uri_string() == 'pretest' ? 'active':'' ?>">Pretest</a>
        <button class="links border-0 bg-transparent position-relative" id="nav-sublink">
            Became a <span class="iconify ms-3" data-icon="akar-icons:chevron-down"></span>

            <nav class="sub-nav p-2 position-absolute d-flex flex-column align-items-start" id="sub-nav">

                <!-- Tambah parameter di link nya  -->

                <span class="sub-link"><a href="<?= site_url()?>home/course_list">Leader</a></span>
                <span class="sub-link"><a href="<?= site_url()?>home/course_list">Management</a></span>
                <span class="sub-link"><a href="<?= site_url()?>home/course_list">Administrasi</a></span>
                <span class="sub-link"><a href="<?= site_url()?>home/course_list">Ekonomi</a></span>
                <span class="sub-link"><a href="<?= site_url()?>home/course_list">Psikologi</a></span>
            </nav>
        </button>
        <a href="<?= site_url()?>home/eventList" class="links <?= uri_string() == 'home/eventList' ? 'active':'' ?>">Event</a>
        <a href="<?= site_url()?>home/about" class="links <?= uri_string() == 'home/about' ? 'active':'' ?>">About</a>
    </div>
    <!-- IF NOT LOGGED IN -->
    <div class="d-flex flex-row align-items-center h-100">
        <a href="<?= site_url()?>register" class="links font-w-600 <?= uri_string() == 'register' ? 'active':'' ?>">Daftar</a>
        <span class="spacer"></span>
        <a href="<?= site_url()?>login" class="links font-w-600 <?= uri_string() == 'login' ? 'active':'' ?>">Masuk</a>
    </div>
    <!-- IF LOGGED IN -->
    <div class="d-flex d-none ms-n5 flex-row align-items-center h-100">
        <a href="#" class="links circle font-w-600"><span class="badge"></span><img class="icon" src="<?= site_url()?>assets/src/img/bell-icon.svg" alt=""></a>
        <a href="#" class="links mx-1 circle-photo font-w-600"><img class="icon" src="<?= site_url()?>assets/src/img/cat.jpg" alt=""></a>
        <a href="#" class="links mx-2 font-w-600">Alfian Mengsedih</a>
        <button class="border-0 bg-transparent ms-3"><span class="iconify fs-4" data-icon="bi:three-dots-vertical"></span></button>
    </div>
</header>