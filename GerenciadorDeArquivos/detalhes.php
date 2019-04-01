<?php
$file = "";
if(isset($_GET["file"])){
    $file=$_GET["file"];
    echo "<h1> DETALHES DO ARQUIVO</h1>";
}
?>
<?php 
echo "Nome: ".basename($file)."<br />";
echo "Local arquivo: ".$file."<br />";
echo "Tamanho: ".filesize($file)."<br />";
echo 'Modificado em: '.date ("F d Y H:i:s.",filemtime($file));

?>
</table>