<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card"> <button type="button" class="btn btn-outline-primary ml-2"> <a href="index.php?page=bi-input">Input Data</a> </button>
                <div class="card">
                    <div class="card-header">
                        <p class="card-title text-center"><strong>BUKU INVENTARIS BARANG</strong></p>
                    </div>
                    <div class="card-body" style="font-size:8pt;">
                        <div class="row">
                            <table class="ml-4 mb-4" width="80%">
                                <tr>
                                    <td width="13%">PROVINSI</td>
                                    <td width="2%"> : </td>
                                    <td>JAWA BARAT</td>
                                </tr>
                                <tr>
                                    <td>KABUPATEN / KOTA </td>
                                    <td> : </td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>BIDANG</td>
                                    <td> : </td>
                                    <td> BIDANG KIMPRASWIL/KE-PU-AN</td>
                                </tr>
                                <tr>
                                    <td>ASISTEM / OPD </td>
                                    <td> : </td>
                                    <td> Dinas Perumahan dan Pemukiman</td>
                                </tr>
                                <tr>
                                    <td>BIRO / UPTD / B </td>
                                    <td> : </td>
                                    <td> Sekretariat Dinas</td>
                                </tr>
                            </table>
                        </div>
                        <div class="table table-responsive">
                            <table id="table_id" class="display">
                                <thead class="text-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>No Kode Barang</th>
                                        <th>No Register</th>
                                        <th>Nama Barang</th>
                                        <th>Merk/Type</th>
                                        <th>No. Sertifikat / No. Pabrik / No. Chasis / No. Mesin / No. Polisi</th>
                                        <th>Bahan</th>
                                        <th>Asal Usul Cara Perolehan</th>
                                        <th>Tahun Perolehan</th>
                                        <th>Ukuran Barang / Konstruksi (P,SP,D)</th>
                                        <th>Keadaan Barang (B,KB,RB)</th>
                                        <th>Jumlah Barang</th>
                                        <th>Jumlah Harga</th>
                                        <th>Keterangan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "connect.php";

                                    $result = mysqli_query($connect, "SELECT * from BI");

                                    $i = 1;
                                    while ($data = mysqli_fetch_array($result)) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i; ?></td>
                                            <td class="text-center"><?php echo $data['NOMOR_KODE_BARANG']; ?></td>
                                            <td class="text-center"><?php echo $data['NOMOR_REGISTER']; ?></td>
                                            <td class="text-center"><?php echo $data['NAMA_BARANG']; ?></td>
                                            <td class="text-center"><?php echo $data['MERK_TIPE']; ?></td>
                                            <td class="text-center"><?php echo $data['NO_SERTIFIKAT']; ?></td>
                                            <td class="text-center"><?php echo $data['BAHAN']; ?></td>
                                            <td class="text-center"><?php echo $data['ASAL']; ?></td>
                                            <td class="text-center"><?php echo $data['TAHUN_PEROLEHAN']; ?></td>
                                            <td class="text-center"><?php echo $data['UKURAN_BARANG']; ?></td>
                                            <td class="text-center"><?php echo $data['KEADAAN_BARANG']; ?></td>
                                            <td class="text-center"><?php echo $data['JUMLAH_BARANG']; ?></td>
                                            <td class="text-center"><?php echo $data['JUMLAH_HARGA']; ?></td>
                                            <td class="text-center"><?php echo $data['KETERANGAN']; ?></td>
                                            <td>
                                                <button type="button" class="btn-xs btn-outline-primary ml-2 mb-2"><a href="index.php?page=bi-edit&id=<?php echo $data['NOMOR_KODE_BARANG']; ?>" title="Edit" style="text-decoration:none;">Edit</a></button>
                                                <button type="button" class="btn-xs btn-outline-danger ml-2"> <a href="link/crud.php?process=delete_bi&id=<?php echo $data['NOMOR_KODE_BARANG']; ?>">Delete</a> </button>
                                            </td>
                                        </tr>

                                        <?php $i++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>