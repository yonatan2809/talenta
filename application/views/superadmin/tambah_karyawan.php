<div class="main-panel">
	<div class="content">
		<div class="page-inner">

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Add employee</div>
						</div>
						<div class="card-body">
							<div class="flex-1 pt-1 ml-2 mb-3">
								<h5 class="fw-bold mb-1">Personal data</h5>
								<small class="text-muted">Fill all employee personal basic information data </small>
							</div>
							<form action="<?php echo base_url('superadmin/karyawan/proses') ?>" method="post">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">First name<span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="email2" name="nama_depan" required autocomplete="off">

									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="email2">Last name<span class="text-danger">*</span></label>
										<input type="text" name="nama_belakang" required autocomplete="off" class="form-control" id="email2">

									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">Email<span class="text-danger">*</span></label>
										<input type="email" name="email" required autocomplete="off" class="form-control" id="email2">

									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="email2">Mobile phone</label>
										<input type="text" name="no_hp" required autocomplete="off" class="form-control" id="email2" placeholder="0">

									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">Place of birth</label>
										<input type="text" name="tempat_lahir" required autocomplete="off" class="form-control" id="email2">

									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="email2">Birthdate<span class="text-danger">*</span></label>
										<div class="input-group mb-3">
											<input type="date" name="tgl_lahir" required autocomplete="off" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2"><i class="flaticon-calendar"></i></span>
											</div>
										</div>

									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-check">
										<label>Gender</label><br/>
										<label class="form-radio-label">
											<input class="form-radio-input" type="radio" name="gender" value="Male"  checked="">
											<span class="form-radio-sign">Male</span>
										</label>
										<label class="form-radio-label ml-3">
											<input class="form-radio-input" type="radio" name="gender" value="Female">
											<span class="form-radio-sign">Female</span>
										</label>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="exampleFormControlSelect1">Marital status<span class="text-danger">*</span></label>
										<select name="status_nikah" class="form-control" id="exampleFormControlSelect1">
											<option selected hidden disabled>Choose...</option>
											<option value="Single">Single</option>
											<option value="Married">Married</option>
											<option value="Widow">Widow</option>
											<option value="Widower">Widower</option>
										</select>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Blood type</label>
										<select name="gol_darah" class="form-control" id="exampleFormControlSelect1">
											<option selected hidden disabled>Choose...</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="AB">AB</option>
											<option value="O">O</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="exampleFormControlSelect1">Religion<span class="text-danger">*</span></label>
										<select name="agama" class="form-control" id="exampleFormControlSelect1">
											<option selected hidden disabled>Choose...</option>
											<option value="Catholic">Catholic</option>
											<option value="Islam">Islam</option>
											<option value="Christian">Christian</option>
											<option value="Buddha">Buddha</option>
											<option value="Hindu">Hindu</option>
											<option value="Buddha">Buddha</option>
											<option value="Confucius">Confucius</option>
											<option value="Others">Others</option>
										</select>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Identity type</label>
										<select name="jenis_identitas" class="form-control" id="exampleFormControlSelect1">
											<option selected hidden disabled>Choose...</option>
											<option value="KTP">KTP</option>
											<option value="SIM">SIM</option>
											<option value="Passport">Passport</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="exampleFormControlSelect1">Identity number</label>
										<input type="text" name="no_identitas" required autocomplete="off" class="form-control" id="email2" placeholder="0">
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-12">
									<div class="form-group">
										<label for="comment">Address</label>
										<textarea class="form-control" name="alamat" required autocomplete="off" id="comment">

										</textarea>
									</div>
								</div>
							</div>
							<br>
							<hr>
							<br>

							<div class="flex-1 pt-1 ml-2 mb-3">
								<h5 class="fw-bold mb-1">Employment data</h5>
								<small class="text-muted">Fill all employee data information related to company  </small>
							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">Employee ID<span class="text-danger">*</span></label>
										<input type="text" name="nip" required autocomplete="off" class="form-control" id="email2" value="171<?= mt_rand(171, 9999) ?>2022" maxlength="10" readonly>

									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="exampleFormControlSelect1">Employment status</label>
										<select name="status_karyawan" class="form-control" id="exampleFormControlSelect1">
											<option selected hidden disabled>Choose...</option>
											<option value="Permanent">Permanent</option>
											<option value="Probation">Probation</option>
										</select>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">Join date<span class="text-danger">*</span></label>
										<div class="input-group mb-3">
											<input type="date" name="tgl_gabung" required autocomplete="off" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2"><i class="flaticon-calendar"></i></span>
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="exampleFormControlSelect1">End status date<span class="text-danger">*</span></label>
										<div class="input-group mb-3">
											<input type="date" name="tgl_selesai" required autocomplete="off" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
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
										<label for="email2">Work place</label>
										<select name="cabang" class="form-control" id="exampleFormControlSelect1">
											<option selected hidden disabled>Choose...</option>
											<option value="Pusat">Pusat</option>
											<option value="Lapangan">Lapangan</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="exampleFormControlSelect1">Organization<span class="text-danger">*</span></label>
										<select name="id_divisi" class="form-control" id="exampleFormControlSelect1">
											<option selected hidden disabled>Choose...</option>
											<?php foreach ($divisi as $dv) : ?>
                                                <option value="<?php echo $dv->id_divisi ?>"><?php echo $dv->nama_divisi ?></option>
                                            <?php endforeach; ?>
										</select>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">Job position<span class="text-danger">*</span></label>
										<select name="id_jabatan" class="form-control" id="exampleFormControlSelect1">
											<option selected hidden disabled>Choose...</option>
											<?php foreach ($jabatan as $dv) : ?>
                                                <option value="<?php echo $dv->id_jabatan ?>"><?php echo $dv->nama_jabatan ?></option>
                                            <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="exampleFormControlSelect1">Schedule<span class="text-danger">*</span></label>
										<select name="id_shift" class="form-control" id="exampleFormControlSelect1">
											<option selected hidden disabled>Choose...</option>
											<?php foreach ($shift as $dv) : ?>
                                                <option value="<?php echo $dv->id_shift ?>"><?php echo $dv->jadwal ?></option>
                                            <?php endforeach; ?>
										</select>
									</div>
								</div>

							</div>

							<br>
							<hr>
							<br>

							<div class="flex-1 pt-1 ml-2 mb-3">
								<h5 class="fw-bold mb-1">Salary data</h5>
								<small class="text-muted">Input information salary data  </small>
							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">Basic salary<span class="text-danger">*</span></label>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">Rp</span>
											</div>
											<input type="text" name="gaji_pokok" required autocomplete="off" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
										</div>

									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="exampleFormControlSelect1">Allowance<span class="text-danger">*</span></label>
											<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">Rp</span>
											</div>
											<input type="text" name="tunjangan" required autocomplete="off" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
										</div>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-12">
									<div class="form-group">
										<label for="email2">Bank name</label>
										<input type="text" name="bank" required autocomplete="off"  class="form-control" id="email2">

									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">Account number</label>
										<input type="text" name="no_rek" required autocomplete="off" class="form-control" id="email2">

									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="email2">Account holder name</label>
										<input type="hidden" name="jenis_pembayaran" value="Monthly" required autocomplete="off" class="form-control" id="email2">
										<input type="text" name="nama_akun" required autocomplete="off" class="form-control" id="email2">

									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">NPWP</label>
										<input type="text" name="npwp" required autocomplete="off" class="form-control" id="email2" placeholder="00.000.000.0-000.000">

									</div>
								</div>
								<div class="col-md-6 col-lg-6">				
									<div class="form-group">
										<label for="email2">PTKP status<span class="text-danger">*</span></label>
										<select name="ptkp" class="form-control" id="exampleFormControlSelect1">
											<option selected hidden disabled>Choose...</option>
											<option value="TK/0">TK/0</option>
											<option value="TK/1">TK/1</option>
											<option value="TK/2">TK/2</option>
											<option value="TK/3">TK/3</option>
											<option value="K/0">K/0</option>
											<option value="K/1">K/1</option>
											<option value="K/2">K/2</option>
											<option value="K/3">K/3</option>
										</select>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">Tax method</label>
										<input type="text" name="metode_pajak" required autocomplete="off" class="form-control" id="email2" value="Netto" readonly>

									</div>
								</div>

								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">PPH21 paid&nbsp; <i class="fas fa-info-circle"></i></label>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">Rp</span>
											</div>
											<input type="text" name="pph21" required autocomplete="off" value="-" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly>
										</div>
									</div>
								</div>
								

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">BPJS ketenagakerjaan number</label>
										<input type="text" name="no_bpjs" required autocomplete="off" class="form-control" id="email2" placeholder="0">

									</div>
								</div>

								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">NPP BPJS ketenagakerjaan</label>
										<input type="text" name="npp_bpjs" required autocomplete="off" class="form-control" id="email2" value="LL078922" readonly>

									</div>
								</div>
								

							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">BPJS kesehatan cost</label>
										<input type="text" name="biaya_bpjs" required autocomplete="off" class="form-control" id="email2" value="By employee" readonly>

									</div>
								</div>

								<div class="col-md-6 col-lg-6">
									<div class="form-group">
										<label for="email2">JHT cost</label>
										<input type="text" name="biaya_jht" required autocomplete="off" class="form-control" id="email2" value="By employee" readonly>

									</div>
								</div>
							</div>
						</div>
						<div class="card-action">
							<button type="submit" class="btn btn-success">Submit</button>
							<button class="btn btn-danger">Cancel</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>