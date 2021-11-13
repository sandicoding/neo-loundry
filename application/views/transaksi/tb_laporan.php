<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
            	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
				<div class="head">
					<h2>Laporan Transaksi Neo Laundry</h2>
					<h3>Jl. Golf No 22 RT01/08, Ciriung, Cibinong</h3>
					<p style="font-weight: normal;text-transform: capitalize;">TELP 0859-2161-1617</p>
					<p style="font-weight: normal;">========================================================================================================</p>
				</div>
				<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Tgl Transaksi</th>
							<th>ID Transaksi</th>
							<th>Kasir</th>
							<th>Konsumen</th>
							<th>Paket</th>
							<th>Qty</th>
							<th>Keterangan</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$no= 1; 
						foreach ($val as $data) {
					 ?>
						<tr>
							<td><?= $no++; ?>.</td>
							<td><?= date("d/m/Y",strtotime($data->tgl_transaksi)); ?></td>
							<td><?= $data->id_transaksi; ?></td>
							<td><?= $data->kasir; ?></td>
							<td><?= $data->konsumen; ?></td>
							<td><?= $data->paket; ?></td>
							<td><?= $data->jml_kilo." "."Kg"; ?></td>
							<td><?= $data->keterangan; ?></td>
							<td>Rp <?= number_format($data->total,0,".","."); ?></td>
						</tr>
					<?php } ?>
						<tr>
							<td colspan="8" style="text-align: center;font-weight: bold;">Total seluruh transaksi</td>
							<td>Rp. <?= number_format($dt['t_transaksi'],0,".",".") ?></td>
						</tr>
					</tbody>
				</table>
				<div class="row clearfix">
					<div class="ttd">
						<p>Bogor, <?= date('d F Y'); ?></p>
						<p>Mengetahui</p>
						<p>Pimpinan</p>
						<br><br><br>
						<p style="font-weight: bold;">Neo Laundry</p>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.js') ?>"></script>
<!-- Bootstrap Core Css -->
<link href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
<style type="text/css">
	.head{
		text-align: center;
		text-transform: uppercase;
		font-weight: bold;
		margin:20px 0;
	}
	h2,h3,p{
		margin: 0;
		padding: 0;
	}
	.ttd{
		float: right;
		margin: 20px;
	}
</style>