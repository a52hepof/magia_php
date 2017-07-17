<?php

function col($c) {
    $r = intval($c) * 46;
    echo " width=\"$r\" ";
}

function height($v = false) {
    $v = ($v) ? $v : 1;
    $r = intval($v) * 20;
    echo " height=\"$r\" ";
}

/**
 * Se puede mandar:
 * Color #ffffff
 * color: rojo, amarillo, blanco, negro
 * tipo: 'titulo'
 * 
 * @param type $t
 */
function fillcolor($t = false) {

    switch ($t) {
        case 'titulo':
            echo " fillcolor=\"#A9BCF5\" ";
            break;
        case 'rojo':
            echo " fillcolor=\"red\" ";
            break;
        case 'amarillo':
            echo " fillcolor=\"#yellow\" ";
            break;
        case 'blanco':
            echo " fillcolor=\"#white\" ";
            break;
        case 'negro':
            echo " fillcolor=\"#black\" ";
            break;

        default:
            echo " ";
            break;
    }
}

function si() {
    echo '<cell border="1">z</cell>';
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
    <cell border="1" <?php fillcolor();  height();  col(6); ?> align="left" next="right"><?php _t('Empresa'); ?>:</cell>    
    <cell border="1" <?php fillcolor();  height() . col(6); ?> align="right" next="break">Perdida auditiva: <?php echo $perte_auditive;  ?></cell>

    <br>
    
    <cell border="1" <?php fillcolor();  height();  col(8); ?> align="left" next="right"><?php _t('Fecha'); ?>: <?php echo $pedidos_fecha; ?></cell>    
    <cell border="1" <?php fillcolor();  height() . col(4); ?> align="right" next="break"><?php _t('De numero'); ?>: <?php echo "$du_numero"; ?></cell>

    <cell border="1" <?php fillcolor();  height();  col(8); ?> align="left" next="right"><?php _t('Empresa'); ?>: <?php echo $pedidos_empresa; ?></cell>    
    <cell border="1" <?php fillcolor();  height() . col(4); ?> align="right" next="break"><?php _t('Fecha'); ?></cell>

    <cell border="1" <?php fillcolor();  height();  col(8); ?> align="left" next="right"><?php _t('Empresa'); ?>: <?php echo $pedidos_contacto; ?></cell>    
    <cell border="1" <?php fillcolor();  height() . col(4); ?> align="right" next="break"><?php _t('remake'); ?>: <?php echo "$remake"; ?></cell>
    
    <br>
    
    <cell border="1" <?php fillcolor('titulo');  height();  col(4); ?> align="left"  next="right"><?php _t('Types'); ?>:</cell>    
    <cell border="1" <?php fillcolor('titulo');  height();  col(4); ?> align="left"  next="right"><?php _t('Models'); ?>:</cell>    
    <cell border="1" <?php fillcolor('titulo');  height();  col(4); ?> align="left"  next="break"><?php _t('Materials'); ?>:</cell>    

    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$bte"; ?> : <?php _t('Bte'); ?></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$invisible"; ?> : <?php _t('Invisible'); ?></cell>        
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"><?php echo "$resine"; ?>  : <?php _t('Résine'); ?></cell>    


    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$rite"; ?> : <?php _t('rite'); ?></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$coquille"; ?> : <?php _t('coquille'); ?></cell>        
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"><?php echo "$silicone"; ?>  : <?php _t('Silicone'); ?></cell>    


    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$slim_tube"; ?> : <?php _t('slim_tube'); ?></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$conduit_seul"; ?> : <?php _t('conduit_seul'); ?></cell>        
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"><?php echo "$thermotec"; ?>  : <?php _t('thermotec'); ?></cell>    


    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$custom_dume"; ?> : <?php _t('custom_dume'); ?></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$epaulemnent"; ?> : <?php _t('epaulemnent'); ?></cell>        
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"><?php echo "$epaulemnent"; ?>  : <?php _t('epaulemnent'); ?></cell>    


    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$natation"; ?> : <?php _t('natation'); ?></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$prince_de_crave"; ?> : <?php _t('prince_de_crave'); ?></cell>        
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"><?php echo "$anti_bacterie"; ?>  : <?php _t('anti_bacterie'); ?></cell>    


    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$dormir"; ?> : <?php _t('dormir'); ?></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$iros"; ?> : <?php _t('iros'); ?></cell>        
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"><?php echo "$iros"; ?>  : <?php _t('iros'); ?></cell>    


    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php echo "$anti_bruit"; ?> : <?php _t('anti_bruit'); ?></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"></cell>    
    


    
    <br>
    
    
    
    <cell border="1" <?php fillcolor('titulo');  height();  col(4); ?> align="left"  next="right"><?php _t('Ventilación'); ?>:</cell>    
    <cell border="1" <?php fillcolor('titulo');  height();  col(4); ?> align="left"  next="right"><?php _t('Models'); ?>:</cell>    
    <cell border="1" <?php fillcolor('titulo');  height();  col(4); ?> align="left"  next="break"><?php _t('Opciones'); ?>:</cell>    


    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php _t("Derecha"); ?>: <?php echo $ventilation_droite; ?> mm</cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php _t("Marques"); ?>: <?php echo $marques; ?></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"><?php _t("Hoka"); ?>: <?php echo $hoka; ?></cell>    
      

    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php _t("Izquierda"); ?>: <?php echo $ventilation_droite; ?> mm</cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"><?php _t("Modelos"); ?>: <?php echo $models; ?></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"><?php _t("Hoka"); ?>: <?php echo $hoka; ?></cell>   
    
    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="right"></cell>    
    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"><?php _t("Hoka"); ?>: <?php echo $hoka; ?></cell>   
    
    
    <cell border="1" <?php fillcolor('titulo');  height();  col(4); ?> align="left"  next="right"><?php _t('Ventilación'); ?>:</cell>    
    <cell border="1" <?php fillcolor('titulo');  height();  col(4); ?> align="left"  next="right"><?php _t('Models'); ?>:</cell>     
    <cell border="1" <?php fillcolor();          height();  col(4); ?> align="left"  next="break"><?php _t("Hoka"); ?>: <?php echo $hoka; ?></cell> 
    
    

    <cell border="1" <?php fillcolor();  height();  col(4); ?> align="left"  next="break"><?php _t("Hoka"); ?>: <?php echo $hoka; ?>
        1234567890
        1234567890
        1234567890
        1234567890
        17890

        
    </cell> 
    
    
    
    <br> 

    
</page>
<page>Pedido</page>
<page>condiciones</page>

</body>
</pdml>
