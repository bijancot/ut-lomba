<header class="header px-5 py-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
    <a href="#" class="brand mr-auto">UTNGL</a>
    <div class="d-flex flex-column flex-md-row align-items-center h-100">
        <a href="#" class="links">Pretest</a>
        <button class="links border-0 bg-transparent position-relative" id="nav-sublink">
            Became a <span class="iconify ms-3" data-icon="akar-icons:chevron-down"></span>

            <nav class="sub-nav p-2 position-absolute d-flex flex-column align-items-start" id="sub-nav">

                <!-- Tambah parameter di link nya  -->

                <span class="sub-link"><a href="<?= site_url()?>home/course_list">Leader</a></span>
                <span class="sub-link <?= uri_string() == 'home/course' ? 'active':'' ?>"><a href="<?= site_url()?>home/course">Management</a></span>
                <span class="sub-link"><a href="<?= site_url()?>home/course_list">Administrasi</a></span>
                <span class="sub-link"><a href="<?= site_url()?>home/course_list">Ekonomi</a></span>
                <span class="sub-link"><a href="<?= site_url()?>home/course_list">Psikologi</a></span>
            </nav>
        </button>
        <a href="#" class="links">Event</a>
        <a href="#" class="links">About</a>
    </div>
    <!-- IF NOT LOGGED IN -->
    <div class="d-flex d-none flex-row align-items-center h-100">
        <a href="#" class="links font-w-600">Daftar</a>
        <span class="border border-start border-1 border-dark h-1"></span>
        <a href="#" class="links font-w-600">Masuk</a>
    </div>
    <!-- IF LOGGED IN -->
    <div class="d-flex ms-n5 flex-row align-items-center h-100">
        <a href="#" class="links circle font-w-600"><span class="badge"></span><img class="icon" src="<?= site_url()?>assets/src/img/bell-icon.svg" alt=""></a>
        <a href="#" class="links mx-1 circle-photo font-w-600"><img class="icon" src="<?= site_url()?>assets/src/img/cat.jpg" alt=""></a>
        <a href="#" class="links mx-2 font-w-600">Alfian Mengsedih</a>
        <button class="border-0 bg-transparent ms-3"><span class="iconify fs-4" data-icon="bi:three-dots-vertical"></span></button>
    </div>
</header>