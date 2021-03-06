<div class="panel-header panel-header-lg">
    <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p class="card-title text-center"><strong>Update Daftar Kartu Pemeliharaan</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <form method="post" action="link/crud.php?process=update_kartu_pemeliharaan" enctype="multipart/form-data">
                                <div class="form-row">
                                    <?php
                                    include "connect.php";

                                    $result = mysqli_query($connect, "SELECT * FROM KARTU_PEMELIHARAAN WHERE ID_KARTU='$_GET[ID_KARTU]'");
                                    if ($row = mysqli_fetch_assoc($result)) { } else { }
                                    ?>
                                    <input type="hidden" name="ID_KARTU" value="<?php echo "$row[ID_KARTU]"; ?>">
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">KODE_BARANG :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="KODE_BARANG" <?php echo "value='$row[KODE_BARANG]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">NO_REGISTER :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="NO_REGISTER" <?php echo "value='$row[NO_REGISTER]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">NAMA_BARANG :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="NAMA_BARANG" <?php echo "value='$row[NAMA_BARANG]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">JENIS_PEMELIHARAAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="JENIS_PEMELIHARAAN" <?php echo "value='$row[JENIS_PEMELIHARAAN]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">YANG_MEMELIHARA :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="YANG_MEMELIHARA" <?php echo "value='$row[YANG_MEMELIHARA]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">TANGGAL_PEMELIHARAAN :</label> <input type="date" class="form-control" id="formGroupExampleInput" name="TANGGAL_PEMELIHARAAN" <?php echo "value='$row[TANGGAL_PEMELIHARAAN]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">BIAYA_PEMELIHARAAN :</label> <input type="number" class="form-control" id="formGroupExampleInput" name="BIAYA_PEMELIHARAAN" <?php echo "value='$row[BIAYA_PEMELIHARAAN]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">BUKTI_PEMELIHARAAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="BUKTI_PEMELIHARAAN" <?php echo "value='$row[BUKTI_PEMELIHARAAN]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">NOMOR_SPK :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="NOMOR_SPK" <?php echo "value='$row[NOMOR_SPK]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">TANGGAL_SPK :</label> <input type="date" class="form-control" id="formGroupExampleInput" name="TANGGAL_SPK" <?php echo "value='$row[TANGGAL_SPK]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">NOMOR_BAST :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="NOMOR_BAST" <?php echo "value='$row[NOMOR_BAST]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">TANGGAL_BAST :</label> <input type="date" class="form-control" id="formGroupExampleInput" name="TANGGAL_BAST" <?php echo "value='$row[TANGGAL_BAST]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">FOTO_ASET :</label>
                                        <div class="form-group">
                                            <div class="custom-file" style="height:20px;">
                                                <input type="file" accept=".jpg" class="custom-file-input" id="customFile1" name="FOTO_ASET">
                                                <label class="custom-file-label" id="label1" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">FILE_ASET :</label>
                                        <div class="form-group">
                                            <div class="custom-file" style="height:20px;">
                                                <input type="file" accept=".pdf" class="custom-file-input" id="customFile2" name="FILE_ASET">
                                                <label class="custom-file-label" id="label2" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 align-middle">
                                        <button type="submit" name="insert_bmd" class="btn btn-primary">Simpan</button>
                                        <button value="kembali" class="btn btn-secondary"><a href="index.php?page=kartu-pemeliharaan">Back</a></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Add the following code if you want the name of the file appear on select
    $("#customFile1").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings("#label1").addClass("selected").html(fileName);
    });
    $("#customFile2").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings("#label2").addClass("selected").html(fileName);
    });
</script>