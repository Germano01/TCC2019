<?php
require "conexao.php";

$codigo = $_GET['cod_prod'];
$consulta = "select * from dados where codigo = $codigo";
$resultado = mysqli_query($link, $consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>OrlanStore - Site de Compra e Venda Online | Produto</title>
	<meta charset="UTF-8">
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

							<li>
								<a href="Anunciar.php">Anunciar</a>
							</li>


							<li>
								<a href="Denunciar.php">Denunciar Vendedor</a>
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
				<a href="index.html"><img src="images/logo.png" alt="IMG-LOGO"></a>
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
						<ul class="main-menu">
							<li>
								<a href="index.php">Início</a>
								
							</li>

							<li>
								<a href="Anunciar.php">Anunciar</a>
							</li>


							<li>
								<a href="Denunciar.php">Denunciar Vendedor</a>
							</li>
							
							<li>
								<a href="Sobre.php">Entrar em Contato</a>
							</li>
							
						</ul>
		</div>

	<!------------------------------ Produtos ------------------------------------>
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
		
<?php 
 if (mysqli_num_rows($resultado) >= 0) {
            $linha = mysqli_fetch_assoc($resultado);
				?>
				
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="<?php echo $linha["imagem"]?>" alt="IMG-PRODUCT">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $linha["nomeproduto"]?>
						</h4>
<br>
						<span class="mtext-106 cl2">
							R$<?php echo $linha["preco"]?>
						</span>
						
						<br>
                        <br>
							<p> Quantidade Disponível: <?php echo $linha["quantidade"]?></p>
						
						<!--  -->
						
						<br>
						<br>
						<br>
						<br>
						<div class="p-t-33">

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">

									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Finalizar Compra
									</button>
								</div>
							</div>	
						</div>

					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
	<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Produto</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Vendedor</a>
						</li>
						
						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">É importante lembrar que... </a>
						</li>
						
					</ul>

					<!-- Tab panes -->
		<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
			<p><b>Nome do Produto:  </b><?php echo $linha["nomeproduto"]?></p>
			<br>
			<p><b>Descrição:  </b><?php echo $linha["descricao"]?></p>
			<br>
			<p><b>Observação:  </b><?php echo $linha["obs"]?></p>
			<br>
			<p><b>Preço do Produto:</b> R$ <?php echo $linha["preco"]?></p>
								</p>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
			<p><b>Nome do Vendedor:  </b><?php echo $linha["nome"]?></p>
			<br>
			<p><b>Cidade:  </b><?php echo $linha["cidade"]?></p>
			<br>
			<p><b>Email do Vendedor:  </b><?php echo $linha["email"]?></p>
			<br>
			<p><b>Telefone do Vendedor:  </b><?php echo $linha["tel"]?></p>
			
								</p>
							</div>
						</div>
						
						
						
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										
									 <p class="stext-102 cl6">
		<p>Não nos responsabilizamos por entregas de produtos, ou verificação de segurança profunda, apenas movimentamos as informações entre o vendedor e o cliente.</p>
		<br>
		<br>
		<p>Email para tirar dúvidas: <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" <b><i style="font-size:17px; font-family: 'Arial', cursive;"> "OrlanStore1.0@gmail.com" </b></i></p></a>
									</p>
									</div>
								</div>
							</div>
						</div>
						

		</div>

						
		</div>
		
				<?php
				$nome_vend = $linha["nome"];
				$email_vend = $linha["email"];
				$tel_vend = $linha["tel"];
				$cidade_vend = $linha["cidade"];
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
?>
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
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){				
				Swal.fire({
				  title: '<p> Conclua a compra entrando em contato: </p>',
				  icon: 'success',
				  html:
					'<br>Nome do Vendedor: <?php echo $nome_vend?></p><br><p>Email para contato: <?php echo $email_vend?></p><br><p>Telefone para contato: <?php echo $tel_vend?></p><br>',
				  showCloseButton: true,
				  showCancelButton: true,
				  focusConfirm: false,
				  confirmButtonText:
					"<a href='index.php' style='color: #fff'> Finalizar </a>",
				});
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>