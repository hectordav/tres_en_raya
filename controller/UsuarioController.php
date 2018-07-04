<?php 

class UsuarioController extends ControladorBase{
		public $conectar;
    public $adapter;

	function __construct(){
		parent::__construct();
    $this->conectar=new Conectar();
    $this->adapter=$this->conectar->conexion();
	}
	public function registroUsuario(){
		session_unset();
		$this->view("registro",null);
	}
	public function guardar_usuario(){
		session_start();
		 if(isset($_POST["usuario1"])){
		 		$usuario=new Usuario($this->adapter);
		 		for ($i=1; $i < 3; $i++) {
			 		$usuariopost=$_POST["usuario".$i]; 
			 		$usuario->setNombre($usuariopost);
			 		$save=$usuario->guardar();
			 		$columna='nombre';
			 		$buscar_usuario=$usuario->getMax(); 
					$id=$buscar_usuario->id;
			 		$_SESSION['usuario_'.$i]  = $id;
			 		$_SESSION['nombre_'.$i]  = $usuariopost;
		 		}
			 	$this->redirect('Tablero','index');
		 }
	}
}
 ?>