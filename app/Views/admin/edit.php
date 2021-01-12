<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">CRUD</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/adminIndex">Home</a></li>
                        <li class="breadcrumb-item active">CRUD</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="main-wrapper">
        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center">
                <h2 class="heading">PERPUSTAKAAN</h2>

                <div class="intro">"Semakin aku banyak membaca, semakin aku banyak berpikir. <br>Semakin aku banyak
                    belajar, semakin
                    aku sadar bahwa aku tak mengetahui apa pun." <br> - Voltaire</div>

                <div class="container">
                    <h4>Form Edit Produk</h4>
                    <hr>
                    <form action="<?php echo base_url('Fikri/update/'.$book['id']); ?>" method="post">

                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="Judul" value="<?php echo $book['Judul']; ?>" class="form-control"
                                placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="Deskripsi" class="form-control"
                                placeholder="Deskripsi"><?php echo $book['Deskripsi']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Penulis</label>
                            <input type="text" name="Penulis" value="<?php echo $book['Penulis']; ?>"
                                class="form-control" placeholder="Penulis">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="text" name="Jumlah" value="<?php echo $book['Jumlah']; ?>" class="form-control"
                                placeholder="Jumlah">
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="Harga" value="<?php echo $book['Harga']; ?>" class="form-control"
                                placeholder="Harga">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>