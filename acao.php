<?php

require 'conexao.php';


// Email address verification
function isEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if($_POST) {

    // Enter the email where you want to receive the message
    $emailTo = 'milenaserranomiron15@gmail.com';

    $email = addslashes(trim('email'));
    $nome = addslashes(trim($_POST['nome']));
    $nomeproduto = addslashes(trim($_POST['nomeproduto']));

    $array = array('emailMessage' => '', 'nomeMessage' => '', 'nomeprodutoMessage' => '');

    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Invalid email!';
    }
    if($nome == '') {
        $array['nomeMessage'] = 'Empty nome!';
    }
    if($nomeproduto == '') {
        $array['nomeprodutoMessage'] = 'Empty nomeproduto!';
    }
    if(isEmail($clientEmail) && $nome != '' && $nomeproduto != '') {
        // Send email
		$headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
		mail($emailTo, $nome . " (bootstrap contact form)", $nomeproduto, $headers);
    }
echo 'Mensagem enviada com sucesso!!!!!';

}


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
      echo "Mensagem gravada com sucesso!!!";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
