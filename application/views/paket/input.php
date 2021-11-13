<?php 
    if ($btn == "EDIT") {
        $val = $val->row_array();
    }else{
        $val['id_paket'] = $no;
        $val['nama'] = "";
        $val['harga'] = "";
        $val['unit'] = "";
        $val['durasi'] = "";
    }
 ?>

<div class="block-header">
    <h2><?= $title ?></h2>
</div>

<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <?= form_open_multipart($url); ?> 
                    <label for="id_paket">ID paket</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="id_paket" id="id_paket" value="<?= $val['id_paket']; ?>" class="form-control" readonly>
                        </div>
                    </div>

                    <label for="nama">Nama Paket</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama" id="nama" value="<?= $val['nama']; ?>" class="form-control" placeholder="Enter your package name" required="" maxlength="50">
                        </div>
                    </div>

                    <label for="harga">Harga</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="harga" id="harga" value="<?= $val['harga']; ?>" class="form-control" placeholder="Enter your price" required="">
                        </div>
                    </div>

                    <label for="unit">Unit</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="unit" id="unit" class="form-control show-tick">
                                <option value="">--Pilih--</option>
                                <option value="Paket">Paket</option>
                                <option value="Satuan">Satuan</option>
                                <option value="Kiloan">Kiloan</option>
                                <option value="Set">Set</option>
                                <option value="Stel">Stel</option>
                                <option value="Meter">Meter</option>
                            </select>
                        </div>
                    </div>

                    <label for="durasi">Durasi</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="durasi" id="durasi" value="<?= $val['durasi']; ?>" class="form-control" placeholder="Enter Duration" required="" maxlength="50">
                        </div>
                    </div>

                    <input type="submit" value="<?= $btn; ?>" class="btn btn-primary m-t-15 waves-effect">
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- #END# Vertical Layout -->