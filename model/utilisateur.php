<?php
class utilisateur
{
	private $pdo;
    
    public $id;
    public $prenom;
    public $nom;  
    public $login;
	public $password;
	public $idprofil;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Lister()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM utilisateur");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtenir($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM utilisateur WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Supprimer($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM utilisateur WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Maj($data)
	{
		try 
		{
			$sql = "UPDATE utilisateur SET 
						prenom          = ?, 
						nom        = ?,
                        login        = ?,
                        password        = ?,
						idprofil      		= ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->prenom,                        
                        $data->nom,
                        $data->login,
						$data->password, 
						$data->idprofil, 
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Creer(utilisateur $data)
	{
		try 
		{
		$sql = "INSERT INTO utilisateur (prenom,nom,login,password,idprofil) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->prenom,
                    $data->nom, 
                    $data->login, 
					$data->password,
					$data->idprofil
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}