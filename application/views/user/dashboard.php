	<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<!-- Card -->
					
					<div class="row">
						<div class="col-md-5">
							<div class="card card-dark card-annoucement card-round">
								 <form method="POST" action="<?php echo base_url('user/dashboard/absence') ?>" enctype="multipart/form-data">
								<div class="card-body text-center">
									<div class="card-opening">Welcome <?php echo $this->session->userdata('nama') ?>,</div>
									<div class="card-desc">
										<?php if ($waktu != 'dilarang') { ?>
										Pada hari ini anda belum melakukan <b>CHECK <?= $waktu ?></b>. Silahkan lakukan CHECK <?= $waktu ?> terlebih dahulu!
									</div>
									<hr><button class="btn btn-danger text-black btn-block"><b>CHECK <?= $waktu ?></b></button></p>
                                         <input type="hidden" name="ket" id="ket" value="<?= $waktu ?>">
                                     <?php } else { ?>
                                     	<div class="card-desc">
										terimakasih anda telah melakukan absen <b>Masuk</b> dan <b>Pulang</b> pada hari ini!
										<?php }  ?>
									</div>
								</div>
							</form>
							</div>
							
						</div>

							
					
					</div>


				
					

				

				
				</div>
			</div>
			
		</div>