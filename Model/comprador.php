<?php
class Comprador
{
	private $pdo;
    
    public $idcomprador;
    public $nombre;
    public $apellido;
    public $direccion;
    public $telefono;
    public $cp;
    public $correo;
    public $tarjeta;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbl_comprador");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idcomprador)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbl_comprador WHERE idcomprador = ?");
			          

			$stm->execute(array($idcomprador));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idcomprador)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_comprador WHERE idcomprador = ?");			          

			$stm->execute(array($idcomprador));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbl_comprador SET 
						nombre         = ?, 
						apellido        = ?,
                        direccion        = ?,
						telefono            = ?, 
						cp = ?,
						correo = ?,
						tarjeta = ?
				    WHERE idcomprador = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->apellido,
                        $data->direccion,
                        $data->telefono,
                        $data->cp,
                        $data->correo,
                        $data->tarjeta,
                        $data->idcomprador
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `tbl_comprador` (nombre,apellido,direccion,telefono,cp,correo,tarjeta) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    	$data->nombre, 
                        $data->apellido,
                        $data->direccion,
                        $data->telefono,
                        $data->cp,
                        $data->correo,
                        $data->tarjeta,
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
