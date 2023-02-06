<?php
require "conexao.php";
?>

<section class="pginicial">

<nav class="navegacao">
	<div class="wrapper">
		<nav class="menu">
			<ul>
				<li class="menu_item"><a href='index.php'>Cadastro</a></li>
				<li class="menu_item"><a href='consulta.php'>Consulta</a></li>
			</ul>
		</nav>
	</div>
</nav>

<div class="wrapper">

<div class="info">
    <h3 class="msg">Produtos Cadastrados</h3>
    <h5 class="msgAlerta"><?=$msg?></h5>
</div>

<table class="tblista">
	
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Nome do Produto</th>
        <th>Descrição do Produto</th>
		<th>Preço do Produto</th>
        <th>Ação</th>
    </thead>
    
    <tbody>

<?php

    $sqlconsulta = "SELECT * FROM dados";
    $resultado = mysqli_query($link,$sqlconsulta);

    $numlinha = 1;

    while($linha = mysqli_fetch_array($resultado)){
                
        echo "<td class='colnome'>$linha[nome]</td>";
        echo "<td class='colemail'>$linha[email]</td>";
		echo "<td class='colproduto'>$linha[nomeproduto]</td>";
		echo "<td class='coldescricao'>$linha[descricao]</td>";
		echo "<td class='colpreco'>$linha[preco]</td>";
        echo "</tr>";
        $numlinha++;
    }
?>


<!--//linhas da tabela-->
 
    </tbody>
</table>



</div>

</section>



<?php
?>