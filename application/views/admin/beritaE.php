<html>
    <head>
        <title>Dashboard - Edit Berita</title>
        <link rel="icon" href="<?= base_url(); ?>assets/user/img/logo.png" type="image/x-icon"/>
        <?php
        $this->load->view('admin/header');
        ?>
    </head>
    <body>
        <div class="page">
            <div class="page-single">
                <!--<?php
                //$this->load->view('Admin/nav');
                ?>-->
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <form class="card" action="<?= base_url(); ?>executive/PencapaianController/prosesEdit/<?= $berita->idBerita; ?>" method="post">
                                <div class="card-body p-6">
                                    <div class="card-title">
                                        Input Data Berita
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-left">Judul Berita</label>
                                        <input class="form-control" placeholder="Masukkan Judul Berita" type="text" name="juara" value="<?= $berita->judul; ?>" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-left">Isi Berita</label>
                                        <textarea class="form-control" placeholder="Masukkan isi berita" type="text"  name="ket"><?= $berita->isi; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Foto</label>
                                        <input type="file" name="foto" class="form-control" accept="image/*" value="<?= $berita->gambar?>">
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="<?= base_url(); ?>executive/berita">
                        <i class="fe fe-arrow-left mr-2"></i>Kembali
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>