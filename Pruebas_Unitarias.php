<?PHP

// ================================================================================

namespace JD\Linio\Examen\PruebasUnitarias;

// ================================================================================
// ====== PHP - Solución A1 =======================================================

$ValoresA1 = array ( );

$Valor = array (
  0  => '',
  3  => 'Linio',
  5  => 'IT',
  35 => 'Linianos'
);

$Multiplos = array ( 3, 5 );

for ( $Numero = 1; $Numero < 101; $Numero ++ ) {

  $Valor [ 0 ] = $Numero;
  $IndiceValor = 0;

  foreach ( $Multiplos as $Multiplo ) {
    if ( $Numero % $Multiplo == 0 ) {
      $IndiceValor = ( int ) ( $IndiceValor . $Multiplo );
    }
  }

  $ValoresA1 [ ] = $Valor [ $IndiceValor ];
}

// ================================================================================
// ====== PHP - Solución A2 =======================================================

$ValoresA2 = array ( );

$Valor = array (
  'N'   => '',
  'N3'  => 'Linio',
  'N5'  => 'IT',
  'N35' => 'Linianos'
);

$Multiplos = array ( 3, 5 );

for ( $Numero = 1; $Numero < 101; $Numero ++ ) {

  $Valor [ 'N' ] = $Numero;
  $IndiceValor = 'N';

  foreach ( $Multiplos as $Multiplo ) {
    if ( $Numero % $Multiplo == 0 ) {
      $IndiceValor .= $Multiplo;
    }
  }

  $ValoresA2 [ ] = $Valor [ $IndiceValor ];
}

// ================================================================================

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>JD-Linio-Examen-Desarrollador_Backend_Sr-Pruebas_Unitarias</title>
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
.Tabla .Th,
.Tabla .Td {
  display: table-cell;
  width: 170px;
  padding: 10px;
  border: solid 1px #D7D7C4;
}
.Tabla .Th {
  text-align: center;
}
.Tabla .Td {
  text-align: left;
}

/* ============================================================ */

    </style>

  </head>

  <body>

    <!-- ===== Contenedor 1 ===== -->
    
    <div class="Contenedor1">
      <p class="T1" style="margin: 26px 0 0 80px">JD / Linio / Desafío - Desarrollador Backend Sr / Pruebas Unitarias</p>
    </div>

    <!-- ===== Contenedor 2 ===== -->

    <div class="Contenedor2"
         style="margin-top:15px">
      
      <!-- ===== Soluciones ===== -->

      <div class="Tabla" 
           style="margin:auto">

        <div style="display:block">
          <div class="Th" 
               style="border-width:0 1px 1px 0"><span class="T2">PHP - Solución A1</span></div>

          <div class="Th" 
               style="border-width:0 1px 1px 0"><span class="T2">PHP - Solución A2</span></div>

          <div class="Th" 
               style="border-width:0 0 1px 0"><span class="T2">JS - Solución A1</span></div>

        </div>

        <div style="display:block">

          <!-- ===== Soluciones PHP - A1 ===== -->
          
          <div class="Td" style="border-width:0 1px 0 0">
<?PHP
foreach ( $ValoresA1 as $V ) :
  echo 
'            <span class="' . ( ( \is_string ( $V ) ) ? 'C' : 'N' ) . '">' . $V . '</span><br/>' . "\n";
endforeach;
?>
          </div>

          <!-- ===== Soluciones PHP - A2 ===== -->

          <div class="Td" style="border-width:0 1px 0 0">
<?PHP
foreach ( $ValoresA2 as $V ) :
  echo 
'            <span class="' . ( ( \is_string ( $V ) ) ? 'C' : 'N' ) . '">' . $V . '</span><br/>' . "\n";
          endforeach;
?>        
          </div>

          <!-- ===== Soluciones JS - A1 ===== -->

          <div id="JS-Solucion-A1" class="Td" style="border-width:0"></div>

          <!-- ============================== -->

        </div>          

      </div>
      
    </div>

<!-- =================================================================== -->
<!-- ===== JavaScript - Solución A1 ==================================== -->

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

vJS_Solucion_A1 = document.getElementById ( 'JS-Solucion-A1' );
if ( vJS_Solucion_A1 != null ) {
  
  for ( var vI = 0 in vValores ) {
    vJS_Solucion_A1.innerHTML += 
    '<span class="' + ( ( typeof vValores [ vI ] == 'string'  ) ? 'C' : 'N' ) + '">' + vValores [ vI ] + '</span><br/>';
  }

}

// =========================================================

} ) ( );
</script>

<!-- =================================================================== -->

  </body>

</html>