<html>
<head>
<title>Relat&oacute;rio de Medicamentos</title>
<?php include ('config.php');  ?>
</head>

<body>
<form action="consulta_medicamento.php?botao=gravar" method="post" name="form1">
<table width="95%" border="1" align="center">
  <tr>
    <td colspan=5 align="center">Relat&oacute;rio de Medicamentos</td>
  </tr>
  <tr>
    <td width="18%" align="right">Classe do medicamento: </td>
    <td width="26%"><input type="text" name="nome_classe"  /></td>

    <td width="17%" align="right">Nome do Medicamento: </td>
    <td width="18%"><input type="text" name="medicamento" size="3" /></td>

    <td width="17%" align="right">Faz interação com: </td>
    <td width="18%"><input type="text" name="intera_com" size="3" /></td>

    <td width="17%" align="right">Composição: </td>
    <td width="18%"><input type="text" name="composicao" size="3" /></td>

    <td width="17%" align="right">Serve para: </td>
    <td width="18%"><input type="text" name="medicas" size="3" /></td>

    <td width="17%" align="right">Interação medicamentosa: </td>
    <td width="18%"><input type="text" name="interacao" size="3" /></td>

    <td width="21%"><input type="submit" name="botao" value="Consultar" /></td>
  </tr>
</table>
</form>

<?php if (@$_REQUEST['botao'] == "Consultar") { ?>

<table width="95%" border="1" align="center">
  <tr bgcolor="red">
    <th width="30%">ID Medicamento: </th>
    <th width="30%">Classe medicamento: </th>
    <th width="15%">Nome do Medicamento:</th>
    <th width="12%">Faz interação com:</th>
    <th width="12%">Tipo de interação:</th>
    <th width="12%">Composição: </th>
    <th width="12%">Serve para:</th>
    <th width="12%">Interação medicamentosa: </th>
  </tr>

<?php

	$medicamento = $_POST['medicamento'];

	
	$query = "SELECT *
			  FROM farmaco 
			  WHERE id_classe > 0 ";
	$query .= ($medicamento ? " AND medicamento LIKE '%$medicamento%' " : "");
	
	$query .= " ORDER by id_classe";
	$result = mysqli_query($con, $query);

/*	
	echo "<pre>";
	echo $query;
	echo mysql_error();
	echo "</pre>";
*/
	while ($coluna=mysqli_fetch_array($result)) 
	{
		
	?>    
    <tr>
      <th width="5%"><?php echo $coluna['id_classe']; ?></th>
      <th width="30%"><?php echo $coluna['nome_classe']; ?></th>
      <th width="15%"><?php echo $coluna['medicamento']; ?></th>
      <th width="12%"><?php echo $coluna['intera_com']; ?></th>
      <th width="12%"><?php echo $coluna['tipo_interacao']; ?></th>
      <th width="12%"><?php echo $coluna['composicao']; ?></th>
      <th width="12%"><?php echo $coluna['serve_para']; ?></th>
      <th width="12%"><?php echo $coluna['interacao']; ?></th>

        <td>
        <a 
            href="consulta_medicamento.php?pag=consulta_medicamento&id=<?php echo $coluna['id_classe']; ?>"
            >editar</a>
        </td>

    </tr>

    <?php
	// Fim do laço While
	} 
?>
</table>
<?php	
}
?>
</body>