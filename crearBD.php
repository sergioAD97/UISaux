
<?php


function crearBD(){
	$la_bd = "uisaux";
	$la_tabla = "usuarios";
	$db = mysqli_connect("localhost","root", "");
	$clave = md5('estudiante01');
	$clave1 = md5('estudiante02');
	$clave2 = md5('estudiante03');
	$clave3 = md5('administrativo04');
	$clave4 = md5('administrativo05');
	$clave5 = md5('administrativo06');
	$clave6 = md5('administrador07');
	$clave7 = md5('administrador08');
	$clave8 = md5('administrador09');
	$clave9 = md5('ejecutor10');
	$clave10 = md5('ejecutor11');
	$clave11 = md5('ejecutor12');
    
	if(!$db)
		die("Error al conectar...");

	//echo "creando bd $la_bd";
	$sql = "CREATE DATABASE IF NOT EXISTS $la_bd";

	if(!result==mysqli_query($db, $sql))
		die("Error al crear la BD $la_bd");

	//echo "Seleccionando la BD: $la_bd";
	if(!mysqli_select_db($db, $la_bd))
		die("Error al seleccionar la bd $la_bd");

	//echo "Creando tabla $la_tabla";
    $usuarios = "CREATE TABLE if not exists usuarios(
		nombre character varying(30) not null,
		apellido character varying(30) not null,
		codigo integer(30) not null,
		clave character varying(100) not null,
    usuario character varying(30) not null,
    PRIMARY KEY (codigo)
        );";
        
	
$auxiliaturas="CREATE TABLE IF not exists auxiliaturas(
            idaux int NOT NULL AUTO_INCREMENT,
            fecha_inicio Datetime not null,
            Administrativo_creador int(20) not null,
            estado varchar(20) not null,
            texto varchar(400) not null,
            auxiliar int(20) null,
            fecha_finalizacion Datetime null,
            primary key (idaux),
            FOREIGN KEY (Administrativo_creador) REFERENCES usuarios(codigo),
            FOREIGN KEY (auxiliar) REFERENCES usuarios(codigo)
            );";

    $postulaciones="CREATE TABLE IF not exists postulaciones(
            idpos int NOT NULL AUTO_INCREMENT,
            aspirante int(20) not null,
            fecha_postulacion Datetime not null,
            fecha_dada_baja Datetime null,
            estado varchar(20) not null,
            auxiliatura int not null,
            primary key (idpos),
            FOREIGN KEY (aspirante) REFERENCES usuarios(codigo),
            FOREIGN KEY (auxiliatura) REFERENCES auxiliaturas(idaux)
            );";


	
	if(!mysqli_query($db,$usuarios))
		die("error al ejecutar $usuarios");
	if(!mysqli_query($db,$auxiliaturas))
		die("error al ejecutar $auxiliaturas");
	if(!mysqli_query($db,$postulaciones))
		die("error al ejecutar $postulaciones");	

	$sql = "INSERT IGNORE INTO usuarios(nombre,apellido,codigo,clave,usuario)
    VALUES ('Jose Nelson','Amaris Ortiz',1100001,'$clave','estudiante'),
            ('Sergio Andres','Dulcey',1100002,'$clave1','estudiante'),
            ('Sebastian','Cardenas',1100003,'$clave2','estudiante'),
            ('Javier','Landazabal',1100004,'$clave3','administrativo'),
            ('David','Castro',1100005,'$clave4','administrativo'),
            ('Diego andres','Medina',1100006,'$clave5','administrativo'),
            ('Sidney Karina','Villalba',1100007,'$clave6','administrador'),
            ('Jaime Alfonso','Barragan Olarte',1100008,'$clave7','administrador'),
            ('Carmen Alicia','Daza Gómez',1100009,'$clave8','administrador'),
            ('Carlos Alberto','Pava',1100010,'$clave9','ejecutor'),
            ('Melkisedeth','Tinjaka',1100011,'$clave10','ejecutor'),
            ('Aurelio ','Gómez Gómez',1100012,'$clave11','ejecutor');";

     if (!$result=mysqli_query($db,$sql)) {
		die("<h3>* ERROR al insertar registros a la BD: <i>'$sql'</i></h3>".mysqli_error($db));
    }


	

	$sql= "INSERT IGNORE INTO auxiliaturas (fecha_inicio, Administrativo_creador, estado, texto, auxiliar)
    VALUES (now(), 1100004 , 'A', 'Colaborar en archivo, 20 horas semanales, conocimientos en ofimatica, ultimos semestres' , 1100001);";

    if (!$result=mysqli_query($db,$sql)) {
		die("<h3>* ERROR al insertar registros a la BD: <i>'$sql'</i></h3>".mysqli_error($db));
    }

    $sql= "INSERT IGNORE INTO auxiliaturas (fecha_inicio , Administrativo_creador , estado , texto)
    VALUES (now(), 1100005 , 'P', 'Auxiliar biblioteca,mínimo 2 horas diarias, ultimos semestres, ingreso por horas laboradas');";

    if (!$result=mysqli_query($db,$sql)) {
		die("<h3>* ERROR al insertar registros a la BD: <i>'$sql'</i></h3>".mysqli_error($db));
    }

    $sql= "INSERT IGNORE INTO auxiliaturas (fecha_inicio , Administrativo_creador , estado , texto, auxiliar , fecha_finalizacion)
    VALUES (now(), 1100006 , 'E', 'Auxiliar archivo, conocimientos en ofimatica, ultimos semestres e ingreso monetario dependiente de las horas que se cumplan' , 1100003, now());";

    if (!$result=mysqli_query($db,$sql)) {
		die("<h3>* ERROR al insertar registros a la BD: <i>'$sql'</i></h3>".mysqli_error($db));
    }
    
$sql= "INSERT IGNORE INTO postulaciones (aspirante , fecha_postulacion  , estado , auxiliatura)
VALUES (1100001, now(), 'A' , 1);";

    if (!$result=mysqli_query($db,$sql)) {
		die("<h3>* ERROR al insertar registros a la BD: <i>'$sql'</i></h3>".mysqli_error($db));
    }
    
    $sql= "INSERT IGNORE INTO postulaciones (aspirante , fecha_postulacion  , fecha_dada_baja , estado , auxiliatura)
    VALUES (1100003, now() , now(), 'I' , 3);";

    if (!$result=mysqli_query($db,$sql)) {
		die("<h3>* ERROR al insertar registros a la BD: <i>'$sql'</i></h3>".mysqli_error($db));
	}
	mysqli_close($db);
}
?>