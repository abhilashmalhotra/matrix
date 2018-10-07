<?php include 'include/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matrix Delhi Dental</title>	
	<?php include 'include/head.php'; ?>	
</head>
<body>
	<div class="matrix_container">
		<!-- Header Include Here -->
		
		<?php include 'include/header.php'; ?>
		<!-- Main Container of Anurag Singh -->
		<div class="main_matrix_container">
			<section class="matrix_top_heading">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="main_heading wow fadeInUp" data-aos="fade-right">
								<h2 class="title">Gallery</h2>
							</div>
						</div>
						<div class="col-md-4">
							<div class="navigation_list wow fadeInUp" data-aos="fade-left">
								
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home mr-0"></i></a></li>
									<li class="breadcrumb-item active" aria-current="page">Gallery</li>
								</ol>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="matrix-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="gallery_top_menu">
								<ul class="list-inline text-center" id="gallerydata">
									<li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-raised btn-link active" data-filter="all">All</a></li>
									<li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-raised btn-link" data-filter=".dental">Dental</a></li>
									<li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-raised btn-link" data-filter=".skin">Skin</a></li>
								</ul>
							</div>		
						</div>
					</div>
					<div class="items-filter">
						<div class="row">
							<div class="col-md-4 mb-4 mix dental">	
								<a data-fancybox="photo-gallery" class="" href="images/service/1.jpg" data-caption="Image Title 1">						
									<div class="gallery_img_container">
										<img class="img-fluid" src="images/service/1.jpg" alt="">
										<div class="overlay">
											<h2>Image Title</h2>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 mb-4 mix dental">	
								<a data-fancybox="photo-gallery" class="" href="images/service/2.jpg" data-caption="Image Title 2">						
									<div class="gallery_img_container">
										<img class="img-fluid" src="images/service/2.jpg" alt="">
										<div class="overlay">
											<h2>Image Title</h2>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 mb-4 mix skin">	
								<a data-fancybox="photo-gallery" class="" href="images/service/3.jpg" data-caption="Caption for single image">						
									<div class="gallery_img_container">
										<img class="img-fluid" src="images/service/3.jpg" alt="">
										<div class="overlay">
											<h2>Image Title</h2>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 mb-4 mix dental">	
								<a data-fancybox="photo-gallery" class="" href="images/service/4.jpg">						
									<div class="gallery_img_container">
										<img class="img-fluid" src="images/service/4.jpg" alt="">
										<div class="overlay">
											<h2>Image Title</h2>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 mb-4 mix skin">	
								<a data-fancybox="photo-gallery" class="" href="images/service/1.jpg">						
									<div class="gallery_img_container">
										<img class="img-fluid" src="images/service/1.jpg" alt="">
										<div class="overlay">
											<h2>Image Title</h2>
										</div>
									</div>
								</a>
							</div><div class="col-md-4 mb-4 mix skin">	
								<a data-fancybox="photo-gallery" class="" href="images/service/2.jpg">						
									<div class="gallery_img_container">
										<img class="img-fluid" src="images/service/2.jpg" alt="">
										<div class="overlay">
											<h2>Image Title</h2>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 mb-4 mix dental">	
								<a data-fancybox="photo-gallery" class="" href="images/service/3.jpg">						
									<div class="gallery_img_container">
										<img class="img-fluid" src="images/service/3.jpg" alt="">
										<div class="overlay">
											<h2>Image Title</h2>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 mb-4 mix skin">	
								<a data-fancybox="photo-gallery" class="" href="images/service/4.jpg">						
									<div class="gallery_img_container">
										<img class="img-fluid" src="images/service/4.jpg" alt="">
										<div class="overlay">
											<h2>Image Title</h2>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>		
			</section>
		</div>
	</div>
	<?php  include 'include/footer.php'; ?>
	<?php  include 'include/foot.php'; ?>
	<script>
		$('[data-fancybox="photo-gallery"]').fancybox({
			
		});
	</script>
</body>
</html>