<?php
$dir = "C:/Users/Aluno/Pictures";
$pag=1;
if (isset($_GET["dir"])) {
    $dir = $_GET["dir"];
}
if (isset($_GET["pag"])) {
    $pag = $_GET["pag"];
} 
// Sort in ascending order - this is default
$a = scandir($dir);
?>
<table style="width: 100%" border=1>
	<tr>
		<th></th>
		<th>Nome</th>
		<th>Excluir</th>
	</tr>
<?php
for ($i = 0; $i < count($a); $i ++) {
    $var = $a[$i];
    if ($var != '.' and $var != '..') {
        if ($i < ($pag * 5) && $i>=($pag-1)*5) {
            echo "<tr>";
            if (is_dir($dir . "/" . $var)) {
                echo "<td> <img src=\"pasta.jpg\" width=\"50\" height=\"50\" > </td>";
                echo "<td> <a href=\"lista.php?dir=" . $dir . "/" . $var . "\">$var.</a> </td>";
                echo "<br />";
            } else {
                echo "<td><img src=\"file.png\" width=\"50\" height=\"50\" > </td>";
                echo "<td><a href=\"detalhes.php?file=" . $dir . "/" . $var . "\">$var.</a> </td>";
                echo "<td> <a href=\"excluir.php?file=" . $dir . "/" . $var . "\" onclick='return confirmarExcluir()'>Excluir</button> </td>";
          
                
                echo "<br />";
            }
            echo "</td></tr>";
        }
    }
}
paginacao($a);

function paginacao($a){
    for ($j = 1; $j < count($a); $j++ ) {
        if(($j%5)==0 ){
            $pagina =$j/5;
            echo("<a href='lista.php?pag=".$pagina."'>Pagina ".$pagina."</a> |");
        }
    }
    
}
?>
</table>
<script type="text/javascript">
	function confirmarExcluir() {
    	return window.confirm("Tem certeza que quer excluir?");
}
</script>