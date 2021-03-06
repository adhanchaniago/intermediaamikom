<html>
    <head>
        <title>Dashboard - Edit Jurusan</title>
        <link rel="icon" href="<?= base_url(); ?>assets/user/img/logo.png" type="image/x-icon"/>
        <?php
        $this->load->view('admin/header');
        ?>
    </head>
    <body>
        <div class="page">
            <div class="page-single">
                <!--<?php
                //$this->load->view('admin/nav');
                ?>-->
                <div class="container text-center">
                    <div class="row">
                        <div class="col col-login mx-auto">
                            <form class="card" action="<?= base_url(); ?>executive/JurusanController/prosesEdit/<?= $jurusan->idJurusan; ?>" method="post">
                                <div class="card-body p-6">
                                    <div class="card-title">
                                        Edit Data Jurusan
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-left">Nama Jurusan</label>
                                        <input class="form-control" placeholder="Masukkan nama lengkap" type="text" name="nama" value="<?= $jurusan->nama_jurusan; ?>" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-left">Keterangan</label>
                                        <textarea class="form-control" placeholder="Masukkan Username" type="text"  name="ket"><?= $jurusan->keterangan; ?></textarea>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="<?= base_url(); ?>executive/jurusan">
                        <i class="fe fe-arrow-left mr-2"></i>Kembali
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>