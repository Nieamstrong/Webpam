<div class="row d-flex justify-content-center">
    <div class="col-8 ">
        <?= form_open_multipart('ma_pengaduan/tambah'); ?>
        <!--Modal body-->
        <div class="card">

            <div class="card-body">

                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h5 class="text-primary-gradient fw-medium" style="margin-top: 5%">Pengaduan Aspirasi Masyarakat</h5>
                            <h1 class="mb-5">Form Pengaduan</h1>
                        </div>

                        <input type="hidden" name="status" value="Di Kirim">

                        <div class="col-md-10" style="margin-top: 2%">
                            <label for="" class="control-label">Isi Laporan</label>
                            <textarea type="text" name="keterangan" rows="5" placeholder="Keterangan" class="form-control"></textarea>
                        </div>
                        <div class="col-md-5" style="margin-top: 2%">
                            <label for="" class="control-label">Foto bukti</label>
                            <input type="file" name="gambar" placeholder="Logo Sekolah" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
                        </div>
                        <div class="col-md-5" style="margin-top: 2%">
                            <label for="" class="control-label">Preview Foto Profile</label>
                            <img id="preview" width="150px" />
                        </div>
                        
                    </div>


                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              
                <button class="btn btn-dark col-md-9 p-2 fs-5 fw-bold" type="submit">Simpan</button>
            </div>

        </div>

        <!--Modal footer-->

        <?= form_close(); ?>
    </div>
</div>


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