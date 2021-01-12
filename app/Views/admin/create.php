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
                <h2 class="heading">ADMIN PERPUSTAKAAN</h2>

                <div class="intro">"Semakin aku banyak membaca, semakin aku banyak berpikir. <br>Semakin aku banyak
                    belajar, semakin
                    aku sadar bahwa aku tak mengetahui apa pun." <br> - Voltaire</div>

                <div class="container">
                    <hr>
                    <h4>Form Tambah Buku</h4>
                    <hr>
                    <form action="<?php echo base_url('Fikri/store'); ?>" method="post">

                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="Judul" class="form-control" placeholder="Nama Produk">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="Deskripsi" class="form-control" placeholder="Deskripsi Produk"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Penulis</label>
                            <textarea name="Penulis" class="form-control" placeholder="Nama Penulis"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <textarea name="Jumlah" class="form-control" placeholder="Jumlah"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <textarea name="Harga" class="form-control" placeholder="Harga"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>