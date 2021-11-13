<div class="block-header">
    <h2>
        DATA transaksi
    </h2>
</div>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <a href="<?= site_url('transaksi/p/input'); ?>" class="btn btn-primary waves-effect">TAMBAH</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Tanggal</th>
                                <th>ID Transaksi</th>
                                <th>Kasir</th>
                                <th>Konsumen</th>
                                <th>Paket</th>
                                <th>Keterangan</th>
                                <th>Qty</th>
                                <th>Total Bayar</th>
                                <th>Tanggal Ambil</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($val as $data) {
                             ?>
                            <tr>
                                <td width="10px"><?= $no++ ?></td>
                                <td><?= $data->tgl_transaksi; ?></td>
                                <td><?= $data->id_transaksi; ?></td>
                                <td><?= $data->kasir; ?></td>
                                <td><?= $data->konsumen; ?></td>
                                <td><?= $data->paket; ?></td>
                                <td><?= $data->keterangan; ?></td>
                                <td><?= $data->jml_kilo; ?></td>
                                <td><?= $data->total; ?></td>
                                <td><?= $data->tgl_ambil; ?></td>
                                <td>
                                    <a href="<?= site_url('transaksi/p/input') ?>/<?= $data->id_transaksi ?>" class="btn btn-warning waves-effect">EDIT</a>
                                    <a href="<?= site_url('transaksi/hapus') ?>/<?= $data->id_transaksi ?>" class="btn btn-danger waves-effect" onclick="return confirm('Anda yakin ingin menghapus data!!')">HAPUS</a>
									<a href="<?= site_url('transaksi/nota') ?>/<?= $data->id_transaksi ?>" class="btn btn-info waves-effect">CETAK</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Examples -->
