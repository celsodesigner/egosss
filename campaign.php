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
	
    <section id="content">
        <article class="content col-9-12">
			<h1>Millionaire Collection</h1>            
            <div class="line-style-clash"><hr class="line1"><hr class="line2"></div>
            <h4>Conheça a campanha Millionaire Collection</h4>
            <p>Uma tendência que está com tudo no mundo da moda masculina e dos fashionistas são as peças mais oversized! E bem nessa pegada estão as camisetas com barra estendida, que são aquelas camisetas com a barra maior que o normal (porém no seu tamanho comum) e as LongTail que, como diz o nome, tem a barra traseira mais cumprida que a frontal! Essas camisetas que fizeram parte daquela época "swag" do Justin Bieber, hoje entram em vários estilos de muitos homens por aí.</p>
            <p>O estilo no começo é um pouco "desafiador" para os meninos, principalmente para aqueles que se prendem ao machismo de que parece um vestido e segundo a lei humana "meninos não podem usar vestidos", mas não é bem assim que funciona! Esses estilos de camisetas trazem mais atitude para sua produção e um toque mais despojado também. Trouxe algumas inspirações pra vocês!</p>
            <div class="images-campaing">
            	<img src="images/880x470/img-campaign1.jpg" alt="">
                <img src="images/880x470/img-campaign2.JPG" alt="">
                <img src="images/880x470/img-campaign3.jpg" alt="">
                <img src="images/880x470/img-campaign4.JPG" alt="">
                <img src="images/880x470/img-campaign5.JPG" alt="">
                <img src="images/880x470/img-campaign6.JPG" alt="">
            </div>
        </article>
    </section>
    
	<section id="sidebar-mobile">
        <aside class="sidebar col-3-12">
            <?php include('categories-widget.php');?>
            <?php include('newsletter-widget.php');?>
            <?php include('slider-widget.php');?>
            <?php include('twitter-widget.php');?>
            <div class="spacer40"></div>
        </aside>
    </section>
    
</div>

<?php include('footer.php');?>

</body>
</html>
