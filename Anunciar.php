<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>OrlanStore - Site de Compra e Venda Online | Anunciar</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<link href="img/favicon.ico" rel="shortcut icon"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>
	
	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Início</a>
								
							</li>
							
							<li  class="active-menu">
								<a href="Anunciar.php">Anunciar</a>
							</li>

							
							<li>
								<a href="Sobre.php">Entrar em Contato</a>
							</li>
						</ul>
					</div>	
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="#"><img src="images/logo.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li class="active-menu">
								<a href="index.php">Início</a>
								
							</li>

							<li>
								<a href="Denunciar.php">Denunciar Vendedor</a>
							</li>
							
							<li>
								<a href="Sobre.php">Entrar em Contato</a>
							</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
			
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Procurar Produto...">
				</form>
			</div>
		</div>
	</header>

	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/fundo22.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Anunciar um Novo Produto
		</h2>
	</section>
	
<!------------------------- FORMULÁRIO ------------------------------->	
</br>
<div class="container">
<div class="row">
<div class="col-lg-8 order-2 order-lg-1">	
				 
<form method="POST" class="checkout-form" action="cadastrar.php" class="frmAnunciar"enctype="multipart/form-data"> 
             <div class="row">	  
              <div class="col-md-12 mb-3">
               <label for="nome" style="font-size:19px; font-family: 'Calibri', cursive;">Seu Nome:</label>
               <input type="text" name="nome" id="nome" class="form-control" required>
                <div class="invalid-feedback"></div>
              </div>			               
             </div>           
</br>
</br>		

<div class="row">	  
              <div class="col-md-12 mb-3">
               <label for="cidade" style="font-size:19px; font-family: 'Calibri', cursive;">Cidade:</label>
               <input type="text" name="cidade" id="cidade" class="form-control" required>
                <div class="invalid-feedback"></div>
              </div>			               
             </div>           
</br>
</br>			
		
             <div class="row">	  
              <div class="col-md-12 mb-3">
               <label for="email" style="font-size:19px; font-family: 'Calibri', cursive;">Email para Contato:</label>
               <input type="text" name="email" id="email" class="form-control" required>
                <div class="invalid-feedback"></div>
              </div>			               
             </div>           
</br>
</br>			

<div class="row">	  
              <div class="col-md-12 mb-3">
               <label for="tel" style="font-size:19px; font-family: 'Calibri', cursive;">Telefone para Contato:</label>
               <input type="text" name="tel" id="tel" class="form-control" required>
                <div class="invalid-feedback"></div>
              </div>			               
             </div>           
</br>
</br>			

<div class="row">	  
              <div class="col-md-12 mb-3">
               <label for="data" style="font-size:19px; font-family: 'Calibri', cursive;">Data do Anúncio:</label>
               <input type="date" name="data" id="data" class="form-control" required>
                <div class="invalid-feedback"></div>
              </div>			               
             </div>           
</br>
</br>

              <div class="row">	  
              <div class="col-md-12 mb-3">
               <label for="nomeproduto" style="font-size:19px; font-family: 'Calibri', cursive;">Nome do Produto que deseja anunciar:</label>
               <input type="text" name="nomeproduto" id="nomeproduto" class="form-control" required>
                <div class="invalid-feedback"></div>
              </div>			               
             </div>           
</br>
</br>			
              <div class="row">	  
              <div class="col-md-12 mb-3">
               <label for="descricao" style="font-size:19px; font-family: 'Calibri', cursive;">Descrição do Produto:</label>
               <textarea id="descricao" name="descricao" class="form-control" required></textarea>
                <div class="invalid-feedback"></div>
              </div>			               
             </div>           
</br>
</br>			

              <div class="row">	  
              <div class="col-md-12 mb-3">
               <label for="preco" style="font-size:19px; font-family: 'Calibri', cursive;">Preço do Produto:</label>
               <input type="text" name="preco" id="preco" class="dinheiro form-control" maxlength="11" placeholder="R$ 000.000,00" required>
			  <!--onkeypress="$(this).mask('R$ 999.990,00')"-->
               <div class="invalid-feedback"></div>
              </div>			               
             </div>           
</br>
</br>			

              <div class="row">	  
              <div class="col-md-12 mb-6">
               <label for="obs" style="font-size:19px; font-family: 'Calibri', cursive;">Observações:</label>
			   <textarea id="obs" name="obs" class="form-control"></textarea>
                 <!--<input type="text" name="obs" id="obs" class="form-control" required>-->
                <div class="invalid-feedback"></div>
              </div>			               
             </div>

</br>
</br>			
              <div class="row">	  
              <div class="col-md-12 mb-3">
               <label for="quantidade" style="font-size:19px; font-family: 'Calibri', cursive;">Quantidade de Produtos que serão Vendidos    **Em uma mesma remessa:</label>
			   
			   <select class="custom-select d-block w-100" name="quantidade" id="quantidade" required>                 
                  <option>01</option>
				  <option>02</option>
				  <option>03</option>
				  <option>05</option>
				  <option>06</option>
				  <option>07</option>
				  <option>08</option>
				  <option>09</option>
				  <option>10</option>
                </select>
			   
                <div class="invalid-feedback"></div>
              </div>			               
             </div> 
          
			 
                
</div>			               
 </div>
</br>
</br>

              <div class="row">
              <div class="col-md-12 mb-3">
                <label for="imagem" style="font-size:19px; font-family: 'Calibri', cursive;">Imagem do Produto: </label></br>	
 <input type="file" name="Arquivo" id="Arquivo"><br> 				
               
               <div class="invalid-feedback">
                </div>
              </div>			               
            </div> 			
</br>           
</br>
      <div class="col-md-12">
		<center><fieldset class="fdEnviar"> <input type="submit" a href="index.php" class="flex-c-m stext-101 cl0 size-115 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" action="cadastrar.php" value="Anunciar"> </fieldset></center>
		
		<br>
		<br>
		
		
		<center><fieldset class="fdLimpar"> <input type="reset"  class="flex-c-m stext-101 cl0 size-115 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" value="Limpar"> </fieldset></center>
	  </div>
</br>
</br>   

</div>
</br>
</br>
</form>

			<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>

<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>

<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>

<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>

	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
