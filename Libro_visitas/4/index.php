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
$webpage .= $MyTable->ColumnOn(10,"left");
$webpage .= $MyForm->Input("text", "fname", "", "", 30);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Telefono","Tname", true);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->Input("text", "Tname", "", "", 30);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();
$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Apellido","lname", true);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn(10,"left");
$webpage .= $MyForm->Input("text", "lname", "", "", 30);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Email","Ename", false);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->Input("text", "Ename", "", "", 30);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->RowOff();
$webpage .= $MyTable->RowOn();
$webpage .= $MyTable->ColumnOn();
$webpage .= $MyForm->InputLabel("Comments","comments", true);
$webpage .= $MyTable->ColumnOff();
$webpage .= $MyTable->ColumnOn(20);
$webpage .= $MyForm->Textarea("comments", 70, 15);
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