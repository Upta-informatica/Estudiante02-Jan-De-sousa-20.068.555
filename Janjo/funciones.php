<?php

function insertarCliente($n,$d,$t){
	require "conexion.php";
	    $sql = "INSERT INTO clientes(nombre_completo,direccion,telefono,borrado,fecha_add) VALUES ('$n','$d','$t','n',current_date);";
    $consulta = $base_de_datos->query( $sql );
}


function actualizarCliente($i,$n,$d,$t){
	require "conexion.php";
	    $sql = "UPDATE clientes SET nombre_completo='$n',direccion='$d',telefono='$t' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}


function eliminarCliente($i){
	require "conexion.php";
	    $sql = "UPDATE clientes SET borrado='s' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}


function listarClientes(){
	require "conexion.php";
	    $sql = "SELECT * FROM clientes WHERE borrado='n'";
    $consulta = $base_de_datos->query( $sql );
    return $consulta->fetchAll(PDO::FETCH_OBJ);
}


function buscarCliente($id){
	require "conexion.php";
	$sql = "SELECT * FROM clientes WHERE borrado='n' AND id='$id'";
    $consulta = $base_de_datos->query( $sql );
    $r = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $r[0];
}

function insertarDoctor($n,$d,$t){
	require "conexion.php";
	    $sql = "INSERT INTO doctores(nombre_completo,direccion,telefono,borrado,fecha_add) VALUES ('$n','$d','$t','n',current_date);";
    $consulta = $base_de_datos->query( $sql );
}


function actualizarDoctor($i,$n,$d,$t){
	require "conexion.php";
	    $sql = "UPDATE doctores SET nombre_completo='$n',direccion='$d',telefono='$t' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}


function eliminarDoctor($i){
	require "conexion.php";
	    $sql = "UPDATE doctores SET borrado='s' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}


function listarDoctores(){
	require "conexion.php";
	    $sql = "SELECT * FROM doctores WHERE borrado='n'";
    $consulta = $base_de_datos->query( $sql );
    return $consulta->fetchAll(PDO::FETCH_OBJ);
}


function buscarDoctor($id){
	require "conexion.php";
	$sql = "SELECT * FROM doctores WHERE borrado='n' AND id='$id'";
    $consulta = $base_de_datos->query( $sql );
    $r = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $r[0];
}

function insertarMascota($n,$p,$t,$g,$e,$f){
	require "conexion.php";
	    $sql = "INSERT INTO mascotas(nombre,propietario,tipo,genero,estado,fecha_nac) VALUES ('$n','$p','$t','$g','$e','$f');";
    $consulta = $base_de_datos->query( $sql );
}


function listarMascotas(){
	require "conexion.php";
	    $sql = "SELECT mascotas.*,clientes.nombre_completo FROM mascotas 
		INNER JOIN clientes ON mascotas.propietario = clientes.id
	    WHERE mascotas.borrado='n' AND clientes.borrado='n'";
    $consulta = $base_de_datos->query( $sql );
    return $consulta->fetchAll(PDO::FETCH_OBJ);
}

function buscarMascota($id){ 
	require "conexion.php";
	$sql = "SELECT mascotas.*,clientes.nombre_completo FROM mascotas 
		INNER JOIN clientes ON mascotas.propietario = clientes.id
	    WHERE mascotas.borrado='n' AND clientes.borrado='n' AND mascotas.id='$id'";
    $consulta = $base_de_datos->query( $sql );
    $r = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $r[0];
}



function actualizarMascota($i,$n,$p,$t,$g,$e,$f){
	require "conexion.php";
	    $sql = "UPDATE mascotas SET nombre='$n',propietario='$p',tipo='$t',genero='$g',estado='$e',fecha_nac='$f' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}

function eliminarMascota($i){
	require "conexion.php";
	    $sql = "UPDATE mascotas SET borrado='s' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}
