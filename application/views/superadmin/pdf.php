<!-- Kodingan setelah pdf tercetak  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Employee</title>
   <link rel="icon" href="assets/favicon.svg" type="image/x-icon"/>
</head>
<body>
  
  <?php $no = 1;
     foreach ($invoice as $d) :
 ?>
<!-- perhitungan untuk Jamsostek & Alpha  -->
 <?php


    // Pendapatan Jamsostek
    $jht   = $d->gaji_pokok * 2 / 100;

    // Pendapatan Jamsostek
    $jk   = $d->gaji_pokok * 1 / 100;

    // Potongan Alpha
    $alfa                   = $d->gaji_pokok / 26 * $d->alpha;





?>
<table class="table table-bordered mb-0">
    <tr>
        <td style="padding-top: 30px;padding-left: 12px;"><b>A. TRANSACTION DATA</b><hr></td>
    </tr>
    <br>
    <tr>
        <td style="padding-left: 10px;">No. Transaction</td>
        <td style="padding-left: 2px;">:</td>
        <td>&nbsp; <?php echo $d->id_transaksi ?></td>
    </tr>
    <tr>
        <td style="padding-left: 10px;">Transaction date</td>
        <td style="padding-left: 2px;">:</td>
        <td>&nbsp; <?php echo date('d F Y', strtotime($d->tgl_transaksi)); ?></td>
    </tr>
    <tr>
        <td style="padding-left: 10px;">Employee name</td>
        <td style="padding-left: 2px;">:</td>
        <td>&nbsp; <?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?> (<?php echo $d->nip ?>)</td>
    </tr>
    <tr>
        <td style="padding-left: 10px;">Job position</td>
        <td style="padding-left: 2px;">:</td>
        <td>&nbsp; <?php echo $d->nama_jabatan ?> - <?php echo $d->nama_divisi ?></td>
    </tr>
    <tr>
        <td style="padding-left: 10px;">Transaction status</td>
        <td style="padding-left: 2px;">:</td>
        <td>&nbsp; <font color="green">Successful Transaction</font></td>
    </tr>
</table>

<table class="table table-bordered mb-0">
    <tr>
        <td style="padding-top: 30px;padding-left: 12px;"><b>B. INCOME DATA</b><hr></td>
    </tr>

</table>


<table border="1" cellspacing="0" cellpadding="3" width="80%">
    <thead>
      <tr>
        <th width="200">Description</th>
        <th>Subtotal</th>
    </tr>
</thead>
<tbody>
    <tbody>

     <tr>
      <td>Basic Salary</td>
      <td>Rp. <?php echo number_format($d->gaji_pokok, 0, ',', '.') ?></td>
  </tr>

  <tr>
      <td>Allowance</td>
      <td>Rp. <?php echo number_format($d->tunjangan, 0, ',', '.') ?></td>
  </tr>

  <tr>
      <td><strong>TOTAL</strong></td>
      <td><strong>Rp. <?php echo number_format($d->gaji_pokok + $d->tunjangan) ?></strong></td>
  </tr>

</tbody>
</table>

<table class="table table-bordered mb-0">
    <tr>
        <td style="padding-top: 30px;padding-left: 12px;"><b>C. INCOME DEDUCTION</b><hr></td>
    </tr>

</table>


<table border="1" cellspacing="0" cellpadding="3" width="80%">
    <thead>
      <tr>
        <th width="200">Description</th>
        <th>Subtotal</th>
    </tr>
</thead>
<tbody>
    <tbody>

     <tr>
      <td>BPJS Kesehatan</td>
      <td>Rp. <?php echo number_format($jk, 0, ',', '.') ?></td>
  </tr>

  <tr>
      <td>BPJS Ketenagakerjaan</td>
      <td>Rp. <?php echo number_format($jht, 0, ',', '.') ?></td>
  </tr>

  <tr>
    <td><strong>TOTAL</strong></td>
    <td><strong>Rp. <?php echo number_format($jk + $jht) ?></strong></td>
</tr>

<tr bgcolor="orange">
  <td><strong>NETT SALARY</strong></td>
  <td><strong>Rp. <?php echo number_format($d->gaji_pokok + $d->tunjangan - $jk - $jht) ?></strong></td>
</tr>

</tbody>
</table>


<br>

<div class="col-lg-6">
    <h5 class="mt-4">Terms And Condition :</h5>
    <ul class="ps-3">
        <li><small class="font-12">Semua pembayaran akan dibayarkan melalui perbankan. </small></li>
        <li><small class="font-12">Silahkan lakukan pengecekan pada tanggal yang sudah tertera.</small ></li>
        <li><small class="font-12">Semua perhitungan potongan sudah terhitung secara otomatis.</small ></li>                                            
    </ul>
</div> <!--end col-->
<br>
<div class="col-lg-6 align-self-center">
    <div class="float-none float-md-end" style="width: 30%;">
        <small>Account Manager</small>
        <br>
        <img src="assets/sig.svg" alt="" class="mt-2 mb-1" height="85">
        <p class="border-top">Human Resources Departement</p>
    </div>
</div>
<?php endforeach;?>
</body>
</html>
