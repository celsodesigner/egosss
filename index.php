<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include('head.php');?>
<meta name="description" content="A Egosss é uma marca focada no estilo urbano sempre antenada em oferecer os melhores produtos da moda conceitual sempre combinada ao verdadeiro estilo dos rappers americanos." />
<title>Egosss | The King Is Born!</title>
<link rel="stylesheet" href="css/style.css">
</head>

<!-- FACEBOOK SOCIAL PLUGINS -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=442244982542522";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php include('header.php');?>
    
<section id="slider-home">
    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container2">
    <div class="ws_images"><ul>
            <li><a href="#"><img src="data2/images/slider1.jpg" alt="slider1" title="slider1" id="wows2_0"/></a></li>
            <li><a href="#"><img src="data2/images/slider2.jpg" alt="slider2" title="slider2" id="wows2_1"/></a></li>
            <li><a href="#"><img src="data2/images/slider3.jpg" alt="slider3" title="slider3" id="wows2_2"/></a></li>
            <li><a href="#"><img src="data2/images/slider4.jpg" alt="slider4" title="slider4" id="wows2_3"/></a></li>
            <li><a href="#"><img src="data2/images/slider5.jpg" alt="slider5" title="slider5" id="wows2_4"/></a></li>
        </ul></div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.6</div>
    <div class="ws_shadow"></div>
    </div>	
    <script type="text/javascript" src="engine2/wowslider.js"></script>
    <script type="text/javascript" src="engine2/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
</section>
    
<?php include('slider-bar.php');?>

<!-- PROMO AREA -->
<section id="promo-area">
    <div class="grid grid-pad">
    
        <article class="video-area col-8-12 ">
            <div class="video-container">
                <iframe src="https://player.vimeo.com/video/24492485?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </article>
        
        <article class="col-4-12 promo-area">
            <!-- Start WOWSlider.com BODY section -->
            <div id="wowslider-container1">
            <div class="ws_images"><ul>
                    <li><a href="#"><img src="data1/images/img-promo-area1.jpg" alt="img-promo-area1" id="wows1_0"/></a></li>
                    <li><a href="#"><img src="data1/images/img-promo-area2.jpg" alt="img-promo-area2" id="wows1_1"/></a></li>
                    <li><a href="#"><img src="data1/images/img-promo-area3.jpg" alt="img-promo-area3" id="wows1_2"/></a></li>
                    <li><a href="#"><img src="data1/images/img-promo-area4.jpg" alt="img-promo-area4" id="wows1_3"/></a></li>
                </ul></div>
            <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">bootstrap carousel</a> by WOWSlider.com v8.6</div>
            <div class="ws_shadow"></div>
            </div>	
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
            <!-- End WOWSlider.com BODY section -->
        </article>
        
    </div>
</section>

<section id="featured-products">
    <article class="products-categories grid grid-pad">
        <h2>Destaques</h2>
        <div class="line-style-clash"><hr class="line1"><hr class="line2"></div>
		<?php include('products-4columns.php');?>
    </article>
</section>

<section id="best-sellers">
    <article class="products-categories grid grid-pad">
        <h2>Best Sellers</h2>
        <div class="line-style-clash"><hr class="line1"><hr class="line2"></div>
		<?php include('products-5columns.php');?>
    </article>
</section>

<?php include('testimonials.php');?>

<?php include('newsletter.php');?>

<?php include('footer.php');?>

</body>
</html>
