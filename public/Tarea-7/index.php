<?PHP

define('FPDF_FONTPATH','font/');
require('fpdf.php');

// Crear un nuevo documento PDF, indicar el tipo de orientación y la unidad de medida
$pdf = new FPDF('P','mm','A4');

// Añadir una página
$pdf->AddPage();

// Establecer la fuente del documento
$pdf->Image('./img/up.png', 10,8,22,25);
$pdf->SetFont('Courier','BIU',14);

// Crear una celda, se especifica el ancho, alto, texto, borde, salto de línea y alineación del texto
$pdf->Cell(190,20,'LISTADO DE CEDULAS', 0, 1, 'C');

// Salto de linea
//$pdf->Ln(1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(62,20,'No', 0, 0, 'C');
$pdf->Cell(62,20,'Cedula', 0, 0, 'C');
$pdf->Cell(62,20,'Nombre', 0, 0, 'C');

//Leer el archivo de texto
$archivo = fopen("cedulas.txt", "r");
//obtener el contenido del archivo
$contenido = fread($archivo, filesize("cedulas.txt"));
//cerrar el archivo
fclose($archivo);

$contenido = explode("\n", $contenido); 


$cont = 0;
$pdf->SetFont('Times','',12);
foreach($contenido as $linea){
    $linea = explode(" ", $linea);
    $pdf->Cell(62,20,$cont, 0, 0, 'C');
    $pdf->Cell(62,20,$linea[0], 0, 0, 'C');
    $pdf->Cell(62,20,$linea[1], 0, 1, 'C');

    $cont++;
}



// Mostrar el documento
$pdf->Output();

?>