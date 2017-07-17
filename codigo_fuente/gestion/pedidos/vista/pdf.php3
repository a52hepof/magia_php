<?php

function col($c) {
    $r = intval($c) * 46;
    echo $r;
}

function height($v = false) {
    $v = ($v) ? $v : 1;
    $r = intval($v) * 25;
    echo $r;
}
/**
 * Se puede mandar:
 * Color #ffffff
 * color: rojo, amarillo, blanco, negro
 * tipo: 'titulo'
 * 
 * @param type $t
 */
function fillcolor($t){
    
    switch ($t) {
        case 'titulo':
            echo "#A9BCF5";
            break;
        case 'rojo':
            echo "red";
            break;
        case 'amarillo':
            echo "yellow";
            break;
        case 'blanco':
            echo "white";
            break;
        case 'negro':
            echo "black";
            break;

        default:
            echo "white";
            break;
    }
    
}

?>
<pdml>
    <head>
        <title>Document title goes here</title>
    <subject>Document subject goes here</subject>
    <keywords>example,php,document,and,stuff</keywords>
</head>
<body>

    <!-- para todas las paginas -->
    <header>
        <rotate angle="45" center="30mm,190mm">
            <div top=19cm left=3cm height=1.5cm>
                <font color="#FFD0E0" face=arial size=50pt>
                <b>This is a Water Mark</b>
                </font></div>
        </rotate>  

        <!-- logo -->
        <!-- direccion -->
        <!-- Qr -->

    </header>
    <!-- /para todas las paginas -->  

<page>

    <cell border="1" fillcolor="<?php fillcolor('rojo'); ?>" height="<?php echo height(); ?>" width="<?php col(12); ?>" align="center" next="break">
<?php _t('Pedido'); ?>
        
    </cell>


    

    <cell border="1" fillcolor="<?php fillcolor('titulo'); ?>" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center"><?php _t('Types'); ?></cell>
    <cell border="1" fillcolor="<?php fillcolor('titulo'); ?>" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center"><?php _t('Models'); ?></cell>
    <cell border="1" fillcolor="<?php fillcolor('titulo'); ?>" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="break"><?php _t('Materials'); ?></cell>

    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">123dddd</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">a</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="break">z</cell>

    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">2</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">b</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="break">y</cell>

    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">3</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">c</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="break">x</cell>

    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">4</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">d</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="break">a4</cell>
        
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">5</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">e</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="break">e5</cell>    
    
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">6</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">f</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="break">f6</cell>
            

    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">7</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="right">g</cell>
    <cell border="1" height="<?php echo height(); ?>" width="<?php col(4); ?>" align="center" next="break">g7</cell>
    
    
    


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


















    <cell border="1" width="552" next="break">552/12=46</cell>


    <cell border="1" width="138" next="right">138</cell>
    <cell border="1" width="138" next="right">138</cell>
    <cell border="1" width="138" next="right">138</cell>
    <cell border="1" width="138" next="break">138</cell>
    <br>
    <cell border="1" width="138" next="break">138</cell>
    <cell border="1" width="276" next="break">276</cell>
    <cell border="1" width="414" next="break">414</cell>
    <cell border="1" width="552" next="break">552</cell>


    <br>
    puesto con funcion col();
    <br>
    <cell border="1" width="<?php col(3); ?>" next="break"><?php col(1); ?></cell>
    <cell border="1" width="<?php col(6); ?>" next="break">276</cell>
    <cell border="1" width="<?php col(9); ?>" next="break">414</cell>
    <cell border="1" width="<?php col(12); ?>" next="break">552</cell>
    <br>

    <cell border="1" width="<?php col(3); ?>" next="break">Esta es la forma</cell>



    <br>
    <br>
    <br>

    <?php
    $talla = 46;
    $t = 46;
    for ($i = 1; $i < 13; $i++) {
        echo '<cell border="1" width="' . $talla . '" next="right">' . $t . '</cell>';
        $t = $t + $talla;
    }
    ?>  
</page>
<page>Pedido</page>
<page>condiciones</page>

</body>
</pdml>
