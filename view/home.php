<?php 
	require 'frontendheader.php';
?>
	
	<!-- Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		
  		<div class="carousel-inner">
    		<div class="carousel-item active">
		      	<img src="<?php echo $GLOBALS['view_path'] ?>template/frontend/image/banner/ac.jpg" class="d-block w-100 bannerImg" alt="...">
		    </div>
		    <div class="carousel-item">
		      	<img src="<?php echo $GLOBALS['view_path'] ?>template/frontend/image/banner/giordano.jpg" class="d-block w-100 bannerImg" alt="...">
		    </div>
		    <div class="carousel-item">
		      	<img src="<?php echo $GLOBALS['view_path'] ?>template/frontend/image/banner/garnier.jpg" class="d-block w-100 bannerImg" alt="...">
		    </div>
  		</div>
	</div>


	<!-- Content -->
	<div class="container mt-5 px-5">
		<!-- Category -->
		<div class="row">

			<?php 
				foreach($randomcategories as $randomcategory){
				$rcid = $randomcategory['id'];
				$rcname = $randomcategory['name'];
				$rclogo = $GLOBALS['view_path'].$randomcategory['logo'];

			?>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="<?php echo $rclogo ?>" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> <?php echo $rcname; ?> </p>
				  	</div>
				</div>
			</div>

			<?php } ?>

		</div>

		<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
		
		<!-- Discount Item -->
		<div class="row mt-5">
			<h1> Discount Item </h1>
		</div>

	    <!-- Disocunt Item -->
		<div class="row">
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
		            <div class="MultiCarousel-inner">

		            	<?php 
		            		foreach($discountitems as $discountitem)
		            		{
		            			$diid = $discountitem['id'];
		            			$dicodeno = $discountitem['codeno'];
		            			$diname = $discountitem['name'];
		            			$diphoto = $GLOBALS['view_path'].$discountitem['photo'];
		            			$diprice = $discountitem['price'];
		            			$didiscount = $discountitem['discount'];
		            	?>

		                <div class="item">
		                    <div class="pad15">
		                    	<img src="<?php echo $diphoto ?>" class="img-fluid">
		                        <p class="text-truncate"> <?php echo $name ?> </p>
		                        <p class="item-price">
		                        	<?php 
		                        		if($didiscount > 0)
		                        		{
		                        	?>
		                        		<strike> <?php echo $diprice; ?> Ks </strike> 
		                        		<span class="d-block"> <?php echo $didiscount ?> Ks</span>

		                        	<?php } else{ ?>
		                        		<span class="d-block"> <?php echo $diprice ?>  Ks</span>
		                        	<?php } ?>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="javascript:void(0)" class="addtocartBtn text-decoration-none" data-id ="<?= $diid ?>" data-name="<?= $diname ?>"
								data-codeno="<?= $dicodeno ?>"
								data-photo="<?= $diphoto ?>"
								data-price="<?= $diprice ?>"
								data-discount="<?= $didiscount ?>">Add to Cart</a>

		                    </div>
		                </div>

		            	<?php } ?>
		                
		            </div>
		            <button class="btn btnMain leftLst"><</button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		</div>

		<!-- Flash Sale Item -->
		<div class="row mt-5">
			<h1> Flash Sale </h1>
		</div>

	    <!-- Flash Sale Item -->
		<div class="row">
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
		            <div class="MultiCarousel-inner">
		            	<?php 
		            		foreach($newitems as $newitem)
		            		{
		            			$niid = $newitem['id'];
		            			$nicodeno = $newitem['codeno'];
		            			$niname = $newitem['name'];
		            			$niphoto = $GLOBALS['view_path'].$newitem['photo'];
		            			$niprice = $newitem['price'];
		            			$nidiscount = $newitem['discount'];
		            	?>
			                <div class="item">
			                    <div class="pad15">
			                    	<img src="<?php echo $niphoto ?>" class="img-fluid">
			                        <p class="text-truncate"> <?php echo $niname ?> </p>
			                        <p class="item-price">
			                        	<?php 
			                        		if($nidiscount > 0)
			                        		{
			                        	?>
			                        		<strike> <?php echo $niprice; ?> Ks </strike> 
			                        		<span class="d-block"> <?php echo $nidiscount ?> Ks</span>

			                        	<?php } else{ ?>
			                        		<span class="d-block"> <?php echo $niprice ?>  Ks</span>
			                        	<?php } ?>
			                        </p>

			                        <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="javascript:void(0)" class="addtocartBtn text-decoration-none" data-id ="<?= $niid ?>" data-name="<?= $niname ?>"
									data-codeno="<?= $nicodeno ?>"
									data-photo="<?= $niphoto ?>"
									data-price="<?= $niprice ?>"
									data-discount="<?= $nidiscount ?>">Add to Cart</a>

			                    </div>
			                </div>

			            <?php } ?>
		                
		            </div>
		            <button class="btn btnMain leftLst"><</button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		</div>

		<!-- Random Catgory ~ Item -->
		<div class="row mt-5">
			<h1> Lipstick </h1>
		</div>

	    <!-- Random Item -->
		<div class="row">
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
		            <div class="MultiCarousel-inner">
		            	<?php 
		            		foreach($randomitems as $randomitem)
		            		{
		            			$riid = $randomitem['id'];
		            			$ricodeno = $randomitem['codeno'];
		            			$riname = $randomitem['name'];
		            			$riphoto = $GLOBALS['view_path'].$randomitem['photo'];
		            			$riprice = $randomitem['price'];
		            			$ridiscount = $randomitem['discount'];
		            	?>

		                	<div class="item">
			                    <div class="pad15">
			                    	<img src="<?php echo $riphoto ?>" class="img-fluid">
			                        <p class="text-truncate"> <?php echo $riname ?> </p>
			                        <p class="item-price">
			                        	<?php 
			                        		if($ridiscount > 0)
			                        		{
			                        	?>
			                        		<strike> <?php echo $riprice; ?> Ks </strike> 
			                        		<span class="d-block"> <?php echo $ridiscount ?> Ks</span>

			                        	<?php } else{ ?>
			                        		<span class="d-block"> <?php echo $riprice ?>  Ks</span>
			                        	<?php } ?>
			                        </p>

			                        <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="javascript:void(0)" class="addtocartBtn text-decoration-none" data-id ="<?= $riid ?>" data-name="<?= $riname ?>"
									data-codeno="<?= $ricodeno ?>"
									data-photo="<?= $riphoto ?>"
									data-price="<?= $riprice ?>"
									data-discount="<?= $ridiscount ?>">Add to Cart</a>

			                    </div>
			                </div>

			            <?php } ?>
		                
		            </div>
		            <button class="btn btnMain leftLst"><</button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		</div>

		
		<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

	    <!-- Brand Store -->
	    <div class="row mt-5">
			<h1> Top Brand Stores </h1>
	    </div>

	    <!-- Brand Store Item -->
	    <section class="customer-logos slider mt-5">
	    	<?php
				foreach ($brands as $b) {
				$bid = $b['id'];
				$bname = $b['name'];
				$blogo = $GLOBALS['view_path'].$b['logo'];

			?>
	      	<div class="slide">
	      		<a href="">
		      		<img src="<?php echo $blogo ?>">
		      	</a>
	      	</div>

	      	<?php  } ?>
	      	
	      	
	   	</section>

	    <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

	</div>

<?php 
	require 'frontendfooter.php';
?>