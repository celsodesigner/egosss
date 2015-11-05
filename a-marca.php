<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include('head.php');?>
<meta name="description" content="" />
<title>Conheça a Marca</title>
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
            <a href="index.php">Página Inicial</a> »<span> Conheça a Marca</span>
            <div class="horizontal-line-white-bg"></div>
        </div>
    </div>
</section>

<div class="grid grid-pad">
 
    <aside id="sidebar" class="col-3-12">
		<?php include('categories-widget.php');?>
        <?php include('newsletter-widget.php');?>
        <?php include('slider-widget.php');?>
        <div class="spacer40"></div>
    </aside>
	
    <section id="content">
        <article class="content col-9-12">
			<h1>Conheça a Marca</h1>            
            <div class="line-style-clash"><hr class="line1"><hr class="line2"></div>
            <div class="featured-image"><img src="images/img-amarca.jpg" alt="Owner"></div>
            <h4>O que é a Egosss</h4>
            <p>É uma grife criada em uma rua do comércio de Guaianases, na ponta leste de São Paulo. Espremida entre as outras lojas, chamava atenção por suas roupas brilhantes e douradas.</p>
            <p>O nome veio de uma característica assumida de seu criador <strong>Jeferson Santos de Souza</strong> de 35 anos, uma pessoa com o <strong>E</strong>go muito inflado. Os 3 <strong>S's</strong> vem de seu sobrenome <strong>S</strong>anto<strong>S</strong> de <strong>S</strong>ouza; prezando a qualidade e a exclusividade dos produtos desenvolvidos.</p>
            <p>Com todo o seu diferencial, percebeu que precisava buscar novos horizontes. Tendo um papel importante na propagação e crescimento do segmento, é hoje uma das principais marcas do movimento <strong>SWAG</strong>, caracterizado por pessoas que gostam de se vestir com estilo ou atitude impressionante, bandeira levantada por <strong>Justin Bieber</strong>, por exemplo.</p>
            <h4>Sua Inspiração</h4>
            <p>Marca focada no estilo urbano americano sempre antenada em oferecer os melhores produtos da moda conceitual, combinada ao verdadeiro estilo dos rappers americanos como <strong>Kannye West, Jay Z, Soulja Boy e Justin Bieber</strong>, conhecidos pelo egocentrismo.</p>
            <p>Referência no Brasil e no exterior como grife especializada em moda.</p>
            <p>A marca oferece bonés, vestuários e acessórios, tudo fabricação própria. Nossa linha é luxo e ostentação.</p>
            <h4>Mercado</h4>
            <p>Com apenas 2 anos de fundação a marca  já é revendida em mais de 150 pontos de vendas direta ou indiretamente, inclusive duas lojas fora do país (Nova York e Los Angeles). Hoje atendendo um publico de A a Z nas classes A, B, C com roupas que variam de R$ 99,00 a R$ 399,00.</p>
            <h4>Público</h4>
            <p>Com foco na faixa etária entre 15 a 35 anos, ou seja o público mais exigente, que gosta de chamar atenção, de se vestir diferente e ter personalidade, e que buscam inspirações em artistas, jogadores de futebol e grandes personalidades.</p>
            <h4>A Empresa</h4>
            <p>Hoje possui entre 200 a 250 pessoas que trabalham direta ou indiretamente.</p>
            <h5>Escritório</h5>
            <p>Nosso escritório fica na rua Prof. João de Oliveira Torres, 330 - Jardim Anália Franco - São Paulo - SP, onde também funciona o nosso Show Room, que conta sempre com vendedores de prontidão e de onde damos suporte a todos os clientes, revendedores e franqueados.</p>
            <h5>Fábrica</h5>
            <p>Todos os produtos são de confecção própria, situadas na região norte de São Paulo, mais precisamente no bairro de Santana. Foi feito um enorme investimento em máquinas, equipamentos de última geração e mão-de-obra qualificada.</p>
            <p>Na fábrica temos diretamente envolvidos líder de produção, passadeiras, estampadores, cortador, estilista e modelista.</p>
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
