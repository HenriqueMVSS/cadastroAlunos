
<title>Criação do banco</title>
<?

require "config.php";
$banco="jclDb";
pg_query ("CREATE DATABASE $banco") or die ("Não foi possível criar banco de dados ".pg_last_error());
pg_close($conexao);
echo "Banco de dados criado: ".$banco;
?>

