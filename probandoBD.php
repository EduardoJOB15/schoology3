<?php
	$host="127.0.0.1";
	$usuario="root";
	$contrasena="";
    $baseDatos="schoology";
    $comp = "no comparo";
    
    //$link = mysqli_connect($host,$usuario,$contrasena,$baseDatos,$puerto);
    //usaremos--> $link = mysqli_connect($host,$usuario,$contrasena,$baseDatos);

    //tomar este modelo para las paginas procesar-xxx

    $link = mysqli_connect($host,$usuario,$contrasena,$baseDatos);

    if (!$link){
		echo "No se pudo conectar";
		exit();
	}

    echo "Conexion exitosa"; 
    //SELECT retorna un areeglo asociativo
    $resultado = mysqli_query( $link, "SELECT codescuela, nombreescuela, website, direccion FROM escuela");
    $resultado2 = mysqli_query( $link, "SELECT nombre1, nombre2, apellido FROM usuario");
    $almacen = array();
    $indice = 0;
    $almacen2 = array();
    echo "<br> usuarios: ";
    
/*
$str = <<<EOF
"
EOF;
                
    for($i=1;$i<3;$i++){
        $fila = mysqli_fetch_array($resultado2);
        $almacen[$indice]["nombre1"] = $fila["nombre1"];
        $almacen[$indice]["nombre2"] = $fila["nombre2"];
        $almacen[$indice]["apellido"] = $fila["apellido"];
        $indice++;
    };
    echo "<br> almacen:";

    */
    
    echo gettype(json_encode($almacen)), "\n";
    var_dump($almacen);
    $arr = array(array("Eduardo","lolo"),array("kevin","225"));
    json_encode($arr);
    echo gettype($arr), "\n";
    
    $cl="";    
    $resultado3 = mysqli_query( $link, "SELECT nombre1, nombre2, apellido FROM usuario WHERE codusuario=1");
    $res = mysqli_fetch_array($resultado3);
    echo "<br> usando WHERE:";
    echo "<br>".$res["nombre1"];


    //logica login:

    $archivo = fopen('data/usuarioactivo.json','a+'); //r Lectura, w Escritura, a+ Anexar
    fwrite($archivo,'{"nombre1"');
        fwrite($archivo,':"');
        fwrite($archivo,$res["nombre1"]);
        fwrite($archivo,'",');
        fwrite($archivo,'"nombre2"');
        fwrite($archivo,':"');
        fwrite($archivo,$res["nombre2"]);
        fwrite($archivo,'"}');
            
    fclose($archivo);
    
//ingreso funcional:
    //mysqli_query( $link, "INSERT INTO usuario VALUES (3,'Pedro','Alfredo','Ramirez','lolo@gmail.com','555',null)");
    /*
    no tan funcional
    $k=0;
    do {
        echo "<br>".$almacen[$k]["nombre1"];
        $k=$k+1;
    } while (is_null($almacen[$k-1]));
    */
    /*
    medio funcional
    while (!is_null($almacen[$k])) {
        echo "<br>".$almacen[$k]["nombre1"];
            $k++;
    }
    */
    /*
    funcional
    for($j=0;$j<2;$j++){
        echo "<br>".$almacen[$j]["nombre1"];
    }
    */
    /*
    funcional
    for($i=1;$i<3;$i++){
        $fila = mysqli_fetch_array($resultado);
        echo "<br>".$fila["nombreescuela"].", website: ".$fila["website"].", direccion: ".$fila["direccion"].", codigo: ".$fila["codescuela"];
        $almacen[$indice]["nombreescuela"] = $fila["nombreescuela"];
        $indice++;
    };
    echo "<br> almacen:";
    echo "<br>".$almacen[1]["nombreescuela"];
    */


    /*
    funcional
    for($i=1;$i<3;$i++){
        $fila = mysqli_fetch_array($resultado);
        echo "<br>".$fila["nombreescuela"].", website: ".$fila["website"].", direccion: ".$fila["direccion"].", codigo: ".$fila["codescuela"];
        if($fila["nombreescuela"] == "LEMPIRA"){
          $comp = "si comparo";//si comparo
        };
    };

    */
    /*
    while(($fila = mysqli_fetch_array($resultado)))
        echo "<br>".$fila["nombreescuela"].", website: ".$fila["website"].", direccion: ".$fila["direccion"].", codigo: ".$fila["codescuela"];

    */
    echo "<br> "."sali del siclo";
    //echo "<br> ".$comp;
    mysqli_close($link);
    echo "<br>Conexion cerrada";

?>