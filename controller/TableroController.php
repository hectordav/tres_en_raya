<?php 

class TableroController extends ControladorBase{
		public $conectar;
    public $adapter;
	function __construct(){
		parent::__construct();
    $this->conectar=new Conectar();
    $this->adapter=$this->conectar->conexion();
	}
	public function index(){
		session_start();
		/*limpia la sesion para crear una nueva*/
		unset ($_SESSION["id_tablero_jugada"]);
		$id1=$_SESSION['usuario_1'];
		$nombre1=$_SESSION['nombre_1'];
		$nombre2=$_SESSION['nombre_2'];
		$id2=$_SESSION['usuario_2'];
		$this->view("tablero",array('turno' =>'1',
			'id' =>$id1,
			'nombre1' =>$nombre1,
			'nombre2' =>$nombre2));
	}
public function guardar(){
	session_start();
	/*unset($_SESSION['id_tablero_jugada']);
	exit();*/
	if (isset($_GET["celda"])) {
		$celda_sel=$_GET["celda"];
		$id_usuario=$_GET["u"];
		$turno=$_GET["turno"];
	}
	if (isset($_SESSION['id_tablero_jugada'])) {
		$id_tablero_jugada=$_SESSION['id_tablero_jugada'];
	}else{
		$tablero=new Tablero($this->adapter);
		$id_status=1;
		$fecha=date('Y-m-d');
		$tablero->setFecha($fecha);
		$tablero->setStatus($id_status);
		$guardar=$tablero->guardar();
		$buscar_id_tablero=$tablero->getMax(); 
		$id_tablero_jugada=$buscar_id_tablero->id;
		$_SESSION['id_tablero_jugada']=$id_tablero_jugada;
	}
		if ($turno==1) {
			$valor='x';
			$turno=2;
		}else{
			$turno=1;
			$valor='O';
		}
		$celda=new Celda($this->adapter);
		$celda->setId_jugada($id_tablero_jugada);
		$celda->setId_usuario($id_usuario);
		$celda->setCelda($celda_sel);
		$celda->setValor($valor);
		$guardar_celda=$celda->guardar();
		if ($id_usuario==$_SESSION['usuario_1']) {
			$id=$_SESSION['usuario_2'];
		}else{
			$id=$_SESSION['usuario_1'];
		}
		$columna='id_jugadas';
		$consulta_celdas=$celda->getBy($columna,$id_tablero_jugada);
		$cuenta=$celda->countCeldas($columna,$id_tablero_jugada);
		/*la cantidad de celdas marcadas*/
		$cantidad_celdas=$cuenta->id;
		$data=[];
		foreach ($consulta_celdas as $key) {
			$data['celda'.$key->celda] =$key->celda;
			$data['valor'.$key->celda] =$key->valor;
		}
		$i=3;
		$ganador;
		if (isset($data['valor1']) && isset($data['valor2']) && isset($data['valor3'])) {/*1*/
			if ($data['valor1']=='x' && $data['valor2']=='x' && $data['valor3']=='x') {
				$ganador= "x";

			}else if ($data['valor1']=='O' && $data['valor2']=='O' && $data['valor3']=='O') {
				$ganador= "o";
				
			}
		} 
		 if (isset($data['valor4']) && isset($data['valor5']) && isset($data['valor6'])) {/*6*/
			if ($data['valor4']=='x' && $data['valor5']=='x' && $data['valor6']=='x') {
				$ganador= "x";
			}else if ($data['valor4']=='O' && $data['valor5']=='O' && $data['valor6']=='O') {
				$ganador= "o";
			}
		}
		 if (isset($data['valor7']) && isset($data['valor8']) && isset($data['valor9'])) {/*6*/
			if ($data['valor7']=='x' && $data['valor8']=='x' && $data['valor9']=='x') {
				$ganador= "x";
			}else if ($data['valor7']=='O' && $data['valor8']=='O' && $data['valor9']=='O') {
				$ganador= "o";
			}
		}
		if (isset($data['valor1']) && isset($data['valor5']) && isset($data['valor9'])) { /*2*/
			if ($data['valor1']=='x' && $data['valor5']=='x' && $data['valor9']=='x') {
				$ganador= "x";
			}else if ($data['valor1']=='O' && $data['valor5']=='O' && $data['valor9']=='O') {
				$ganador= "o";
			}
		}
		if (isset($data['valor1']) && isset($data['valor4']) && isset($data['valor7'])) {/*3*/
			if ($data['valor1']=='x' && $data['valor4']=='x' && $data['valor7']=='x') {
				$ganador= "x";
			}else if ($data['valor1']=='O' && $data['valor4']=='O' && $data['valor7']=='O') {
				$ganador= "o";
			}
		}
		if (isset($data['valor2']) && isset($data['valor5']) && isset($data['valor8'])) {/*4*/
			if ($data['valor2']=='x' && $data['valor5']=='x' && $data['valor8']=='x') {
				$ganador= "x";
			}else if ($data['valor2']=='O' && $data['valor5']=='O' && $data['valor8']=='O') {
				$ganador= "o";
			}
		}
		 if (isset($data['valor3']) && isset($data['valor5']) && isset($data['valor7'])) {/*5*/
			if ($data['valor3']=='x' && $data['valor5']=='x' && $data['valor7']=='x') {
				$ganador= "x";
			}else if ($data['valor3']=='O' && $data['valor5']=='O' && $data['valor7']=='O') {
				$ganador= "o";
			}
		}
		 if (isset($data['valor3']) && isset($data['valor6']) && isset($data['valor9'])) {/*6*/
			if ($data['valor3']=='x' && $data['valor6']=='x' && $data['valor9']=='x') {
				$ganador= "x";
			}else if ($data['valor3']=='O' && $data['valor6']=='O' && $data['valor9']=='O') {
				$ganador= "o";
			}
		}
		$nombre1=$_SESSION['nombre_1'];
		$nombre2=$_SESSION['nombre_2'];

		if (isset($ganador) && $cantidad_celdas<10) {
			$tablero=new Tablero($this->adapter);
			$tablero->setid($id_tablero_jugada);
			$guardar=$tablero->actualizar();
			$this->view("tableroterminado",array(
			'correcto' =>$ganador,
			'tablero' =>$data,
			'turno' =>$turno,
			'id' =>$id,
			'nombre1' =>$nombre1,
			'nombre2' =>$nombre2));
		}else{
			if ($cantidad_celdas==9) {
				$tablero=new Tablero($this->adapter);
				$tablero->setid($id_tablero_jugada);
				$guardar=$tablero->actualizar();
				$this->view("tableroterminado",array(
				'correcto' =>'empate',
				'tablero' =>$data,
				'turno' =>$turno,
				'id' =>$id,
				'nombre1' =>$nombre1,
				'nombre2' =>$nombre2));
			}else{
				$this->view("tablerojuego",array(
					'correcto' =>null,
					'tablero' =>$data,
					'turno' =>$turno,
					'id' =>$id,
					'nombre1' =>$nombre1,
					'nombre2' =>$nombre2));
			}
		}




	/*  
	para borrar la sesion de una variable en especifico
	unset($_SESSION['Products']);

	*/
	



}
}
 ?>