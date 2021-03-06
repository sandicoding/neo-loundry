<div class="block-header">
    <h2>
        DATA kasir
    </h2>
</div>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <a href="<?= site_url('kasir/p/input'); ?>" class="btn btn-primary waves-effect">TAMBAH</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID kasir</th>
                                <th>Nama</th>
                                <th>Password</th>
                                <th>Level</th>
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
                                <td><?= $data->id_kasir; ?></td>
                                <td><?= $data->nama; ?></td>
                                <td><?= $data->password; ?></td>
                                <td><?= $data->level; ?></td>
                                <td width="130">
                                    <a href="<?= site_url('kasir/p/input') ?>/<?= $data->id_kasir ?>" class="btn btn-warning waves-effect">EDIT</a>
                                    <a href="<?= site_url('kasir/hapus') ?>/<?= $data->id_kasir ?>" class="btn btn-danger waves-effect" onclick="return confirm('Anda yakin ingin menghapus data!!')">HAPUS</a>
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
