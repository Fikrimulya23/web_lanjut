<ul class="navbar-nav flex-column text-left">
    <li class="nav-item">
        <a class="nav-link" href="cariBuku"><i class="fas fa-home fa-fw mr-2"></i>Cari
            Buku</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="bukuSaya"><i class="fas fa-bookmark fa-fw mr-2"></i>Buku
            Saya</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="tentangSaya"><i class="fas fa-user fa-fw mr-2"></i>Tentang
            saya</a>
    </li>
</ul>

<div class="my-2 my-md-3">
    <a class="btn btn-primary" href="logout">Keluar</a>
</div>
</div>
</nav>
</header>

<div class="main-wrapper">
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">
            <h2 class="heading">PERPUSTAKAAN</h2>
            <div class="intro">
                "Jangan pernah membaca karena ingin dianggap pintar,<br>bacalah karena kamu mau membaca, dan dengan
                sendirinya kamu akan jadi pintar." <br>- Ziggy</div>
        </div>
        <!--//container-->
    </section>

    <section class="blog-list px-3 py-5 p-md-5">
        <div class="container">

            <?php 
                foreach($book as $key => $data) { ?>
            <div class="item mb-5">
                <div class="media">
                    <img class="mr-3 img-fluid post-thumb d-none d-md-flex"
                        src="<?= base_url(); ?>/assets/images/blog/blog-post-thumb-2.jpg" alt="image">
                    <div class="media-body">
                        <h3 class="title mb-1"><a href="blog-post.html"><?php echo $data['Judul']; ?></a></h3>
                        <div class="meta mb-1"><span class="date"><?php echo $data['Penulis']; ?></span>
                            <span class="time">Rp.<?php echo $data['Harga']; ?></span>
                            <span class="comment"><a href="#">Stok: <?php echo $data['Jumlah']; ?></a></span>
                        </div>
                        <div class="intro"><?php echo $data['Deskripsi']; ?></div>
                        <a class="more-link" href="blog-post.html">Lihat buku</a>
                    </div>
                    <!--//media-body-->
                </div>
                <!--//media-->
            </div>
            <!--//item-->
            <?php } ?>