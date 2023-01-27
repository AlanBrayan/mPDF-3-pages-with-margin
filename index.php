<?php 
  // importando el archivo principal de las librerias de composer

use Mpdf\Tag\SetHtmlPageFooter;

  require_once __DIR__ . '/vendor/autoload.php';
  // Crear instancia de la clase mpdf

  $mpdf = new \Mpdf\Mpdf([
      'default_font_size' => 8.8,
      'default_font' => 'Gill Sans,Gill Sans MT,Calibri,sans-serif;'
      
  ]);



   //incluir documentos

  
   //require_once('plantilla2.php');
   //require_once('plantilla3.php');
   //$plantilla = getPlantilla();

   //$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
   //$mpdf->AddPage();
  // include 'lista/1-comando-php.php';
  // include 'lista/2-etiqueta-html.php';

  //---Pagina principal----//
   include 'lista/6-tabla.php';


   //include 'lista/4-tabla.php';


   //include 'lista/5-tabla.php';


   //include 'lista/6-tabla.php';
  

  



  
  //$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
  //$mpdf->Output('reporte.pdf', \Mpdf\Output\Destination::INLINE);//'reporte.pdf', \Mpdf\Output\Destination::DOWNLOAD
 // $mpdf->SetHTMLHeaderByName('MyHeader1');

  
  ?>