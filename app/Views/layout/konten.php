
        <!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Ekplorasi Keindahan
										Desa Dayu
									</h2>
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

		<!--travel-box start-->
		<section  class="travel-box">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="single-travel-boxes">
        					<div id="desc-tabs" class="desc-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active">
									 	<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									 		<i class="fa fa-tree"></i>
									 		Profil Desa Dayu
									 	</a>
									</li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">

									<div role="tabpanel" class="tab-pane active fade in" id="tours">
										<div class="tab-para">

											<div class="row">
												<?php if(!empty($profil)):
												foreach($profil as $c):	 
												?>
												<div class="col-sm">
													<?= $c['keterangan'] ?>
											</div><!--/.col-->
												<?php 
												endforeach;
												else: ?>
													<p>Belum Membuat Profil Desa</p>
												<?php
												endif;
												?>
											</div><!--/.row-->
										</div><!--/.tab-para-->
									</div><!--/.tabpannel-->
								</div><!--/.tab content-->
							</div><!--/.desc-tabs-->
        				</div><!--/.single-travel-box-->
        			</div><!--/.col-->
        		</div><!--/.row-->
        	</div><!--/.container-->

        </section><!--/.travel-box-->
		<!--travel-box end-->

        <!--service start-->
		<section id="service" class="service">
			<div class="container"> 

				<div class="service-counter text-center">

					<div class="col-md-4 col-sm-4 col-lg-6">
						<div class="text-center">
						<div class="single-service-box" style="justify-content: center;">
							<div class="service-img">
								<img src="<?= base_url('landing/images/service/s1.png')?>" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
									Tempat Wisata
									</a>
								</h2>
								<p>Desa dayu memiliki 4 tempat wisata yang wajib dikunjungi</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
						</div>
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4 col-lg-6">
						<div class="single-service-box" style="justify-content: center;">
							<div class="service-img">
								<img src="<?= base_url('landing/images/service/s2.png')?>" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
										Fasilitas
									</a>
								</h2>
								<p>Fasilitas yang diberikan kepada pengunjung juga dibilang cukup lengkap</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->
<!--galley start-->
<section id="gallery" class="gallery">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2>
							Destinasi Wisata
						</h2>
						<p>
							Nikmati Keindahan Wisata di Desa Dayu, Gondangrejo, Karanganyar  
						</p>
					</div><!--/.gallery-header-->
					<div class="gallery-box">
						<div class="gallery-content">
						  	<div class="filtr-container">
						  		<div class="row">
								<?php 
								foreach($fotos as $a):
									if($a['id_foto'] == 1){
									?>
						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="http://localhost/ci4-cms-client/public/cms/images/foto_wisata/<?= $a['nama_file']; ?>" alt="portfolio image"/>
											
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->
									<?php } 
									if($a['id_foto'] == 2) {
									    ?>
						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="http://localhost/ci4-cms-client/public/cms/images/foto_wisata/<?= $a['nama_file']; ?>"alt="portfolio image"/>
											
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->
									  <?php } 
									if($a['id_foto'] == 3) {
									    ?>
						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="http://localhost/ci4-cms-client/public/cms/images/foto_wisata/<?= $a['nama_file']; ?>"alt="portfolio image"/>
											
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->
									  <?php } 
									if($a['id_foto'] == 4) {
									    ?>
						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="http://localhost/ci4-cms-client/public/cms/images/foto_wisata/<?= $a['nama_file']; ?>"alt="portfolio image"/>
											
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->
									  <?php } 
									if($a['id_foto'] == 5) {
									    ?>
						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="http://localhost/ci4-cms-client/public/cms/images/foto_wisata/<?= $a['nama_file']; ?>"alt="portfolio image"/>
											
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->
									  <?php } 
									if($a['id_foto'] == 6) {
									    ?>
						  			<div class="col-md-8">
						  				<div class="filtr-item">
											<img src="http://localhost/ci4-cms-client/public/cms/images/foto_wisata/<?= $a['nama_file']; ?>"alt="portfolio image"/>
											
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->	
								<?php
									}
							endforeach; ?>
						  		</div><!-- /.row -->

						  	</div><!-- /.filtr-container-->
						</div><!-- /.gallery-content -->
					</div><!--/.galley-box-->
				</div><!--/.gallery-details-->
			</div><!--/.container-->

		</section><!--/.gallery-->
		<!--gallery end-->
		
		<!--discount-offer start-->
		<section class="discount-offer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="dicount-offer-content text-center">
							<h2>Tempat Wisata di Desa Dayu</h2>
							<div class="campaign-timer">
								<div class="col-md-4">
									<img src="<?= base_url('landing/images/gallary/pcp.jpg')?>">
									<span style="color: white; font-size: 24px;">Puncak Cemoro Pitu</span>
								</div>
								<div class="col-md-4">
									<img src="<?= base_url('landing/images/gallary/dayu2.jpg')?>">
									<span style="color: white; font-size: 24px;">Museum Purbakala</span>
								</div>
								<div class="col-md-4">
									<img src="<?= base_url('landing/images/gallary/se.jpg')?>">
									<span style="color: white; font-size: 24px;">Sumur Emas</span>
								</div>
								<div class="col-md-4">
									<img src="<?= base_url('landing/images/gallary/sa.jpg')?>">
									<span style="color: white; font-size: 24px;">Sumur Api</span>
								</div>
							</div><!--/.campaign-timer-->
							<div class="about-btn">
								<button  class="about-view discount-offer-btn">
									Explore
								</button>
							</div><!--/.about-btn-->


						</div><!-- /.dicount-offer-content-->
					</div><!-- /.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->
		</section><!-- /.discount-offer-->
		<!--discount-offer end-->

		<section class="maps">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<h2>Lokasi Tempat Wisata</h2>
						</div>
						<div class="row" style="margin-top: 6px;margin-bottom: 12px;">
							<button class="btn btn-info change-maps" style="margin-top: 6px;" value="dd">Desa Dayu</button>
							<button class="btn btn-info change-maps" style="margin-top: 6px;" value="pcp">Puncak Cemoro Pito</button>
							<button class="btn btn-info change-maps" style="margin-top: 6px;" value="mp">Museum Purbakala</button>
							<button class="btn btn-info change-maps" style="margin-top: 6px;" value="se">Sumur Emas</button>
							<button class="btn btn-info change-maps" style="margin-top: 6px;" value="sa">Sumur Api</button>
						</div>
						<div id="penjelasan" style="margin-bottom: 12px;"></div>
						<div id="mapContainer"></div>
					</div>
				</div>
			</div>
		</section>
		
		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
					  Fasilitas
					</h2>
					<p>
						Tentu dengan destinasi wisata pengunjung mendapatkan fasilitas dari pengelola  
					</p>
			  </div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">

					  <div class="col-md-3 col-sm-6">
							<div class="single-package-item">
								<div class="single-package-item-txt">
									<div class="text-center">
									<h3>Puncak Cemoro Pitu</h3>
									<?php 
									foreach($fasilitas as $a): 
										if($a['id_tempat'] == 1):
									?>
										<p><?= $a['fasilitas'] ?></p>
									<?php
										endif; 
									endforeach; 
									?>
										</div>
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
					  <div class="col-md-3 col-sm-6">
							<div class="single-package-item">
								<div class="single-package-item-txt">
									<div class="text-center">
									<h3>Museum Purbakala</h3>
									<?php 
									foreach($fasilitas as $a): 
										if($a['id_tempat'] == 2):
									?>
										<p><?= $a['fasilitas'] ?></p>
									<?php
										endif; 
									endforeach; 
									?>

										</div>
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						<div class="col-md-3 col-sm-6">
							<div class="single-package-item">
								<div class="single-package-item-txt">
									<div class="text-center">
									<h3>Sumur Emas</h3>
									<?php 
									foreach($fasilitas as $a): 
										if($a['id_tempat'] == 3):
									?>
										<p><?= $a['fasilitas'] ?></p>
									<?php
										endif; 
									endforeach; 
									?>

										</div>
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
					  <div class="col-md-3 col-sm-6">
							<div class="single-package-item">
								<div class="single-package-item-txt">
									<div class="text-center">
									<h3>Sumur Api</h3>
									<?php 
									foreach($fasilitas as $a): 
										if($a['id_tempat'] == 4):
									?>
										<p><?= $a['fasilitas'] ?></p>
									<?php
										endif; 
									endforeach; 
									?>

										</div>
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->


		<!--blog start-->
		<section id="spo" class="blog">
			<div class="container">
				<div class="blog-details">
						<div class="gallary-header text-center">
							<h2>
								Harga Tiket
							</h2>
							
						</div><!--/.gallery-header-->
						<div class="blog-content">
							<div class="row">
						<div class="col-md-3 col-sm-3">
						  <div class="text-center">
							  <h4>Puncak Cemoro Pitu</h4>
							  <div style="margin-top: 12px;">
									<table class="table table-bordered">
								  		<thead>
											<tr>
												<th>#</th>
												<th>Hari</th>
												<th>Harga</th>
											</tr>
										</thead>
										<tbody>
											
										<?php 
                                      $no = 1;
                                      $hari = "";
                                      foreach($harga as $a):
                                        switch($a['id_hari']):
                                            case 1:
                                                $hari = "Senin";
                                                break;
                                            case 2:
                                                $hari = "Selasa";
                                                break;
                                            case 3:
                                                $hari = "Rabu";
                                                break;
                                            case 4:
                                                $hari = "Kamis";
                                                break;
                                            case 5:
                                                $hari = "Jumat";
                                                break;
                                            case 6:
                                                $hari = "Sabtu";
                                                break;
                                            case 7:
                                                $hari = "Minggu";
                                                break;
                                            endswitch;
                                            // var_dump($a['id_tempat']);
                                        if($a['id_tempat'] == 1){?>
                                            <tr>
                                              <td><?= $no ?></td>
                                              <td><?= $hari; ?></td>
                                              <td>Rp. <?= $a['harga'] ?></td>  
                                            </tr>
                                      <?php
                                        }
                                      $no++;
                                        endforeach; ?>
										</tbody>
								  	</table>
								</div>
							</div>
						</div><!--/.col-->
						<div class="col-md-3 col-sm-3">
							<div class="text-center">
							<h4>Museum Purbakala</h4>
							  <div style="margin-top: 12px;">
									<table class="table table-bordered">
								  		<thead>
											<tr>
												<th>#</th>
												<th>Hari</th>
												<th>Harga</th>
											</tr>
										</thead>
										<tbody>
											
										<?php 
                                      $no = 1;
                                      $hari = "";
                                      foreach($harga as $a):
                                        switch($a['id_hari']):
                                            case 1:
                                                $hari = "Senin";
                                                break;
                                            case 2:
                                                $hari = "Selasa";
                                                break;
                                            case 3:
                                                $hari = "Rabu";
                                                break;
                                            case 4:
                                                $hari = "Kamis";
                                                break;
                                            case 5:
                                                $hari = "Jumat";
                                                break;
                                            case 6:
                                                $hari = "Sabtu";
                                                break;
                                            case 7:
                                                $hari = "Minggu";
                                                break;
                                            endswitch;
                                            // var_dump($a['id_tempat']);
                                        if($a['id_tempat'] == 2){?>
                                            <tr>
                                              <td><?= $no ?></td>
                                              <td><?= $hari; ?></td>
                                              <td>Rp. <?= $a['harga'] ?></td>  
                                            </tr>
                                      <?php
                                        }
                                      $no++;
                                        endforeach; ?>
										</tbody>
								  	</table>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
						  <div class="text-center">
							  <h4>Sumur Emas</h4>
							  <div style="margin-top: 12px;">
									<table class="table table-bordered">
								  		<thead>
											<tr>
												<th>#</th>
												<th>Hari</th>
												<th>Harga</th>
											</tr>
										</thead>
										<tbody>
											
										<?php 
                                      $no = 1;
                                      $hari = "";
                                      foreach($harga as $a):
                                        switch($a['id_hari']):
                                            case 1:
                                                $hari = "Senin";
                                                break;
                                            case 2:
                                                $hari = "Selasa";
                                                break;
                                            case 3:
                                                $hari = "Rabu";
                                                break;
                                            case 4:
                                                $hari = "Kamis";
                                                break;
                                            case 5:
                                                $hari = "Jumat";
                                                break;
                                            case 6:
                                                $hari = "Sabtu";
                                                break;
                                            case 7:
                                                $hari = "Minggu";
                                                break;
                                            endswitch;
                                            // var_dump($a['id_tempat']);
                                        if($a['id_tempat'] == 3){?>
                                            <tr>
                                              <td><?= $no ?></td>
                                              <td><?= $hari; ?></td>
                                              <td>Rp. <?= $a['harga'] ?></td>  
                                            </tr>
                                      <?php
                                        }
                                      $no++;
                                        endforeach; ?>
										</tbody>
								  	</table>
								</div>
							</div>
						</div><!--/.col-->
						<div class="col-md-3 col-sm-3">
							<div class="text-center">
							<h4>Sumur Api</h4>
							  <div style="margin-top: 12px;">
									<table class="table table-bordered">
								  		<thead>
											<tr>
												<th>#</th>
												<th>Hari</th>
												<th>Harga</th>
											</tr>
										</thead>
										<tbody>
											
										<?php 
                                      $no = 1;
                                      $hari = "";
                                      foreach($harga as $a):
                                        switch($a['id_hari']):
                                            case 1:
                                                $hari = "Senin";
                                                break;
                                            case 2:
                                                $hari = "Selasa";
                                                break;
                                            case 3:
                                                $hari = "Rabu";
                                                break;
                                            case 4:
                                                $hari = "Kamis";
                                                break;
                                            case 5:
                                                $hari = "Jumat";
                                                break;
                                            case 6:
                                                $hari = "Sabtu";
                                                break;
                                            case 7:
                                                $hari = "Minggu";
                                                break;
                                            endswitch;
                                            // var_dump($a['id_tempat']);
                                        if($a['id_tempat'] == 4){?>
                                            <tr>
                                              <td><?= $no ?></td>
                                              <td><?= $hari; ?></td>
                                              <td>Rp. <?= $a['harga'] ?></td>  
                                            </tr>
                                      <?php
                                        }
                                      $no++;
                                        endforeach; ?>
										</tbody>
								  	</table>
								</div>
							</div>
						</div>
					</div><!--/.row-->	
						</div><!--/.blog-content-->
					</div><!--/.blog-details-->
				</div><!--/.container-->

		</section><!--/.blog-->
		<!--blog end-->

		<!-- testemonial Start -->
		<section class="testemonial">
			<div class="container">

				<div class="gallary-header text-center">
					<h2>
						Review Pengunjung
					</h2>

				</div><!--/.gallery-header-->

				<div class="owl-carousel owl-theme" id="testemonial-carousel">
					<?php 
					
					foreach($review as $a): 
					switch($a['id_tempat']):
						case 1:
							$temp = "Puncak Cemoro Pitu";
							break;
						case 2:
							$temp = "Museum Purbakala Sangiran Klaster Dayu";
							break;
						case 3:
							$temp = "Sumur Emas";
							break;
						case 4:
							$temp = "Sumur Api";
							break;
					endswitch;
					?>
					
						<div class="home1-testm item">
							<div class="home1-testm-single text-center">
								<div class="home1-testm-img">
									<img src="<?= base_url('landing/images/client/testimonial3.jpg')?>" alt="img"/>
								</div><!--/.home1-testm-img-->
								<div class="home1-testm-txt">
									<span class="icon section-icon">
										<i class="fa fa-quote-left" aria-hidden="true"></i>
									</span>
									<p>
										<?= $a['keterangan']; ?>
									</p>
									<h3>
										<a href="#">
											<?= $a['nama']; ?>
										</a>
									</h3>
									
									<div class="packages-review">
									<p>
								<?php for($i = 0; $i<$a['ratin'];$i++): ?>
									<i class="fa fa-star"></i>
								<?php endfor; ?>
								</p>
									</div>
									<h4><?= $temp; ?></h4>
								</div><!--/.home1-testm-txt-->	
							</div><!--/.home1-testm-single-->

						</div><!--/.item-->
					<?php endforeach; ?>

				</div><!--/.testemonial-carousel-->
			</div><!--/.container-->

		</section><!--/.testimonial-->	
		<!-- testemonial End -->