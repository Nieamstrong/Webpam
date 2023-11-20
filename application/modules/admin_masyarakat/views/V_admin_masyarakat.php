<div id="page-content">

    <div class="form-group" style="padding-bottom: 2%">

        <div class="col-md-2" style="float: right;">


        </div>

    </div>


    <div class="col-lg-12" style="margin-top: 2%">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table table-striped table-bordered table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Telepon</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Telepon</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($masyarakat as $res) {
                                $id = $res->id_user;
                            ?>

                                <tr>
                                    <td><?= $res->nik; ?></td>
                                    <td><?= $res->nama; ?></td>
                                    <td><?= $res->username; ?></td>
                                    <td><?= $res->password; ?></td>
                                    <td><?= $res->telepon; ?></td>
                                    <td>
                                        <?php if ($res->level == '1') { ?>

                                            Admin

                                        <?php } elseif ($res->level == '2') { ?>

                                            Masyarakat

                                        <?php } else { ?>

                                            Petugas

                                        <?php } ?>



                                    </td>
                                    <td>
                                        <button style="float: right;" class="btn btn-danger mx-2 btn-sm" data-toggle="modal" data-target="#demo-default-hapus<?= $res->id_user; ?>">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </button>
                                        <button style="float: right;" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#demo-default-edit<?= $res->id_user; ?>">
                                            <i class="fas fa-fw fa-edit"></i>
                                        </button>


                                    </td>
                                </tr>


                                <!-- modal hapus -->
                                <div class="modal fade" id="demo-default-hapus<?= $res->id_user; ?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">


                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                                <h4 class="modal-title">Hapus</h4>
                                            </div>

                                            <!--Modal body-->
                                            <div class="modal-body">

                                                <div class="panel-body">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p>Apakah anda yakin ingin menghapus <b><?= $res->nama; ?></b>?</p>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                            <!--Modal footer-->
                                            <div class="modal-footer">
                                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                <a class="btn btn-danger" href="<?php echo base_url('admin_masyarakat/hapusmasyarakat/' . $res->id_user) ?>">Hapus Masyarakat</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- edit petugas -->
                                <div class="modal fade" id="demo-default-edit<?= $res->id_user; ?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!--Modal Update-->
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                                <h4 class="modal-title">Edit</h4>
                                            </div>

                                            <?= form_open_multipart('admin_masyarakat/editmasyarakat'); ?>
                                            <!--Modal body-->
                                            <div class="modal-body">

                                                <div class="panel-body">

                                                    <div class="row">
                                                        <input type="hidden" name="id_user" value="<?= $res->id_user; ?>">
                                                        <div class="col-md-6">
                                                            <label for="" class="control-label">Nik</label>
                                                            <input type="text" name="nik" value="<?= $res->nik; ?>" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="" class="control-label">Nama</label>
                                                            <input type="text" name="nama" value="<?= $res->nama; ?>" class="form-control">
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 2%">
                                                            <label for="" class="control-label">Username</label>
                                                            <input type="text" name="username" value="<?= $res->username; ?>" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 " style="margin-top: 2%">
                                                            <label for="" class="control-label">Password</label>
                                                            <input type="text" name="password" value="<?= $res->password; ?>" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 " style="margin-top: 2%">
                                                            <label for="" class="control-label">Telepon</label>
                                                            <input type="text" name="telepon" value="<?= $res->telepon; ?>" class="form-control">
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 2% ">
                                                            <label for="" class="control-label text-muted mar-no">Level</label>
                                                            <select name="level" required="" class="form-control" required>

                                                                <option <?php echo ($res->level == '1') ? "selected" : "" ?> value="1">Admin</option>
                                                                <option <?php echo ($res->level == '2') ? "selected" : "" ?> value="2">Masyarakat</option>
                                                                <option <?php echo ($res->level == '3') ? "selected" : "" ?> value="3">Petugas</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                            <!--Modal footer-->
                                            <div class="modal-footer">
                                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                            </div>
                                            <?= form_close(); ?>

                                        </div>
                                    </div>
                                </div>
                                <!-- end tambah -->

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>




    <!-- tambah -->
    <div class="modal fade mt-5" id="demo-default-tambah" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal Update-->


                <?= form_open_multipart('admin_masyarakat/tambahmasyarakat'); ?>
                <!--Modal body-->
                <div class="modal-body text-dark">

                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-6">
                                <label for="" class="control-label">Nik</label>
                                <input type="text" name="nik" class="form-control border border-primary" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control border border-primary" required>
                            </div>
                            <div class="col-md-6" style="margin-top: 2%">
                                <label for="" class="control-label">Username</label>
                                <input type="text" name="username" class="form-control border border-primary" required>
                            </div>
                            <div class="col-md-6 " style="margin-top: 2%">
                                <label for="" class="control-label">Password</label>
                                <input type="password" name="password" class="form-control border border-primary" required>
                            </div>
                            <div class="col-md-6 " style="margin-top: 2%">
                                <label for="" class="control-label">Telepon</label>
                                <input type="number" name="telepon" class="form-control border border-primary" required>
                            </div>
                            <div class="col-md-6" style="margin-top: 2% ">
                                <label for="" class="control-label text-muted mar-no">Level</label>
                                <select name="level" required="" class="form-control border border-primary" required>
                                    <option value="1">Petugas
                                    </option>
                                    <option value="2">Masyarakat
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>


                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
                <?= form_close(); ?>

            </div>
        </div>
    </div>
    <!-- end tambah -->

</div>
<!--jQuery [ REQUIRED ]-->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script>
    $(document).ready(function() {


        $('#demo-dp-txtinputmasukkerja input').datepicker({
            format: "yyyy-m-d",
            todayBtn: "linked",
            todayHighlight: true
        });

        $('#demo-dp-txtinputakhirkerja input').datepicker({
            format: "yyyy-m-d",
            todayBtn: "linked",
            todayHighlight: true
        });



    });
</script>


<script type="text/javascript">
    function tampilkanPreview(userfile, idpreview) {
        var gb = userfile.files;
        for (var i = 0; i < gb.length; i++) {
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview = document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType)) {
                //jika tipe data sesuai
                preview.file = gbPreview;
                reader.onload = (function(element) {
                    return function(e) {
                        element.src = e.target.result;
                    };
                })(preview);
                //membaca data URL gambar
                reader.readAsDataURL(gbPreview);
            } else {
                //jika tipe data tidak sesuai
                alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
            }
        }
    }

    function tampilkanPreview1(userfile, idpreview1) {
        var gb = userfile.files;
        for (var i = 0; i < gb.length; i++) {
            var gbPreview1 = gb[i];
            var imageType = /image.*/;
            var preview1 = document.getElementById(idpreview1);
            var reader = new FileReader();
            if (gbPreview1.type.match(imageType)) {
                //jika tipe data sesuai
                preview1.file = gbPreview1;
                reader.onload = (function(element) {
                    return function(e) {
                        element.src = e.target.result;
                    };
                })(preview1);
                //membaca data URL gambar
                reader.readAsDataURL(gbPreview1);
            } else {
                //jika tipe data tidak sesuai
                alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
            }
        }
    }
</script>