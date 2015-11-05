<header>

    <div id="header-bar">
        <div class="header-bar grid grid-pad">
        
        	<div class="contacts-header col-7-12">
                <ul>
                    <li class="whatsapp"><span>(11) 95159-6455</span></li>
                    <li class="phone"><span>(11)2776-9100 / (11) 2776-9200</span></li>
                    <li class="clock"><span>Seg à sex 9h30 às 18h00 / sáb 9h30 às 13h00</span></li>
                </ul>
            </div>
            
            <nav class="menu-header col-5-12">
                <ul>
                    <li><a href="#" title="Minha Conta"><span>Minha Conta</span></a></li>
                    <li><a href="#" title="Meus Favoritos"><span>Meus Favoritos</span></a></li>
                    <li><a href="#" title="Fechar Pedido"><span>Fechar Pedido</span></a></li>
                    <li><a href="#" title="Login"><span>Entrar</span></a></li>
                    <li><a href="#" title="Criar Conta"><span>Criar Conta</span></a></li>
                </ul>
            </nav>
            
        </div>
    </div>
    
    <div class="clear"></div>

	<div id="logo-area">
    	<div class="grid grid-pad">
        
            <div class="logo-header col-4-12">
            	<a href="index.php"><img src="images/logo-header.png" alt="Logo Egoss" width="250"></a>
            </div> 
            
            <div class="search-box col-5-12">
                <form method="get" action="/search" id="search-box">
                    <input name="q" type="text" size="40" placeholder="Pesquisar" />
                </form>
            </div>
            
            <div class="my-bag col-3-12">
                <a href=""><img src="images/icon-bag.png" alt="Sacola">
                <div class="mybag-wrapper">
                    <p class="title-bag">Minha Sacola</p>
                    <div class="amount-itens"><span>0 </span>peças</div>
                </div>
                <div class="clear"></div></a>
        	</div>
		</div>        
    </div>
    
	<div id="logo-area-mobile">
    	<div class="grid grid-pad">
        
            <div class="logo-header col-4-12">
            	<a href="index.php"><img src="images/logo-header.png" alt="Logo Egoss" width="250"></a>
            </div> 
            
            <div class="col-8-12">
                <div class="search-box" style="float:left;">
                    <form method="get" action="/search" id="search-box">
                        <input name="q" type="text" size="40" placeholder="Pesquisar" />
                    </form>
                </div>
                
                <div class="my-bag">
                    <a href=""><img src="images/icon-bag.png" alt="Sacola">
                    <div class="mybag-wrapper">
                        <p class="title-bag">Minha Sacola</p>
                        <div class="amount-itens"><span>0 </span>peças</div>
                    </div>
                    <div class="clear"></div></a>
                </div>
            </div>
                
		</div>        
    </div>

	<div id="menu-desktop">
		<?php include('main-menu.php');?>
    </div>
    
	<div id="menu-mobile">
		<?php include('menu-mobile.php');?>
    </div>
    
</header>
