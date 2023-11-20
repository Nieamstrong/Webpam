<div class="row d-flex justify-content-center">

    <div class="col-md-4    ">
        <div class="card profile-card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-center bg-secondary-gradient">
                <h6 class="m-0 fw-bold fs-3 text-white">Profile Akun</h6>
            </div>
            <div class="card-body text-dark justify-content-center">

                <i class="fas fa-user d-flex justify-content-center" style="font-size: 100px;"></i>

                <h2 class=" text-center mt-1 fs-1"><?php echo $username->username; ?></h2>
                <h4 class=" btn  d-flex justify-content-center " style="margin-top: -20px;"> <?php if ($level->level == '1') { ?>

                        Admin

                    <?php } elseif ($level->level == '2') { ?>

                        Masyarakat

                    <?php } else { ?>

                        Petugas

                    <?php } ?></h4>

                <hr>
                <input type="text" disabled class="mb-1 col-md-12 rounded text-dark p-2 fw-medium" value="Password:  <?php echo $password->password; ?>"></input>
                <input type="text" disabled class="mb-1 col-md-12 rounded p-2 text-dark fw-medium mb-3" value="Telepon:  <?php echo $telepon->telepon; ?>"></input>

                <button class="btn bg-secondary-gradient col-md-12 text-light btn-block" data-toggle="modal" data-target="#demo-default-edit<?= $id->id_user; ?>">Edit Profile</button>
                <?php foreach ($profile as $res) {
                    $id = $res->id_user;
                ?>
            </div>

        </div>

    </div>
    <div class="modal fade" id="demo-default-edit<?= $res->id_user; ?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal Update-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Edit</h4>
                </div>

                <?= form_open_multipart('ma_profile/edit'); ?>
                <!--Modal body-->
                <div class="modal-body">

                    <div class="panel-body">

                        <div class="row">
                            <input type="hidden" name="id_user" value="<?= $res->id_user; ?>">
                            <div class=" col-md-6">
                                <label for="" class="control-label">Nik</label>
                                <input type="text" class="form-control" name="nik" value="<?= $res->nik; ?>" F>
                            </div>
                            <div class=" col-md-6">
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
                            <div class="col-md-12 " style="margin-top: 2%">
                                <label for="" class="control-label">Telepon</label>
                                <input type="number" name="telepon" value="<?= $res->telepon; ?>" class="form-control">

                            </div>


                            <select name="level" hidden required="" class="form-control" required>

                                <option <?php echo ($res->level == '1') ? "selected" : "" ?> value="1">Admin</option>
                                <option <?php echo ($res->level == '2') ? "selected" : "" ?> value="2">Masyarakat</option>
                                <option <?php echo ($res->level == '3') ? "selected" : "" ?> value="3">Petugas</option>

                            </select>

                        </div>

                    </div>


                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn bg-secondary-gradient text-light" type="submit">Simpan</button>
                </div>
                <?= form_close(); ?>

            </div>
        </div>
    </div>
<?php } ?>
</div>
<!-- modal hapus -->

<!-- end tambah -->







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