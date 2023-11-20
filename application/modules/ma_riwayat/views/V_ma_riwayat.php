<div class="row">
    <div class="col-md-12">
        <div class="card card-dark shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-center">
                <h6 class="m-0 fw-bold fs-3 text-dark">Riwayat Laporan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th scope="row">NIK</th>
                                <th scope="row">Tanggal Pengaduan</th>
                                <th width="300px" scope="row">Isi Laporan</th>
                                <th scope="row">Bukti</th>
                                <th scope="row">Status</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="text-center">
                                <th>NIK</th>
                                <th>Tanggal Pengaduan</th>
                                <th width="300px">Isi Laporan</th>
                                <th>Bukti</th>
                                <th>Status</th>

                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($riwayat as $res) {
                                $id = $res->id_pengaduan;
                            ?>

                                <tr class="text-center">
                                    <td><?= $res->nik; ?></td>
                                    <td><?= $res->tgl_pengaduan; ?></td>
                                    <td><?= $res->isi_laporan; ?></td>
                                    <td><img class="widget-bg img-responsive" src="<?php echo base_url() ?>assets/img/<?php echo $res->foto ?>" alt="Image" width="200px"></td>
                                    <td><?= $res->status; ?></td>

                                    <td>

                                        <button style="float: right;" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#demo-default-edit<?= $res->id_pengaduan; ?>">
                                            <i class="fas fa-fw fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                </div>
            </div>
        </div>
        <!-- modal hapus -->
        <div class="modal fade" id="demo-default-hapus<?= $res->id_user; ?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!--Modal Update-->
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
                        <a class="btn btn-danger" href="<?php echo base_url('admin_beranda/hapuspetugas/' . $res->id_user) ?>">Hapus Petugas</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- edit petugas -->
        <div class="modal fade" id="demo-default-edit<?= $res->id_pengaduan; ?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!--Modal Update-->
                    <div class="modal-header d-flex justiify-content-center">
                        <h4 class="modal-title">Edit</h4>
                    </div>

                    <?= form_open_multipart('ma_riwayat/edit'); ?>
                    <!--Modal body-->
                    <div class="modal-body">

                        <div class="panel-body">

                            <div class="row">
                                <input type="hidden" name="id_user" value="<?= $res->id_user; ?>">
                                <input type="hidden" name="id_pengaduan" value="<?= $res->id_pengaduan; ?>">
                                <input type="hidden" name="foto" value="<?= $res->foto ?>">
                                <div class="col-md-12">
                                    <label for="" class="control-label">Isi laporan</label>
                                    <textarea type="text" name="isi_laporan" class="form-control"><?= $res->isi_laporan; ?></textarea>
                                </div>
                                <div class="col-md-5" style="margin-top: 2%">
                                    <label for="" class="control-label">Foto bukti</label>
                                    <input type="file" name="gambar" placeholder="Logo Sekolah" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
                                </div>
                                <div class="col-md-5" style="margin-top: 2%">
                                    <label for="" class="control-label">Preview Foto Bukti</label>
                                    <img src="<?php echo base_url() ?>assets/img/<?php echo $res->foto ?>" width="150px" />
                                </div>
                            </div>

                        </div>


                    </div>

                    <!--Modal footer-->
                    <div class="modal-footer d-flex justify-content-center ">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-primary fw-reguler text-white" type="submit">Simpan</button>
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