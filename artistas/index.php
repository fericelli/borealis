<?php
	Class Index{
		private $Conexion;
		function Index(){
			include("conexion.php");
			$this->Conexion = new Conexion();
			echo $this->Retorno();
			$this->Conexion->CerrarConexion();
		}
		private function Retorno(){
			$retorno = '<div id="titulo">
			'.$_POST["artista"].'
			</div>
			<table>';
			$consultar = $this->Conexion->Consultar("SELECT * FROM canciones WHERE artistas='".$_POST["artista"]."' ");
			while($canciones = $this->Conexion->Recorrido($consultar)){
				$retorno .= "<tr><td>".$canciones[0]." ".$canciones[2]."</td></tr>";
			}
			return $retorno."</table>
			<div id='volver'>Volver</div>
			<script>
				$('#volver').on('click',function(){
					location.reload(true);
				})
			</script>";
		}
	}
	new Index();
?>