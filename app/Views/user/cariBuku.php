<ul class="navbar-nav flex-column text-left">
    <li class="nav-item active">
        <a class="nav-link" href="cariBuku"><i class="fas fa-home fa-fw mr-2"></i>Cari
            Buku</a>
    </li>
    <li class="nav-item">
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

            <div class="intro">"Semakin aku banyak membaca, semakin aku banyak berpikir. <br>Semakin aku banyak
                belajar, semakin
                aku sadar bahwa aku tak mengetahui apa pun." <br> - Voltaire</div>

            <div class="tm-next tm-intro-next">
                <a href="#list" class="text-center tm-down-arrow-link">
                    <i class="fas fa-3x fa-caret-down tm-down-arrow"></i>
                </a>
            </div>
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="text-align: center;">
                    <div class="carousel-item active" data-interval="10000">
                        <img src="<?= base_url();?>/assets/perpus3.jpg" class="" alt=" ..." width="1480" height="500">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="<?= base_url();?>/assets/perpus1.jpg" class="" alt=" ..." width="1480" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url();?>/assets/perpus2.jpg" class="" alt=" ..." width="1480" height="500">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



            <form class="signup-form form-inline justify-content-center pt-3">
                <div class="form-group">
                    <label class="sr-only" for="semail">Masukkan judul buku</label>
                    <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail"
                        placeholder="Judul Buku">
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
        <!--//container-->
    </section>

    <section id=list class="blog-list px-3 py-5 p-md-5">
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
                            <span class="comment">Stok: <?php echo $data['Jumlah']; ?> </span>
                        </div>
                        <div class="intro"><?php echo $data['Deskripsi']; ?></div>

                        <?php if ($data['Jumlah'] > 0){ ?>
                        <div class="btn-group">
                            <a href="<?php echo base_url('Index/update/'.$data['id']); ?>"
                                class="btn btn-primary btn-sm">Pinjam</a>
                        </div>
                        <?php } else { ?>

                        <div class="btn-group">
                            <a href="" class="btn btn-danger btn-sm">Habis</a>
                        </div>

                        <?php } ?>


                    </div>
                    <!--//media-body-->
                </div>
                <!--//media-->
            </div>
            <!--//item-->
            <?php } ?>