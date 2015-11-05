<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include('head.php');?>
<meta name="description" content="" />
<title>Como Comprar</title>
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
            <a href="index.php">Página Inicial</a> »<span> Como Comprar</span>
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
			<h1>Informações sobre a compra</h1>            
            <div class="line-style-clash"><hr class="line1"><hr class="line2"></div>
            <h4>Manuseio e Entrega</h4>
            <p>Ao comprar na Loja Egosss você recebe seus produtos em sua casa, de forma rápida e econômica. Assim que recebemos a confirmação do pagamento, realizamos o serviço de manuseio e embalagem e despachamos seu pedido no maximo, em 5 dias útil sendo realizada pelos Correios para cidades fora de São Paulo e Transportadora para a região de São Paulo. Você vai ser informado via e-mail de todas as alterações do status de seu pedido. O frete é totalmente gratuito para compras acima de R$ 89,00.</p>
            <h4>Política de Privacidade</h4>
            <p>As informações fornecidas pelo cliente são usadas exclusivamente para processar os pedidos solicitados. Não fornecemos suas informações para terceiros. Todos os dados são guardados confidencialmente.</p>
            <h4>Garantia de Satisfação</h4>
            <p>Caso algum produto tenha sido expedido por engano ou trocado em relação ao pedido, entre em contado com nosso Atendimento para devolve-lo. Se for comprovada a nossa falha, faremos o estorno de todos os valores pagos, ou a troca por outro produto de acordo com sua vontade. Os prazos divergem de produto para produto. Necessitando de qualquer orientação fale com nosso Atendimento.</p>
            <h4>Compra Segura</h4>
            <p>O <a href="https://pagseguro.uol.com.br/#rmcl" target="_blank">PagSeguro</a> é o meio de pagamento mais completo e eficiente na proteção contra fraudes em compras online. 1. Não repassa dados financeiros aos vendedores; 2. Sua compra entregue ou seu dinheiro de volta. Para garantir total segurança e integridade durante as compras e vendas online, todas as operações financeiras são efetuadas em ambiente seguro. O comprador tem até 14 dias para cancelar o negócio, caso a mercadoria não seja entregue, ou não esteja de acordo com o combinado.</p>
            <h4>Formas de Pagamento</h4>
            <p>O PagSeguro aceita os seguintes meios de pagamento:</p>
            <ul>
                <li>Cartões de crédito - parcelamento em até 18 vezes;</li>
                <li>Débito bancário;</li>
                <li>Boleto bancário;</li>
                <li>Carteira eletrônica (saldo disponível na conta PagSeguro).</li>
            </ul>
            <h4>Como Comprar</h4>
            <p>1. Ambas as partes concordam com os termos da compra, que incluem:</p>
            <ul>
                <li>Descrição da mercadoria;</li>
                <li>Preço de venda;</li>
                <li>Tempo de inspeção;</li>
                <li>Demais informações sobre o envio.</li>
            </ul>
            <p>2. Comprador paga via PagSeguro, e o vendedor envia a mercadoria O comprador efetua o pagamento pelo meio de pagamento escolhido (cartão de crédito, Saldo PagSeguro, débito online / TEF, boleto). O pagamento é aprovado após a análise da transação pelo PagSeguro. A aprovação geralmente acontece em tempo real, mas o tempo de processamento e análise pode variar dependendo do tipo de pagamento.</p>
            <p>Assim que o pagamento estiver com o status de "aprovado", o vendedor será informado pelo PagSeguro e poderá enviar a mercadoria. Ele deverá fornecer as informações necessárias para o rastreamento da mercadoria e comprovação da entrega.</p>
            <p>3. Comprador aceita a mercadoria O comprador terá um prazo de até 14 dias após o pagamento do produto ou serviço para abrir uma disputa contra o vendedor, a fim de solucionar qualquer problema ocorrido com a mercadoria ou serviço. Para isso basta acessar a conta PagSeguro, ir até o menu “Disputas” ou entrar na transação que deseja iniciar uma disputa. O valor do pagamento ficará bloqueado e o PagSeguro solicitará ao comprador e ao vendedor as informações necessárias para o processo de análise da disputa.</p>
            <p>Ao final da análise, o valor da transação poderá ser devolvida ao comprador, ou o saldo liberado ao vendedor. O PagSeguro nunca retém o saldo das transações.</p>
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
