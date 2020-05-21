<?php
    $to = 'info@homecatering.pt';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $numPeople= $_POST["pessoas"];
    $description= $_POST["description"];
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $message ="Nova mensagem:<br> De: $name <br> Contact: $email  --  $phone <br> Numero de Pessoas: $numPeople <br> Descrição: $description";

    if (@mail($to, "Novo Orçamento de: $email", $message, $headers))
    {
        echo 'ok';
    }else{
        echo 'failed';
    }
    
?>
