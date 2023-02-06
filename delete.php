<?php
require 'conexao.php';

$codigo = 0;

if(!empty($_GET['codigo']))
{
    $codigo = $_REQUEST['codigo'];
}

if(!empty($_POST))
{
    $codigo = $_POST['codigo'];

    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM dados where codigo = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($codigo));
    Banco::desconectar();
    header("Location: Produto.php");
}
?>

<?php
$consulta = "select * from dados";
$resultado = mysqli_query($link, $consulta);
$codigo = $_GET['codigo_produto'];
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>OrlanStore - Site de Compra e Venda Online | Finalizar Compra</title>
    </head>

    <body>
        <div class="container">
            <div class="span10 offset1">
                <div class="row">
                </div>
                <form class="form-horizontal" action="delete.php" method="post">
                    <input type="hidden" name="codigo" value="<?php echo $codigo;?>" />
                    <div class="alert alert-danger"> Deseja finalizar a compra?
                    </div>
					
			
                    <div class="form actions">
					
                        <a href="index.php" type="btn" class="btn btn-danger">Sim</a>
						
						
                        <a href="Produto.php" type="btn" class="btn btn-default">Não</a>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

    </html>
