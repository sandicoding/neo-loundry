<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="head">
		<b>
		<p>Neo Laundry</p>
		<p>Jl. Golf No 22 RT01/08, Ciriung, Cibinong</p>
		<p>TELP 0859 2161 1617</p>
		<p>========================================</p>
	</div>
	<table>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td><?php echo date('d/m/Y'); ?></td>
		</tr>
		<tr>
			<td width="110px;">ID Transaksi</td>
			<td>:</td>
			<td><?= $val['id_transaksi']; ?></td>
		</tr>
		<tr>
			<td>Konsumen</td>
			<td>:</td>
			<td><?php echo $val['id_konsumen'] ?>(<?php echo $val['konsumen']; ?>)</td>
		</tr>
		
	</table>
	<p>---------------------------------------</p>
	<table>
		<tr>
			<td width="250px;">Nama Paket</td>
			<td style="float: right;"><?= $val['paket'] ?></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td style="float: right;"><?php echo $val['keterangan'] ?></td>
		</tr>
		<tr>
			<td width="250px;">Harga Satuan</td>
			<td style="float: right;"><?= number_format($val['harga'],0,",",",") ?></td>
		</tr>
		<tr>
			<td width="250px;">Qty</td>
			<td style="float: right;"><?= $val['jml_kilo'] ?></td>
		</tr>
	</table>
	<p>---------------------------------------</p>
	<table>
		<tr>
			<td width="300px">Total</td>
			<td><?= number_format($val['total'],0,",",","); ?></td>
		</tr>
	</b>
	</table>
</body>
</html>
<style type="text/css">
	html,body{
		font-family: Courier New;
		color: #474747;
		width: 380px;
		height: 380px;
	}
	.head{
		text-transform: uppercase;
		text-align: center;
		margin:0;
	}
	p{
		margin:0;
		padding: 0;
	}
</style>
<script type="text/javascript">
		window.load = window.print();
</script>