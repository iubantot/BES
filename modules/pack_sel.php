<html>

<body>
<br>
<br>
<div class="wide">
  	<div class="col-xs-4 line"><hr></div>
    <div class="col-xs-4 logo">
	<?php
	echo $_SESSION['category'];
	?>
	</div>
    <div class="col-xs-4 line"><hr></div>
</div>
</br>
<hr>
</br>
<div class="container">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Rates</h2>
                    <h3 class="section-subheading text-muted">Adjustable rates.</h3>
                </div>   
           
  
        <div class="row db-padding-btm db-attached">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-one">
                        <div class="price">
                            <sup>PHP</sup><?php
							echo $_SESSION['price'];
							?>
							
                                <small>per quarter</small>
                        </div>
                        <div class="type">
							<?php
							echo $_SESSION['product_name'];
							?>
                        </div>
                        <ul>
							<?php
			$desc = $_SESSION['descriptions'];
			//$descarray = array();
			$desc_count = 0;
			do{
			
			$i = strpos($desc,";");
			$print = substr($desc,0,$i);
			$descarray[$desc_count] = $print;
			$desc = substr($desc,$i+1,strlen($desc));
			echo '<li><i class="glyphicon glyphicon-time"></i>'.$descarray[$desc_count].'</li>';
			$desc_count++;

			}while($desc != "");
			

							?>
                        </ul>
                        <div class="pricing-footer">
							<?php
							$pack_sel = $_SESSION['product_no'];
							 echo '<a href="orderform.php?pack_pick='.$pack_sel.'" class="btn db-button-color-square btn-lg">BOOK ORDER</a>';

							?>
                        </div>
                    </div>
                </div>
            </div>

        
		<?php
			while($row = $res->fetch_assoc()) {

		?>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-one">
                        <div class="price">
                            <sup>PHP</sup><?php
							echo $row['price'];
							?>
                                <small>per quarter</small>
                        </div>
                        <div class="type">
                            <?php
							echo $row['product_name'];
							?>
                        </div>
                        <ul>

							<?php
			$desc = $row['descriptions'];
			$descarray = array();
			$desc_count = 0;
			do{
			
			$i = strpos($desc,";");
			$print = substr($desc,0,$i);
			$descarray[$desc_count] = $print;
			$desc = substr($desc,$i+1,strlen($desc));
			echo '<li><i class="glyphicon glyphicon-time"></i>'.$descarray[$desc_count].'</li>';
			$desc_count++;

			}while($desc != '');
			

							?>
                        </ul>
                        <div class="pricing-footer">

							<?php
							$pack_select = $row['product_no'];
							 echo '<a href="orderform.php?pack_pick='.$pack_select.'" class="btn db-button-color-square btn-lg">BOOK ORDER</a>';

							?>                        </div>
                    </div>
                </div>
            </div>

		<?php
			}
		?>
</div>
    </div>
    </div>
</br>
<hr>
</br>
<div class="container">
		<h1>Sample shots</h1>
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img width="100%" src="img/grad/1.jpg" ></div>

                                        <div class="item" data-slide-number="1">
                                        <img width="100%" src="img/grad/2.jpg"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="img/grad/3.jpg"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="img/grad/4.jpg"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="img/grad/5.jpg"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="img/grad/6.jpg"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>

                            <div class="col-sm-4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>Slider One</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Slider Two</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>Slider Three</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-3">
                                    <h2>Slider Four</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-4">
                                    <h2>Slider Five</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>

                                <div id="slide-content-5">
                                    <h2>Slider Six</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>
								
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="img/grad/1.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="img/grad/2.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="img/grad/3.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="img/grad/4.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-4"><img src="img/grad/5.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-5"><img src="img/grad/6.jpg"></a>
                            </li>
                        </ul>                 
                </div>
        </div>
</div>

</body>
</html>