<div id="page-content">


    <!-- tambah -->
    <div class="row d-flex justify-content-center">
    <div class="col-md-9">
        <div class="card" id="demo-default-tambah" role="dialog" tabindex="-1" aria-labelledby="demo-default-card">
            <div class="card-dialog">
                <div class="card-content">
                    <!--card Update-->
                    <div class="card-header">
                        <h4 class="card-title">Registrasi</h4>
                    </div>
                    <?= form_open_multipart('petugas_reg/tambah'); ?>
                    <!--card body-->
                    <div class="card-body">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nik" class="control-label">Nik</label>
                                        <input type="text" name="nik" id="nik" class="form-control" required>
                                        <span id="nik-error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama" class="control-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username" class="control-label">Username</label>
                                        <input type="text" name="username" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telepon" class="control-label">Telepon</label>
                                        <input type="text" name="telepon" id="telepon" class="form-control" required>
                                        <span id="telepon-error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="level" class="control-label">Level</label>
                                        <select name="level" class="form-control" required>
                                          
                                            <option value="2">Masyarakat</option>
                                         
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card footer-->
                    <div class="card-footer d-flex justify-content-center">
                        <button class="btn btn-primary col-md-7" type="submit">Registrasi</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
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
    document.getElementById("nik").addEventListener("input", function() {
        var nik = this.value;
        var nikError = document.getElementById("nik-error");

        if (nik.length !== 16) {
            nikError.textContent = "NIK harus memiliki 16 karakter.";
        } else {
            nikError.textContent = "";
        }
    });

    // Validasi Nomor Telepon
    document.getElementById("telepon").addEventListener("input", function() {
        var telepon = this.value;
        var teleponError = document.getElementById("telepon-error");

        if (telepon.length < 11 || telepon.length > 14) {
            teleponError.textContent = "Nomor telepon harus memiliki panjang antara 11 hingga 14 karakter.";
        } else {
            teleponError.textContent = "";
        }
    });
</script>