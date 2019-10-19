<?PHP

// ================================================================================

namespace JD\Linio\Examen;

// ================================================================================
// ====== PHP - Solución ==========================================================

/* 
  El Array $Valores contiene los valores que se van a mostrar, números no multiplos ni de (3) y/o (5)
  y cadenas de texto según sea el caso: "Linio" (para multiplos de 3), "IT" (para multiplos de 5),
  y Linianos (para multiplos de 3 y 5).
*/
$Valores = array ( );

/*
  El Array $Valor contiene las cadenas de texto que pueden mostrarse.
  Por cada iteración se imprime una (1) cadena según sea el caso.
*/
$Valor = array (
  'N'   => 1,
  'N3'  => 'Linio',
  'N5'  => 'IT',
  'N35' => 'Linianos'
);

/*
  El Array $Multiplos contiene los números multiplos, que se analizan con cada 
  número de la secuencia de números del uno (1) al cien (100) mediante el operador Módulo (%).
*/
$Multiplos = array ( 3, 5 );

// La estructura (For) se utiliza para iterar sobre la secuencia de números del uno (1) al cien (100)
// incrementando a $Numero en uno (1).
for ( $Numero = 1; $Numero < 101; $Numero ++ ) {

  // Se inicializa $Valor [ 'N' ] con el valor $Numero que contiene el valor actual.
  $Valor [ 'N' ] = $Numero;

  // La variable $IndiceValor contiene el valor del indice que podría cambiar si el número actual
  // es multiplo de tres (3), cinco (5) ó ambos.
  $IndiceValor = 'N';

  // La estructura (Foreach) se utiliza para iterar sobre el Array $Multiplos, y comparar el número actual.
  foreach ( $Multiplos as $Multiplo ) {
    // Se analiza el valor de $Numero mediante la única estructura (If) permitida para este ejercicio,
    // si el valor de $Numero es multiplo del valor de $Multiplo, concatena a $IndiceValor el valor de $Multiplo.
    if ( $Numero % $Multiplo == 0 ) {
      $IndiceValor .= $Multiplo;
    }
  }

  // Se agrega a $Valores el valor seleccionado según el caso.
  $Valores [ ] = $Valor [ $IndiceValor ];
}

// ================================================================================

/* ==========

  Nota:
  
  En las presentaciones tanto para la solución en PHP (HTML con bloques de código PHP embebido) como 
  JS se utiliza un operador ternario, con efectos de agregar clases CSS a los valores cadenas de texto 
  y números, estas estructuras no forman parte de la solución, respetando el requisito de utilizar 
  una (1) estructura (If).

========== */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>JD-Linio-Desafío_Desarrollador_BackEnd_Sr</title>
    <style type="text/css">
/* ============================================================ */

/* === Globales ========== */

* {
  margin: 0;
  padding: 0;
}

html, body {
  height: 100%;
}

body {
  background-color: #F9F9F9;
}

.Contenedor1,
.Contenedor2,
.T1,
.T2 {
  font-family: "Myriad Pro", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-size: 16px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 1;
  color: #646472;
}

/* === Titulo 1 ========== */

.T1 {
  display: inline-block;
  font-size: 22px;
  font-weight: 900;
}

/* === Titulo 2 ========== */

.T2 {
  display: block;
  width: auto;
  height: 13px;
  font-weight: 600;
}

/* === Numero ========== */

.N {
  color: #3F3F48;
}

/* === Cadena ========== */

.C {
  color: #0E87B2;
}

/* === Contenedor 01 ========== */

.Contenedor1 {
  display: block;
  width: auto;
  height: 70px;
  background-color: #F0F0F0;
  border-bottom: 1px solid #DFDFD0;
}

/* === Contenedor 02 ========== */

.Contenedor2 {
  display: block;
  width: auto;
  height: auto;
  padding: 20px 40px;
  background-color: #F0F0F0;
  border-top: 1px solid #DFDFD0;
}

/* === Tabla ========== */

.Tabla {
  display: table;
  border: solid 1px #D7D7C4;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.Tabla .Th {
  display: block;
  padding: 15px 10px;
  border-bottom: solid 1px #D7D7C4;
  text-align: center;
}
.Tabla .Td {
  display: table-cell;
  width: 100px;
  padding: 10px;
  border: solid 1px #D7D7C4;
  text-align: left;
}

/* ============================================================ */

    </style>

  </head>

  <body>

    <!-- ===== Contenedor 1 ===== -->
    
    <div class="Contenedor1">
      <p class="T1" style="margin: 26px 0 0 80px">JD / Linio / Desafío - Desarrollador BackEnd Sr.</p>
    </div>

    <!-- ===== Contenedor 2 ===== -->

    <div class="Contenedor2"
         style="margin-top:15px">

      <div style="display:table; margin:auto">

        <div style="display:table-cell">

          <!-- ===== PHP - Solución ======================================== -->

          <div class="Tabla" style="margin:auto">
        
            <div class="Th"><span class="T2">PHP - Solución</span></div>

            <div style="display:block">

              <!-- ========================== -->
          
              <div class="Td" style="border-width:0 1px 0 0">
<?PHP
              for  ( $I = 0; $I < 25; $I ++ ) :
                echo 
                '            <span class="' . ( ( \is_string ( $Valores [ $I ] ) ) ? 'C' : 'N' ) . '">' . $Valores [ $I ] . '</span><br/>' . "\n";
              endfor;
?>
              </div>

              <!-- ========================== -->

              <div class="Td" style="border-width:0 1px 0 0">
<?PHP
              for  ( $I = 25; $I < 50; $I ++ ) :
                echo 
                '            <span class="' . ( ( \is_string ( $Valores [ $I ] ) ) ? 'C' : 'N' ) . '">' . $Valores [ $I ] . '</span><br/>' . "\n";
              endfor;
?>
              </div>

              <!-- ========================== -->

              <div class="Td" style="border-width:0 1px 0 0">
<?PHP
              for  ( $I = 50; $I < 75; $I ++ ) :
                echo 
                '            <span class="' . ( ( \is_string ( $Valores [ $I ] ) ) ? 'C' : 'N' ) . '">' . $Valores [ $I ] . '</span><br/>' . "\n";
              endfor;
?>          
              </div>          
          
              <!-- ========================== -->

              <div class="Td" style="border-width:0">
<?PHP
              for  ( $I = 75; $I < 100; $I ++ ) :
                echo 
                '            <span class="' . ( ( \is_string ( $Valores [ $I ] ) ) ? 'C' : 'N' ) . '">' . $Valores [ $I ] . '</span><br/>' . "\n";
              endfor;
?>
              </div>

              <!-- ========================== -->

            </div>

          </div>

          <!-- ============================================================= -->

        </div>
        
        <!-- ============================================================= -->

        <div style="display:table-cell; padding-left:40px">

          <!-- ===== JS - Solución ========================================= -->

          <div class="Tabla" style="margin:auto">
        
            <div class="Th"><span class="T2">JS - Solución</span></div>

            <div style="display:block">

              <!-- ========================== -->
          
              <div id="JS-Solucion-Columna-1"
                   class="Td" style="border-width:0 1px 0 0"></div>

              <!-- ========================== -->

              <div id="JS-Solucion-Columna-2"
                   class="Td" style="border-width:0 1px 0 0"></div>

              <!-- ========================== -->

              <div id="JS-Solucion-Columna-3"
                   class="Td" style="border-width:0 1px 0 0"></div>          
          
              <!-- ========================== -->

              <div id="JS-Solucion-Columna-4" 
                   class="Td" style="border-width:0"></div>

              <!-- ========================== -->

            </div>
          
          </div>

          <!-- ============================================================= -->

        </div>

      </div>

      <!-- =============================================================== -->

    </div>


<!-- =================================================================== -->
<!-- ===== JavaScript - Solución ======================================= -->

<script type="text/javascript">
( function ( ) {

// === Solución ========================================

var vValores = [ ];

var vValor = [ ];
vValor [ 0 ]  = '';
vValor [ 3 ]  = 'Linio';
vValor [ 5 ]  = 'IT';
vValor [ 35 ] = 'Linianos';

var vMultiplos = [ 3, 5 ];

for ( var vNumero = 1; vNumero < 101; vNumero ++ ) {

  vValor [ 0 ] = vNumero;
  var vIndiceValor = 0;

  for ( var vI in vMultiplos ) {
    if ( vNumero % vMultiplos [ vI ] == 0 ) {
      vIndiceValor = parseInt ( vIndiceValor.toString ( ) + vMultiplos [ vI ].toString ( ) );
    }
  }

  vValores [ vNumero - 1 ] = vValor [ vIndiceValor ];
}

// === Presentación ========================================

vJS_Solucion_Columna_1 = document.getElementById ( 'JS-Solucion-Columna-1' );
vJS_Solucion_Columna_2 = document.getElementById ( 'JS-Solucion-Columna-2' );
vJS_Solucion_Columna_3 = document.getElementById ( 'JS-Solucion-Columna-3' );
vJS_Solucion_Columna_4 = document.getElementById ( 'JS-Solucion-Columna-4' );

if ( vJS_Solucion_Columna_1 != null ) {
  for ( var vI = 0; vI < 25; vI ++ ) {
    vJS_Solucion_Columna_1.innerHTML += 
    '<span class="' + ( ( typeof vValores [ vI ] == 'string'  ) ? 'C' : 'N' ) + '">' + vValores [ vI ] + '</span><br/>';
  }
}
if ( vJS_Solucion_Columna_2 != null ) {
  for ( var vI = 25; vI < 50; vI ++ ) {
    vJS_Solucion_Columna_2.innerHTML += 
    '<span class="' + ( ( typeof vValores [ vI ] == 'string'  ) ? 'C' : 'N' ) + '">' + vValores [ vI ] + '</span><br/>';
  }
}
if ( vJS_Solucion_Columna_3 != null ) {
  for ( var vI = 50; vI < 75; vI ++ ) {
    vJS_Solucion_Columna_3.innerHTML += 
    '<span class="' + ( ( typeof vValores [ vI ] == 'string'  ) ? 'C' : 'N' ) + '">' + vValores [ vI ] + '</span><br/>';
  }
}
if ( vJS_Solucion_Columna_4 != null ) {
  for ( var vI = 75; vI < 100; vI ++ ) {
    vJS_Solucion_Columna_4.innerHTML += 
    '<span class="' + ( ( typeof vValores [ vI ] == 'string'  ) ? 'C' : 'N' ) + '">' + vValores [ vI ] + '</span><br/>';
  }
}

// =========================================================

} ) ( );
</script>

<!-- =================================================================== -->

  </body>

</html>