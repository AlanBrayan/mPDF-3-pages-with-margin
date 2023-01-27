<?php
$mpdf->SetHTMLHeader('<img src="lista/1.jpg" style="float: left; margin: 0px 0px 40px 1px;" width="240 " height="60"/>');
$html = '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <style>
    <style>
      table, td,th {
      border:1px solid black;
      }
      .left {
      float: left;
      width: 125px;
      text-align: right;
      margin: 2px 10px;
      display: inline
      border:1px solid black;
      }
      .right {
      float: left;
      text-align: left;
      margin: 2px 10px;
      display: inline
      border:1px solid black;
      }
      tad {
      border:0px;
      }
      table {
      border-spacing:0px;
      }
      .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #eee;
      border-radius: 50%;
      }
      em {
      font-weight: bold;
      }
      tabla3.th {
      text-align: left;
      padding: 1px;
      }
      td, th {
      border:1px solid black;
      }
      tbody {
      border:1px solid black;
      border-bottom: 1px solid black;
      }
      tbody th, tfoot th {
      border:1px solid black;
      }
      tabla-4.th{
      border:1px solid black;
      }
      grande, 1, 2 {
      }
      }
      table.center {
      margin-left:auto; 
      margin-right:auto;
      }
      table.center {
      width:70%; 
      margin-left:15%; 
      margin-right:15%;
      }
      div.container {
      width:98%; 
      margin:1%;
      }
      fecha{
      }
      table#table1 {
      text-align:center; 
      margin-left:auto; 
      margin-right:0%; 
      width:100px;
      border-collapse: collapse;
      border:1px solid black;
      }
      tr,td {text-align:left;
      border:1px solid black;
      }
      segunda{
      border:1px solid black;
      border-collapse: collapse;
      }
      secretaria{ 
      float: right;
      }
      #columnaizq{
      border: 1px solid blue;
      float: left;
      width: 300px;
      height: 598px;
      height: 700px;
      margin-left: 2px;
      margin-top: 2px;
      background-color: rgb(122, 122, 124);
      position: absolute;
      }
      #columnader{
      /*border: 1px solid rgb(253, 237, 5);
      float: right;
      width: 496px;
      height: 700px;
      margin: 0;
      margin-top: 2px;
      position: relative;
      }
      .w1{
      width: 20%;
      padding: 70px;
      display: inline-block;
      }
      #light-table {
      border: 2px solid black;
      width: 100%;  
      height:
      padding-top: 0px;
      padding-bottom: 1px;
      text-align: left;
      margin-top: 1px;
      margin-bottom: 0px;
      }
      #light-table2 {
      width: 98%;  
      height:
      padding-top: 12px;
      padding-bottom: 10px;
      text-align: left;
      margin-top: -15px;
      margin-bottom: 12px;
      }
      #light-table3 {
      width: 100%;  
      height:
      padding-top: 7px;
      padding-bottom: 0px;
      text-align: left;
      margin-top: 0px;
      margin-bottom: 0px;
      }
      .leftdiv1 {
      float: left;
      position: relative;
      width:10%; 
      padding-top: 0px;
      padding-bottom: 12px;
      }     
      .leftdiv2 {
      float: left;
      position: relative;
      width:37%; 
      }
      pie-pagina{
      height: 130px;
      left: 50px;
      position: relative;
      top: -40px;
      width: 150px;
      }
      .leftdiv3 {
      float: left;
      position: relative;
      width:50%; 
      }
      .leftdiv p {
      display: block;
      width: 75%;
      margin: 0 auto !important;
      color:black;
      }
      #leftdivcontainer {
      vertical-align: middle;
      width: 100%;
      text-align: center;
      }
      #light-table-paragraph {
      font-size: 8pt;
      text-align: left;
      line-height: 20px;
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
      bottom:80px;
      left:600px;
      }
      p {
      margin-left:780px;
      }
      .leftdiv10 {
      float: left;
      left: 0%;
      position: absolute;
      width: 33%; 
      }
      #leftdivcontainer1 {
      vertical-align: middle;
      width: 100%;
      text-align: center;
      }
      .clearfix:before,
      .clearfix:after {
      content: " ";
      display: table;
      }
      #block_container {
      text-align: center;
      }
      #block_container > div {
      display: inline-block;
      vertical-align: middle;
      }
      #bloc1, #bloc2
      {
      display:inline;
      border:1px solid black;
      }
      #block1{
      padding: 12px;
      }
      .leftdiv21 {
      float: left;
      position: relative;
      width:35%; 
      padding-top: 0px;
      padding-bottom: 1px;
      } 
      .leftdiv22 {
      float: right;
      position: relative;
      width:35%; 
      padding-top: 0px;
      padding-bottom: 1px;
      } 
      .leftdiv23 {
      float: left;
      position: relative;
      width:35%; 
      padding-top: 0px;
      padding-bottom: 1px;
      } 
      .leftdiv24 {
      float: right;
      position: relative;
      width:35%; 
      padding-top: 0px;
      padding-bottom: 1px;
      } 
      .leftdiv31 {
      float: left;
      position: relative;
      width:3px; 
      padding-top: 0px;
      border:1px solid black;
      } 
      .leftdiv32 {
      float: left;
      position: relative;
      width:3px; 
      padding-top: 0px;
      border:1px solid black;
      } 
      .leftdiv33 {
      float: right;
      position: relative;
      width:10px; 
      border:1px solid black;
      } 
      .leftdiv34 {
      float: right;
      position: relative;
      width:180px; 
      border:1px solid black;
      }
      .leftdiv35 {
      float: left;
      position: relative;
      width:10px; 
      padding-top: 0px;
      border:1px solid black;
      } 
      .leftdiv36 {
      float: right;
      position: relative;
      width:180px; 
      border:1px solid black;
      }  
      .leftdiv37 {
      float: left;
      position: relative;
      width:10px; 
      padding-top: 0px;
      } 
      .leftdiv38 {
      float: right;
      position: relative;
      width:180px; 
      }
      .container {
      display: table;
      width: 20%;
      padding-bottom: 2px;
      }
      .table-row {
      display: table-row;
      height: 20px;
      width: 100px;
      display: table-cell;
      padding: 0px;
      }
      .table-cell {
      width: 29px;
      height: 17px;
      display: table-cell;
      padding: 2px;
      }
    </style>
  </head>
  <body>
    <div class="sub_div">
      <p>20301/NP-101/16 </p>
    </div>
    <div clas="container">
    <br><br>
    <div class="table-responsive" >
      <table  id="table1" style="width:30%">
        <tr>
          <th  style="width: 1px; border:1px solid black;">Consecutivo:&nbsp;</th>
          <th   style="text-align: right;">102</th>
        </tr>
      </table>
    </div>
    <br> 
    <div id="light-table">
    <table style="width:100%"   >
      <tr  style="border">
        <th colspan="3"  style="text-align: center;  border:1px solid black;  background-color: rgb(156, 156, 156) ; border-right: none; border-left: none; none; border-top: none; none; border-bottom: none;" >RECIBO PARA TRÁMITE DE PAGOS</th>
      </tr>
    </table>
    <div id="light-table1">
      <div id="leftdivcontainer" class="clearfix" style="border:1px solid black; border-left:none; border-right:none;">
        <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10">APELLIDO PATERNO</div>
        <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10">APELLIDO MATERNO</div>
        <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10">NOMBRE (S)</div>
        <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10"><b>{{paterno}}</em></div>
        <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10"><b>{{materno}}</em></div>
        <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10"><b>{{nombre}}</em></div>
      </div>
    </div>
    <table width="100%">
      <tr  colspan="3">
        <td style="text-align: left; width: 10%; border-left: none;">CLAVE DE SERVIDOR PÚBLICO: {{csp}</td>
        <td  colspan="2" style="text-align: left; width: 50%; border-right: none;">R.F.C: {{rfc}}</td>
      </tr>
      <tr  colspan="3">
        <td style="text-align: left; width: 50%; border-left: none;">CURP: {{curp}</td>
        <td  colspan="2" style="text-align: left; width: 50%; border-right: none;">CÓDIGO DE LA DEPENDENCIA: {{cdld}}</td>
      </tr>
      <tr  >
        <td colspan="3" style="text-align: left; border-left: none; border-right: none;">CATEGORÍA Y PUESTO:  {{asis}}</td>
      </tr>
      <div>
      </div>
    </table>
    <h4  align="center" id="tabla1">TIPO DE PAGO POR TERMINACIÓN DE LA RELACIÓN LABORAL </h4>
    <div id="leftdivcontainer" class="clearfix"   >
      <div class="leftdiv1">
        <p id="light-table-paragraph" >
          <br>
          &nbsp;   &nbsp; &nbsp;<b>FINIQUITO</em>
        </p>
      </div>
      <div style="font-family: dejavusans;" style="font-size: 7.9pt; " class="leftdiv2" id="light-table-paragraph">
        <div id="light-table5">
          <div id="leftdivcontainer">
            <table class="container">
              <tr class="table-row" style="padding-bottom:4px;">
                <td class="table-cell" style="text-align:center; padding-bottom:4px;">
                  X
                </td >
                <td class="table-cessll"  style="border-top: none; border-left: none; border-bottom: none; border-right: none; width:200px; height:30px; padding-left:10px; ">
                  Baja por renuncia
                </td>
              </tr>
            </table>
            <table class="container">
              <tr class="table-row">
                <td class="table-cell" style="text-align:center;">
                  X
                </td>
                <td class="table-cessll"  style="border-top: none; border-left: none; border-bottom: none; border-right: none; width:200px; height:30px; padding-left:10px;">
                  Baja por jubilacion
                </td>
              </tr>
            </table>
            <table class="container">
              <tr class="table-row">
                <td class="table-cell" style="text-align:center;">
                  X
                </td>
                <td class="table-cessll"  style="border-top: none; border-left: none; border-bottom: none; border-right: none; width:220px; height:30px; padding-left:10px;">
                  Indemnización por riesgo de trabajo
                </td>
              </tr>
            </table>
            <table class="container">
              <tr class="table-row">
                <td class="table-cell" style="text-align:center;">
                  X
                </td>
                <td class="table-cessll"  style="border-top: none; border-left: none; border-bottom: none; border-right: none; width:200px; height:30px; padding-left:10px;">
                  Laudo por juicio laboral
                </td>
              </tr>
            </table>
          </div>
          <div style="font-family: timesnewroman;" style="font-size: 7.4pt" class="leftdiv37" style="text-align: left" >
          </div>
          <div style="font-family: timesnewroman;" style="font-size: 7.4pt" class="leftdiv38" style="text-align: justify;">
          </div>
        </div>
      </div>
      <div >
        <table class="container">
          <tr class="table-row">
            <td class="table-cell" style="text-align:center;">
              X
            </td>
            <td class="table-cessll"  style="border-top: none; border-left: none; border-bottom: none; border-right: none; width:200px; height:30px; padding-left:10px;">
              Baja por inhabilitación
            </td>
          </tr>
        </table>
        <table class="container">
          <tr class="table-row">
            <td class="table-cell" style="text-align:center;">
              X
            </td>
            <td class="table-cessll"  style="border-top: none; border-left: none; border-bottom: none; border-right: none; width:200px; height:30px; padding-left:10px;">
              Baja por fallecimiento
            </td>
          </tr>
        </table>
        <table class="container">
          <tr class="table-row">
            <td class="table-cell" style="text-align:center;">
              X
            </td>
            <td class="table-cessll"  style="border-top: none; border-left: none; border-bottom: none; border-right: none; width:200px; height:30px;  padding-left:10px;">
              Vencimiento de contrato
            </td>
          </tr>
        </table>
        <table class="container">
          <tr class="table-row">
            <td class="table-cell" style="text-align:center; width:30px;" >
              X
            </td>
            <td class="table-cessll"  style="border-top: none; border-left: none; border-bottom: none; border-right: none; width:340px; height:30px;  padding-left:10px;">
              Otro Especificar: <b> PAGO DE NÓMINA DE PERSONAL </b>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div style="width: 100%;"  style=" height: 50%;">
    <div id="tabla1">
      <h4 id="tabla1" style="margin-left:10px; none; border-left: none;"> Partida Presupuestal: 126 010804010101 11010101 20706006000000L 1222 5100</h4>
      <table  style="width: 800px">
        <tr>
          <td style="text-align: center;" style="width: 10%; border-left: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            CLAVE
          </td>
          <td style="text-align: center;">PERCEPCIONES
            CONCEPTO
          </td>
          <td style="text-align: center;">IMPORTE</td>
          <td style="text-align: center;">CLAVE </td>
          <td style="text-align: center;">DEDUCCIONES
            CONCEPTO 
          </td>
          <td style="text-align: center; border-right: none;">IMPORTE</td>
        </tr>
        <tr>
          <th style="border-left: none;">1222</th>
          <td style="text-align:center;" >SUELDOS Y SALARIOS</td>
          <td style="text-align:center;">1,000.00</td>
          <th>5408</th>
          <td>I.S.R.Maria Anders</td>
          <td style="text-align:right; border-right: none;">574.38</td>
        </tr>
        <tr >
          <th style="text-align:center; border-left: none;" ></th style="border-left: none;">
          <td style="text-align:center;" ></td>
          <td></td>
          <th>5540</th>
          <td>CUOTA SERV. SAL.</td>
          <td style="text-align:right; border-right: none;" >274.82</td>
        </tr>
        <tr style="border-left: none;">
          <th  style="text-align:center; border-left: none;" ></th style="border-left: none;">
          <td style="text-align:center;" ></td>
          <td></td>
          <th>5541</th>
          <td>CUOTA SIST. SOL.</td>
          <td style="text-align:right; border-right: none;" >362.46</td>
        </tr>
        <tr>
          <th style="border-left: none;" style="text-align:center; border-left: none;" ></th style="border-left: none;">
          <td style="text-align:center;" ></td>
          <td></td>
          <th>5542</th>
          <td>CUOTA SIST. CAP</td>
          <td style="text-align:right; border-right: none;" >83.19</td>
        </tr>
        <tr>
          <th style="border-left: none;" style="text-align:center; border-left: none;" ></th style="border-left: none;">
          <td style="text-align:center;" ></td>
          <td></td>
          <th>5450</th>
          <td>DESC. TIEMPO NO LAB</td>
          <td style="text-align:right; border-right: none;" >0.00</td>
        </tr>
        <tr>
          <th style="border-left: none;" style="text-align:center; border-left: none;" ></th style="border-left: none;">
          <td style="text-align:center;" ></td>
          <td></td>
          <th>5451</th>
          <td>SANCIÓN POR IMPUNTUALIDAD </td>
          <td style="text-align:right; border-right: none;" >0.00</td>
        </tr>
        <tr>
          <th style="border-left: none;"></th style="border-left: none;">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td style="text-align:right; border-right: none;">&nbsp;</td>
        </tr>
        <tr style="border-left: none;">
          <th style="border-left: none;"></th style="border-left: none;">
          <th style="text-align: right; " >SUBTOTAL</th>
          <td style="text-align: center; ">1,000.00</td>
          <td></td>
          <th style="text-align: right; " >SUBTOTAL</th>
          <td style="text-align:right; border-right: none;">1,294.85</td>
        </tr>
        <tr style="border-left: none;">
          <th style="text-align: right; border-left: none;"  colspan="5">TOTAL LÍQUIDO A PAGAR $:</th>
          <td style="text-align:right; border-right: none;">1,294.85</td>
        </tr>
      </table>
      <div style="margin-left:10px;">
        <b> RECIBÍ</b> de la Caja General de Gobierno del Estado de México la cantidad de $ 5,942.00
      </div>
      <div style="margin-left:10px;">
        <b>(CINCO MIL NOVECIENTOS CUARENTA Y DOS PESOS 00/100 M.N.)</em>
      </div>
      <br>
      <div class="concepto" style="margin-left:10px; ">
        Por concepto de:  PAGO DE NÓMINA POR LOS TRABAJOS DESEMPEÑADOS EN EL CENTRO DE ATENCIÓN TELEFÓNICA DEL GOBIERNO DEL ESTADO DE MÉXICO, CORRESPONDIENTE A LA SEGUNDA QUINCENA DE DICIEMBRE, DEL 16 AL 31 DE DICIEMBRE DE 2022. 
      </div>
      <br>
      <div class="fecha" align="right" style="padding-right:10px;">
        Toluca, Estado de México; a 03 de octubre de 2022.
      </div>
      <br><br>
      <div class="julian" align="center">
        _____________________________________
      </div>
      <div class="fecha" align="center">
        <b>Lopez Lopez Julian</em>
      </div>
      <br>
      <div>
        <div  
          style="float:left;width: 64%;underline: green solid thin">&nbsp;&nbsp; &nbsp;_____________________________________</div>
        <div style="float:right;width: 20%;underline: red solid thin" style="left: 100px;" >___________________________________________</div>
      </div>
      <div style="clear:both"></div>
      <br>
      <div id="light-table2">
        <div id="leftdivcontainer" class="clearfix">
          <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv21"><b>ALFONSO CAMPUZANO RAMÍREZ
            DIRECTOR GENERAL DE INNOVACIÓN</em>
          </div>
          <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv22" ><b>C.P. MARTHA BEATRIZ ARISTA VÁZQUEZ 
            COORDINADORA ADMINISTRATIVA 
            DE LA SECRETARÍA DE FINANZAS</em>
          </div>
        </div>
      </div>
      <br><br><br>
      <div  
        style="float:left;width: 64%;underline: green solid thin">&nbsp;&nbsp; &nbsp;_____________________________________</div>
      <div style="float:right;width: 20%;underline: red solid thin" style="left: 100px;" >___________________________________________</div>
    </div>
    <div id="light-table3">
      <div id="leftdivcontainer" class="clearfix">
        <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv21"><b>FERNANDO MATA RIVERA
          DELEGADO ADMINISTRATIVO DE LA
          DIRECCIÓN GENERAL DE INNOVACIÓN
          </em>
        </div>
        <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv22" ><b>MTRO. RODOLFO ALEJANDRO LÓPEZ VIDEZ
          DIRECTOR GENERAL DE PERSONAL
          </em>
        </div>
      </div>
      <br><br><br>
    </div>
  </body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output();