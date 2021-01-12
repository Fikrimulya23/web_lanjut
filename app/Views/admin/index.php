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
                    <?php
        if(!empty(session()->getFlashdata('success'))){ ?>

                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('success');?>
                    </div>

                    <?php } ?>
                    <?php if(!empty(session()->getFlashdata('info'))){ ?>

                    <div class="alert alert-info">
                        <?php echo session()->getFlashdata('info');?>
                    </div>

                    <?php } ?>

                    <?php if(!empty(session()->getFlashdata('warning'))){ ?>

                    <div class="alert alert-warning">
                        <?php echo session()->getFlashdata('warning');?>
                    </div>

                    <?php } ?>
                </div>

                <div class="container">
                    <a href="<?php echo base_url('create'); ?>" class="btn btn-success float-right mb-3">Tambah
                        Produk</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Penulis</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </thead>
                            <tbody>
                                <?php 
                    foreach($book as $key => $data) { ?>
                                <tr>
                                    <td><?php echo $key+1; ?></td>
                                    <td><?php echo $data['Judul']; ?></td>
                                    <td><?php echo $data['Deskripsi']; ?></td>
                                    <td><?php echo $data['Penulis']; ?></td>
                                    <td><?php echo $data['Jumlah']; ?></td>
                                    <td><?php echo $data['Harga']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('Fikri/edit/'.$data['id']); ?>"
                                                class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>Edit</a>
                                            <a href="<?php echo base_url('Fikri/delete/'.$data['id']); ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $data['Judul']; ?> ini?')"><i
                                                    class="fas fa-trash-alt"></i>Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>