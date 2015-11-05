<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include('head.php');?>
<meta name="description" content="" />
<title>Categoria</title>
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
    
<!-- BREADCRUMB -->
<section id="breadcrumb">
	<div class="breadcrumb grid grid-pad">
        <div itemprop="breadcrumb" class="col-1-1">
            <a href="index.php">Página Inicial</a> »<span> Categoria de Produto</span>
            <div class="horizontal-line-white-bg"></div>
        </div>
    </div>
</section>

<div class="grid grid-pad">
	 
	<section id="sidebar">
        <aside class="sidebar col-3-12">
            <?php include('categories-widget.php');?>
            <?php include('newsletter-widget.php');?>
            <?php include('slider-widget.php');?>
            <?php include('twitter-widget.php');?>
        </aside>
    </section>
	
    <section id="category-products">
        <article class="products-categories col-9-12">
        	<h1>Masculino</h1>
            <div class="line-style-clash"><hr class="line1"><hr class="line2"></div>
            <?php include('products-3columns.php');?>
        </article>
    </section>
    
	<section id="sidebar-mobile">
        <aside class="sidebar col-3-12">
            <?php include('categories-widget.php');?>
            <?php include('newsletter-widget.php');?>
            <?php include('slider-widget.php');?>
            <?php include('twitter-widget.php');?>
        </aside>
    </section>
    
</div>

<?php include('footer.php');?>

</body>
</html>
