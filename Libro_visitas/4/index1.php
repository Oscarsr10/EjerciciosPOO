<!DOCTYPE html>
<html lang="es">
<head>
    <title>Libro visitas</title>
    <meta charset="utf-8">
</head>
<body>
<?php
// require classes for the page
require_once ('html_class.php');
require_once ('table_class.php');
require_once ('form_class.php');


// instantiate classes (prepare them for use)
$HTMLPage = new html("Libro de visitas") ;
$MyTable = new table() ;
$MyForm = new form() ;
// start a table with a border, left alignment, and 30% width
$webpage = $MyTable->Begin(1, "center", "500") ;
$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->Begin("save_entry.php") ; // "proof" of polymorphism
$webpage .= $MyForm->InputLabel("Nombre","fname", true);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn(15,"left");
$webpage .= $MyForm->Input("text", "fname", "", "", 30);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Telefono","Tname", true);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->Input("tel", "Tname", "", "", 30);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();
$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Apellido","lname", true);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn(15,"left");
$webpage .= $MyForm->Input("text", "lname", "", "", 30);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Email","Ename", false);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->Input("email", "Ename", "", "", 30);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();
$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Estudios","Esname", false);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn(15,"left");
$webpage .= $MyForm->Input("radio", "Primarios", "", "", 30);
$webpage .= $MyForm->Input("radio", "Secundarios", "", "", 30);
$webpage .= $MyForm->Input("radio", "Superiores", "", "", 30);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Edad","Edname", false);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->Desplegable("edad", "edad", "<25", "25-35", ">35");
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();
$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Comentarios","comments", true);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn(20);
$webpage .= $MyForm->Textarea("comments", 90, 15);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();
$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn(25, "center", "","","#088A08");
$webpage .= $MyForm->Input("submit", "submit", "Guardar");
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();
$webpage .= $MyForm->form_end();
$webpage .= $MyTable->End();
$webpage .= $HTMLPage->page_end() ;
echo $webpage ;
?>
</body>
</html>