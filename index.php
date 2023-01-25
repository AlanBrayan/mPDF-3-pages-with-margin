<?php 
  // importando el archivo principal de las librerias de composer
  require_once __DIR__ . '/vendor/autoload.php';
  // Crear instancia de la clase mpdf

  $mpdf = new \Mpdf\Mpdf([
      'default_font_size' => 8.6,
      'default_font' => 'Times New Roman'
  ]);


   //incluir documentos


  // include 'lista/1-comando-php.php';
  // include 'lista/2-etiqueta-html.php';

  //---Pagina principal----//
   include 'lista/3-tabla.php';

   //include 'lista/4-tabla.php';
   //include 'lista/5-tabla.php';
   //include 'lista/6-tabla.php';
  
  $mpdf->AddPage('lista/5-tabla.php');
  
  
  $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
  
  
  ?>