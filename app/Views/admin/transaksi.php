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
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Juduk</th>
                                <th>Nama Peminjam</th>
                                <th>Pengembalian</th>
                                <th>Id Buku</th>
                            </thead>
                            <tbody>
                                <?php 
                    foreach($transaksi as $key => $data) { ?>
                                <tr>
                                    <td><?php echo $key+1; ?></td>
                                    <td><?php echo $data['Judul']; ?></td>
                                    <td><?php echo $data['nama_peminjam']; ?></td>
                                    <td><?php echo $data['pengembalian']; ?></td>
                                    <td><?php echo $data['id_buku']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </section>