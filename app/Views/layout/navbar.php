<navbar class="relative top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="content flex item-center justify-between relative">
            <div class="logo">
                <a href="<?= base_url() ?>/" class="font-bold text-2xl text-green block py-2">Pzakat CI4</a>
            </div>

            <!-- search -->
            <div class="flex items-center gap-2 lg:hidden relative">
                <input type="text" name="keyword" placeholder="Search..." id="keyword-md" class="px-2 py-1 outline-none border-2 border-green text-sm rounded-full text-lightgray md:w-60 sm:w-44 w-28 transition-300">
                <button class="absolute right-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="curretColor" class="bi bi-search fill-green" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" class="block absolute right-2 pl-2 lg:hidden overflow-hidden">
                    <span class="hamburger-line bg-darkgray transition-500 origin-top-left"></span>
                    <span class="hamburger-line bg-darkgray transition-500"></span>
                    <span class="hamburger-line bg-darkgray transition-500 origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute nav-menu">
                    <ul class="block lg:flex gap-7 items-center">
                        <li class="group lg:pb-0 pb-2">
                            <a href="<?= base_url() ?>/home" class="text-lightgray group-hover:text-green transition-300 <?= ($title === 'Home') ? 'nav-active' : '' ?>">Beranda</a>
                        </li>
                        <li class="lg:pb-0 pb-2 dropmenu relative">

                            <div class="btn-dropdown group">
                                <button class="text-lightgray group-hover:text-green transition-300">
                                    <div class="flex items-center gap-1">
                                        <div>Tentang Kami</div>
                                        <div class="arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </button>

                                <div class="lg:mt-2 lg:p-3 lg:scale-0 lg:group-hover:scale-110 lg:h-auto h-0 text-sm lg:text-md overflow-hidden transition-500 dropdown-menu flex gap-1 flex-col lg:absolute top-5 bg-white text-lightgray rounded-md w-52 lg:shadow-md">
                                    <a class="dropdown-item hover:text-green transition-300" href="<?= base_url() ?>/latarbelakang">Latar Belakang</a>
                                    <a class="dropdown-item hover:text-green transition-300" href="<?= base_url() ?>/visimisi">Visi Misi dan Prinsip</a>
                                    <a class="dropdown-item hover:text-green transition-300" href="<?= base_url() ?>/laporan_keuangan">Laporan Keuangan</a>
                                    <a class="dropdown-item hover:text-green transition-300" href="<?= base_url() ?>/contact">Contact Us</a>
                                </div>
                            </div>

                        </li>
                        <li class="group lg:pb-0 pb-2">
                            <a href="<?= base_url() ?>/page/news" class="text-lightgray group-hover:text-green transition-300 <?= ($title === 'Berita') ? 'nav-active' : '' ?>">Berita</a>
                        </li>
                        <li class="group lg:pb-0 pb-2">
                            <a href="<?= base_url() ?>/programs" class="text-lightgray group-hover:text-green transition-300 <?= ($title === 'Programs') ? 'nav-active' : '' ?>">Program</a>
                        </li>
                        <li class="lg:block hidden">
                            <!-- search -->
                            <div class="w-full flex items-center gap-2 relative">
                                <input type="text" name="keyword" placeholder="Search..." id="keyword-lg" class="px-2 py-1 outline-none border-2 border-green text-sm rounded-full text-lightgray">
                                <button id="button-search" class="absolute right-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="curretColor" class="bi bi-search fill-green" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                            </div>
                        </li>
                        <!-- login and regist -->
                        <li class="group lg:bg-green lg:py-2 lg:px-3 lg:hover:bg-darkgreen transition-300 lg:border-none border-t-2 lg:-mr-5">
                            <a href="<?= base_url() ?>/login" class="lg:text-white group-hover:text-lightgreen transition-300 text-green">Masuk</a>
                        </li>
                        <li class="group lg:bg-green lg:py-2 lg:px-3 lg:hover:bg-darkgreen transition-300 lg:-mr-5">
                            <a href="<?= base_url() ?>/daftar" class="lg:text-white group-hover:text-lightgreen transition-300 text-green">Daftar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</navbar>