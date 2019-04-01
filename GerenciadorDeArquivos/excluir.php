<?php
$file = "C:/Users/Aluno/Pictures";
if (isset($_GET["file"])) {
    $file = $_GET["file"];
}
if (unlink($file)) {
    echo ($file." foi deletado com sucesso!");
    echo "<td> <a href=\"lista.php\">Voltar página anterior</a> </td>";
} else {
    echo ($file." não foi deletado com sucesso! Lamentamos :(");
}

?>