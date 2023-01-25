<?php
//$mpdf->SetHTMLHeader('<img src="lista/1.jpg" style="float: left; margin: 0px 0px 50px 1px;" width="310" height="70"/>');
$html = '
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PDF</title>
      <style>
      <style>
         tad {
         border:0px;
         }
         table {
         border-spacing:0px;
         width: 100%;  
         }
         em {
         font-weight: bold;
         }
         #light-table {
         border-style:double;
         border-width: 4.5px 4.5px 4.5px;
         }
         table, td,th {
            border:0.1px solid black;
            }
         #light-table1 {
         width:100%;
         }
         #light-table2 {
         width: 100%;  
         height:
         padding-top: 1px;
         padding-bottom: -1px;
         text-align: left;
         margin-top: -15px;
         margin-bottom: -10px;
         }

         #light-table3 {
         width: 100%;  
         height:
         padding-top: 1px;
         padding-bottom: -1px;
         text-align: left;
         margin-top: -15px;
         margin-bottom: 12px;
         }
         #light-table4 {
         width: 100%;  
         height:
         padding-top: 12px;
         padding-bottom: 30px;
         text-align: left;
         margin-top: 0px;
         margin-bottom: 20px;
         }
         #light-table4 {
         width: 100%;  
         height:
         padding-top: 7px;
         padding-bottom: 30px;
         text-align: left;
         margin-top: -10px;
         margin-bottom: -10px;
         }
         #leftdivcontainer {
         vertical-align: middle;
         width: 100%;
         text-align: center;
         padding:10px;
         }
         #light-table-paragraph {
         font-family: Droid;
         font-size: 8pt;
         text-align: left;
         line-height: 40px;
         }
         h3 {
         padding: 0 4px;
         }
         .clearfix:after {
         clear: both;
         }
         .clearfix:before,
         .clearfix:after {
         content: " ";
         display: table;
         }
         input[type=checkbox] {
         transform: scale(14.5);
         }
         .sub_div {
         position: absolute;
         bottom:60px;
         left:645px;
         }
         #leftdivcontainer1 {
         width: 100%;
         }
         .leftdiv51 {
         float: left;
         position: relative;
         width:5%; 
         padding-top: 0px;
         } 
         .leftdiv52 {
         float: right;
         position: absolute;
         width:94%; 
         padding-left: 3.5pt; 
         } 
         .leftdiv53 {
         float: left;
         position: relative;
         width:5%; 
         padding-top: 0px;
         } 
         .leftdiv54 {
         float: right;
         position: relative;
         width:94%; 
         } 
         .leftdiv55 {
         float: left;
         position: relative;
         width:5%; 
         padding-top: 0px;
         } 
         .leftdiv56 {
         float: left;
         position: absolute;
         width:94%;
         } 
         .leftdiv57 {
         float: left;
         position: relative;
         width:5%; 
         padding-top: 0px;
         } 
         .leftdiv58 {
         float: left;
         position: absolute;
         width:94%;
         } 
         .leftdiv59 {
         float: left;
         position: relative;
         width:5%; 
         padding-top: 0px;
         } 
         .leftdiv40 {
         float: left;
         position: absolute;
         width:94%;
         } 
         .leftdiv41 {
         float: left;
         position: relative;
         width:5%; 
         padding-top: 0px;
         } 
         .leftdiv42 {
         float: left;
         position: absolute;
         width:94%;
         } 
         .leftdiv43 {
         float: left;
         position: relative;
         width:5%; 
         padding-top: 0px;
         } 
         .leftdiv44{
         float: left;
         position: absolute;
         width:94%;
         } 
      </style>
   </head>
   <body style="font-family: timesnewroman;">

   <table cellspacing="0" cellpadding="0" style="border-collapse: collapse">
   <tr>
     <td
       colspan="2"
       style="
         width: 544.05pt;
         border-top-style: double;

         padding-right: 1.25pt;
         padding-left: 1.25pt;
         vertical-align: top;
       "
     >

         <span style="font-family: Gill Sans MT">DÉCIMA </span
         ><span style="font-family: Gill Sans MT">TERCERA</span
         ><span style="font-family: Gill Sans MT">.- </span
         ><span style="font-family: Gill Sans MT"
           >Ambas partes manifiestan que en este contrato no existe error,
           dolo, violencia o mala fe.</span
         >
   
     </td>
   </tr>
   <tr>
     <td
       colspan="2"
       style="
         width: 544.05pt;
         border-right-style: double;
         border-right-width: 4.5pt;
         border-left-style: double;
         border-left-width: 4.5pt;
         padding-right: 1.25pt;
         padding-left: 1.25pt;
         vertical-align: top;
       "
     >
       <p
         style="
           margin: 0pt 5.65pt 10pt 8.45pt;
           text-align: justify;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT"
           >Leído que fue por las partes que lo firman para constancia, en
           la Ciudad de Toluca de Lerdo,  a los </span
         ><span
           style="font-family: Gill Sans MT; text-decoration: underline"
           >dos</span
         ><span style="font-family: Gill Sans MT"> días del mes de </span
         ><span
           style="font-family: Gill Sans MT; text-decoration: underline"
           >julio</span
         ><span style="font-family: Gill Sans MT"> de</span
         ><span style="font-family: Gill Sans MT"> </span
         ><span
           style="font-family: Gill Sans MT; text-decoration: underline"
           >2022.</span
         >
       </p>
       <p
         style="
           margin: 0pt 5.65pt 10pt 8.45pt;
           text-align: justify;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT">&#xa0;</span>
       </p>
     </td>
   </tr>
   <tr>
     <td
       colspan="2"
       style="
         width: 544.05pt;
         border-right-style: double;
         border-right-width: 4.5pt;
         border-left-style: double;
         border-left-width: 4.5pt;
         padding-right: 1.25pt;
         padding-left: 1.25pt;
         vertical-align: top;
       "
     >
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >POR "EL GOBIERNO"</span
         >
       </p>
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: justify;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
     </td>
   </tr>
   <tr style="height: 93.4pt">
     <td
       style="
         width: 268.5pt;
         border-top-style: solid;
         border-top-width: 1.5pt;
         border-right-style: solid;
         border-right-width: 1.5pt;
         border-left-style: double;
         border-left-width: 4.5pt;
         padding-right: 2.75pt;
         padding-left: 1.25pt;
         vertical-align: top;
       "
     >
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span
           style="
             height: 0pt;
             text-align: left;
             display: block;
             position: absolute;
             z-index: 1;
           "
           ><img
             src="-C89Ht1y8MmHJZPiC.002.png"
             width="324"
             height="2"
             alt=""
             style="
               margin-top: 80.47pt;
               margin-left: 7.62pt;
               -aw-left-pos: 13.65pt;
               -aw-rel-hpos: column;
               -aw-rel-vpos: paragraph;
               -aw-top-pos: 80.85pt;
               -aw-wrap-type: none;
               position: absolute;
             " /></span
         ><span
           style="
             height: 0pt;
             text-align: left;
             display: block;
             position: absolute;
             z-index: 2;
           "
           ><img
             src="-C89Ht1y8MmHJZPiC.002.png"
             width="324"
             height="2"
             alt=""
             style="
               margin-top: 80.47pt;
               margin-left: 285.08pt;
               -aw-left-pos: 291.1pt;
               -aw-rel-hpos: column;
               -aw-rel-vpos: paragraph;
               -aw-top-pos: 80.85pt;
               -aw-wrap-type: none;
               position: absolute;
             " /></span
         ><span style="font-family: Gill Sans MT; font-weight: bold"
           >AUTORIZÓ</span
         >
       </p>
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
       <h1
         style="
           margin-top: 24pt;
           margin-bottom: 0pt;
           page-break-inside: avoid;
           page-break-after: avoid;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT">&#xa0;</span>
       </h1>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 10pt;
           line-height: 115%;
           font-size: 6pt;
         "
       >
         <span style="font-family: Calibri">&#xa0;</span>
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 0pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >ALFONSO CAMPUZANO RAMÍREZ</span
         >
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 0pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >DIRECTOR GENERAL DE INNOVACIÓN
         </span>
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 10pt;
           line-height: 115%;
           font-size: 11pt;
         "
       >
         <span style="font-family: Calibri">&#xa0;</span>
       </p>
     </td>
     <td
       style="
         width: 268.55pt;
         border-top-style: solid;
         border-top-width: 1.5pt;
         border-right-style: double;
         border-right-width: 4.5pt;
         padding-right: 1.25pt;
         padding-left: 3.5pt;
         vertical-align: top;
       "
     >
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >Vo. Bo.</span
         >
       </p>
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 0pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >C.P. MARTHA BEATRIZ ARISTA VÁZQUEZ</span
         >
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 0pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >   COORDINADORA ADMINISTRATIVA DE </span
         ><span style="font-family: Gill Sans MT; font-weight: bold"
           >LA SECRETARÍA DE</span
         ><span style="font-family: Gill Sans MT; font-weight: bold">
           FINANZAS</span
         >
       </p>
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
     </td>
   </tr>
   <tr>
     <td
       colspan="2"
       style="
         width: 544.05pt;
         border-style: solid double;
         border-width: 1.5pt 4.5pt;
         padding-right: 1.25pt;
         padding-left: 1.25pt;
         vertical-align: top;
       "
     >
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span
           style="
             height: 0pt;
             text-align: left;
             display: block;
             position: absolute;
             z-index: 0;
           "
           ><img
             src="-C89Ht1y8MmHJZPiC.002.png"
             width="324"
             height="2"
             alt=""
             style="
               margin-top: 65.78pt;
               margin-left: 140.37pt;
               -aw-left-pos: 146.4pt;
               -aw-rel-hpos: column;
               -aw-rel-vpos: paragraph;
               -aw-top-pos: 66.15pt;
               -aw-wrap-type: none;
               position: absolute;
             " /></span
         ><span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 0pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >MIGUEL ÁNGEL MARTÍNEZ URZUA</span
         >
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 0pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >“EL SERVIDOR PÚBLICO”
         </span>
       </p>
       <p
         style="
           margin: 0pt 5.65pt 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT">&#x10.80.4.5/topdf/pdf/contratopdf.phpa0;</span>
       </p>
     </td>
   </tr>
   <tr style="height: 93.65pt">
     <td
       colspan="2"
       style="
         width: 544.05pt;
         border-right-style: double;
         border-right-width: 4.5pt;
         border-left-style: double;
         border-left-width: 4.5pt;
         padding-right: 1.25pt;
         padding-left: 1.25pt;
         vertical-align: top;
       "
     >
       <p
         style="
           margin-top: 0pt;
           margin-left: 58.55pt;
           margin-bottom: 10pt;
           text-indent: -58.55pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 10pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >AUTORIZADO POR EL C. SUBSECRETARIO DE ADMINISTRACIÓN,
           MEDIANTE</span
         >
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 10pt;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
       <h2
         style="
           margin-top: 10pt;
           margin-bottom: 0pt;
           text-indent: 228.15pt;
           page-break-inside: avoid;
           page-break-after: avoid;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT">OFICIO No. </span
         ><span
           style="font-family: Gill Sans MT; text-decoration: underline"
           >20706000000000L-</span
         ><span
           style="font-family: Gill Sans MT; text-decoration: underline"
           >1874</span
         ><span
           style="font-family: Gill Sans MT; text-decoration: underline"
           >/2022,</span
         >
       </h2>
       <p
         style="
           margin-top: 6pt;
           margin-bottom: 6pt;
           text-indent: 228.15pt;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >DE FECHA: </span
         ><span
           style="
             font-family: Gill Sans MT;
             font-weight: bold;
             text-decoration: underline;
           "
           >2</span
         ><span
           style="
             font-family: Gill Sans MT;
             font-weight: bold;
             text-decoration: underline;
           "
         >
           DE </span
         ><span
           style="
             font-family: Gill Sans MT;
             font-weight: bold;
             text-decoration: underline;
           "
           >AGOSTO</span
         ><span
           style="
             font-family: Gill Sans MT;
             font-weight: bold;
             text-decoration: underline;
           "
         >
           DE 2022.</span
         ><span
           style="
             font-family: Gill Sans MT;
             font-weight: bold;
             text-decoration: underline;
             color: #ffffff;
           "
           >DE ENERO DE 2022.</span
         >
       </p>
       <p
         style="
           margin-top: 6pt;
           margin-left: 30.2pt;
           margin-bottom: 6pt;
           text-align: center;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT">&#xa0;</span>
       </p>
     </td>
   </tr>
   <tr>
     <td
       colspan="2"
       style="
         width: 544.05pt;
         border-top-style: solid;
         border-top-width: 1.5pt;
         border-right-style: double;
         border-right-width: 4.5pt;
         border-left-style: double;
         border-left-width: 4.5pt;
         padding-right: 1.25pt;
         padding-left: 1.25pt;
         vertical-align: top;
       "
     >
       <p
         style="margin: 4pt 5.65pt 6pt; line-height: 115%; font-size: 9pt"
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >Nota: </span
         ><span style="font-family: Gill Sans MT"
           >Se anexan copias de los documentos de</span
         ><span style="font-family: Gill Sans MT; font-weight: bold">
           “El Servidor Público”:</span
         >
       </p>
     </td>
   </tr>
   <tr>
     <td
       style="
         width: 268.5pt;
         border-left-style: double;
         border-left-width: 4.5pt;
         border-bottom-style: solid;
         border-bottom-width: 1.5pt;
         padding-right: 3.5pt;
         padding-left: 1.25pt;
         vertical-align: top;
       "
     >
       <p
         style="
           margin: 2pt 5.65pt 0pt 28.4pt;
           text-indent: -14.2pt;
           font-size: 9pt;
         "
       >
         <span style="font-family: Symbol"></span
         ><span style="font: 7pt"
           >&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span
         ><span style="font-family: Gill Sans MT"
           >Acta de Nacimiento</span
         >
       </p>
       <p
         style="
           margin: 2pt 5.65pt 0pt 28.4pt;
           text-indent: -14.2pt;
           font-size: 9pt;
         "
       >
         <span style="font-family: Symbol"></span
         ><span style="font: 7pt"
           >&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span
         ><span style="font-family: Gill Sans MT">CURP</span>
       </p>
       <p
         style="
           margin: 0pt 5.65pt 0pt 28.35pt;
           text-indent: -14.15pt;
           font-size: 9pt;
         "
       >
         <span style="font-family: Symbol"></span
         ><span style="font: 7pt"
           >&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span
         ><span style="font-family: Gill Sans MT"
           >R.F.C.                 
         </span>
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-bottom: 10pt;
           line-height: 115%;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT; font-weight: bold"
           >&#xa0;</span
         >
       </p>
     </td>
     <td
       style="
         width: 268.55pt;
         border-right-style: double;
         border-right-width: 4.5pt;
         border-bottom-style: solid;
         border-bottom-width: 1.5pt;
         padding-right: 1.25pt;
         padding-left: 3.5pt;
         vertical-align: top;
       "
     >
       <p
         style="
           margin: 2pt 5.65pt 0pt 29.25pt;
           text-indent: -14.2pt;
           font-size: 9pt;
         "
       >
         <span style="font-family: Symbol"></span
         ><span style="font: 7pt "
           >&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span
         ><span style="font-family: Gill Sans MT"
           >Credencial para Votar</span
         >
       </p>
       <p
         style="
           margin: 2pt 5.65pt 0pt 29.25pt;
           text-indent: -14.2pt;
           font-size: 9pt;
         "
       >
         <span style="font-family: Symbol"></span
         ><span style="font: 7pt "
           >&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span
         ><span style="font-family: Gill Sans MT"
           >Cartilla del Servicio Militar Nacional
         </span>
       </p>
       <p
         style="
           margin: 0pt 5.65pt 0pt 29.3pt;
           text-indent: -14.15pt;
           font-size: 9pt;
         "
       >
         <span style="font-family: Symbol"></span
         ><span style="font: 7pt"
           >&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span
         ><span style="font-family: Gill Sans MT"
           >Constancia de Estudios</span
         >
       </p>
     </td>
   </tr>
   <tr>
     <td
       colspan="2"
       style="
         width: 544.05pt;
         border-right-style: double;
         border-right-width: 4.5pt;
         border-left-style: double;
         border-left-width: 4.5pt;
         border-bottom-style: double;
         border-bottom-width: 4.5pt;
         padding-right: 1.25pt;
         padding-left: 1.25pt;
         vertical-align: top;
       "
     >
       <p
         style="
           margin-top: 0pt;
           margin-left: 8.45pt;
           margin-bottom: 0pt;
           text-align: justify;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT"
           >ESTA FOJA FORMA PARTE DEL CONTRATO INDIVIDUAL DE TRABAJO POR
           TIEMPO DETERMINADO QUE CELEBRA EL GOBIERNO DEL ESTADO DE MÉXICO
           CON </span
         ><span style="font-family: Gill Sans MT"
           >MIGUEL ÁNGEL MARTÍNEZ URZUA</span
         ><span style="font-family: Gill Sans MT">
           A TRES FOJAS ÚTILES, DEBIDAMENTE SIGNADAS </span
         ><span style="font-family: Gill Sans MT">A LOS </span
         ><span
           style="font-family: Gill Sans MT; text-decoration: underline"
           >DOS</span
         ><span style="font-family: Gill Sans MT"> </span
         ><span style="font-family: Gill Sans MT">DÍA</span
         ><span style="font-family: Gill Sans MT">S</span
         ><span style="font-family: Gill Sans MT"> DEL MES DE </span
         ><span
           style="font-family: Gill Sans MT; text-decoration: underline"
           >JULIO</span
         ><span style="font-family: Gill Sans MT"> DE </span
         ><span
           style="font-family: Gill Sans MT; text-decoration: underline"
           >2022</span
         ><span
           style="font-family: Gill Sans MT; text-decoration: underline"
           >.</span
         >
       </p>
       <p
         style="
           margin-top: 0pt;
           margin-left: 8.45pt;
           margin-bottom: 0pt;
           text-align: justify;
           font-size: 9pt;
         "
       >
         <span style="font-family: Gill Sans MT">&#xa0;</span>
       </p>
     </td>
   </tr>
 </table>
   </body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output();