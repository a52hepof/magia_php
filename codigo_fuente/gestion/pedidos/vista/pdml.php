<pdml>
    <head>
        <title>Document title goes here</title>
    <subject>Document subject goes here</subject>
    <keywords>example,php,document,and,stuff</keywords>


</head>
<body>
    <header>
        <rotate angle="45" center="30mm,190mm">
            <div top=19cm left=3cm height=1.5cm>
                <font color="#FFD0E0" face=arial size=50pt>
                <b>This is a Water Mark</b>
                </font></div>
        </rotate>
    </header>


<page>

    <?php 
    for($i=0; $i<1; $i++){
        echo '<cell border="1" width="270" height="25" next="right">'.$i.' Robinsonn c</cell>'; 
        echo '<cell border="1" width="270" height="25" next="right">'.$i.' Robinsonn cz</cell>'; 
        
    }
    ?>
    <br>
    <br>

    <?php 
    for($i=0; $i<3; $i++){
        echo '<cell border="1" width="180" height="25" next="right">'.$i.' Robinsonn c</cell>'; 
        echo '<cell border="1" width="180" height="25" next="right">'.$i.' Robinsonn cz</cell>'; 
        echo '<cell border="1" width="180" height="25" next="break">'.$i.' Robinsonn cz</cell>'; 
    }
    ?>
    <br>
    
    <?php 
    for($i=0; $i<7; $i++){
        echo '<cell border="1" width="180" height="25" next="right">'.$i.' Robinsonn c</cell>'; 
        echo '<cell border="1" width="180" height="25" next="right">'.$i.' Robinsonn cz</cell>'; 
        echo '<cell border="1" width="180" height="25" next="break">'.$i.' Robinsonn cz</cell>'; 
    }
    ?>
    <br>
    
    <?php 
    for($i=0; $i<7; $i++){
        echo '<cell border="1" width="180" height="25" next="right">'.$i.' Robinsonn c</cell>'; 
        echo '<cell border="1" width="180" height="25" next="right">'.$i.' Robinsonn cz</cell>'; 
        echo '<cell border="1" width="180" height="25" next="break">'.$i.' Robinsonn cz</cell>'; 
    }
    ?>
<page>



        </body>
        </pdml>
