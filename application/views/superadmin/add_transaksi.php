<div class="main-panel">
	<div class="content">
		<div class="page-inner">

			<div class="row">
				<?php $no = 1;
				foreach ($add as $d) :
					?>
					<div class="col-md-4">
						<div class="card card-info card-annoucement card-round">
							<div class="card-body text-center">
								<div class="card-opening">Payment for <?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?>,<hr></div>
								<div class="card-desc">
									Pada halaman ini anda sedang melakukan tahap transaksi gaji pada karyawan atas nama <?php echo $d->nama_depan ?> <?php echo $d->nama_belakang ?> !
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Form Transactions</div>
							</div>
							<div class="card-body">
								<div class="flex-1 pt-1 ml-2 mb-3">
									<h5 class="fw-bold mb-1">Transaction data</h5>
									<small class="text-muted">Fill all employee data information related to company  </small>
								</div>
								<form action="<?php echo base_url('superadmin/payroll/proses_transaksi') ?>" method="post">
									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="email2">Transaction code<span class="text-danger">*</span></label>
												<input type="hidden" name="user" value="<?php echo $this->session->userdata('nama') ?>">
												<input type="text" class="form-control" id="email2" name="id_transaksi" required autocomplete="off" value="TR-<?= mt_rand(0000000, 9999999) ?>" maxlength="10" readonly>

											</div>
										</div>
										<div class="col-md-6 col-lg-6">				
											<div class="form-group">
												<label for="email2">Employee ID<span class="text-danger">*</span></label>
												<input type="text" name="nip" required autocomplete="off" class="form-control" id="email2" value="<?php echo $d->nip ?>" readonly>

											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="email2">Job position<span class="text-danger">*</span></label>
												<input type="text" class="form-control" id="email2" name="nama_jabatan" required autocomplete="off" value="<?php echo $d->nama_jabatan ?>" readonly>

											</div>
										</div>
										<div class="col-md-6 col-lg-6">				
											<div class="form-group">
												<label for="email2">Organization<span class="text-danger">*</span></label>
												<input type="text" name="nama_divisi" required autocomplete="off" class="form-control" id="email2" value="<?php echo $d->nama_divisi ?>" readonly>

											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="email2">Transaction date</label>
												<div class="input-group mb-3">
													<input type="text" name="tgl_transaksi" required autocomplete="off" value="<?php echo date('Y-m-d');?>" readonly class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2"><i class="flaticon-calendar"></i></span>
													</div>
												</div>

											</div>
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="email2">Payroll date</label>
												<div class="input-group mb-3">
													<input type="date" name="tgl_gaji" required autocomplete="off" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2"><i class="flaticon-calendar"></i></span>
													</div>
												</div>

											</div>
										</div>

									</div>


									<div class="row">
										

										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="email2">Number of attendance</label>
												<input type="number" name="hadir" required autocomplete="off" class="form-control" id="email2" value="0" >

											</div>
										</div>

										<div class="col-md-6 col-lg-3">
											<div class="form-group">
												<label for="email2">Number of permits</label>
												<input type="number" name="izin" required autocomplete="off" class="form-control" id="email2" value="0">

											</div>
										</div>

										<div class="col-md-6 col-lg-3">
											<div class="form-group">
												<label for="email2">Number of alpha</label>
												<input type="number" name="alpha" required autocomplete="off" class="form-control" id="email2" value="0">

											</div>
										</div>


									</div>

								</div>
								<div class="card-action">
									<button type="submit" class="btn btn-success">Submit</button>
									<a href="<?php echo base_url('superadmin/karyawan')  ?>" class="btn btn-danger">Cancel</a>
								</div>
							</form>
						</div>
					</div>
				<?php endforeach;?> 
			</div>
		</div>
	</div>
</div>