<?php
class fournisseur
{
	private $pdo;
    
    public $id;
    public $denomination;
    public $adresse;
    public $telephone;  
    public $email;


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

			$stm = $this->pdo->prepare("SELECT * FROM fournisseur");
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
			          ->prepare("SELECT * FROM fournisseur WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM fournisseur WHERE id = ?");			          

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
			$sql = "UPDATE fournisseur SET 
						denomination  	= ?,
						adresse         = ?, 
						telephone       = ?,
                        email           = ?
   
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->telephone, 
                        $data->adresse,                        
                        $data->telephone,
                        $data->email,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Creer(fournisseur $data)
	{
		try 
		{
		$sql = "INSERT INTO fournisseur (denomination,adresse,telephone,email) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->denomination, 
                    $data->adresse,
                    $data->telephone, 
                    $data->email  
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}