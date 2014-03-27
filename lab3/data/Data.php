<?php 
class Data{

	private $aUser =   array(
								  array("id" => 1,"username" => "Admin","password" => "admin"),
								  array("id" => 2,"username" => "Player","password" => "player"),
								  array("id" => 3,"username" => "Capitain","password" => "admin"));
								
	/**
	 * @const de la base de données
	 */
	const HOST = "localhost";
	const USER = "root";
	const PWD = "";
	const BDD = "etsdotaleages";
	
	/**
	 * @const d'erreurs
	 */
	const MYSQL_BASE_SELECT_IMPOSSIBLE = "Erreur BDD : La sélection de la base de données est impossible.";
	const MYSQL_BASE_CONNECT_IMPOSSIBLE ="Erreur BDD : La connexion à la base de données est impossible.";
	const MYSQL_REQUETE_VIDE ="Erreur BDD : La requête à la base de données ne doit pas être une chaîne vide.";
	const MYSQL_REQUETE_INVALIDE ="Erreur BDD : La requête à la base de données est invalide.";
	const MYSQL_RESSOURCE_VIDE ="Erreur BDD : La ressource ne doit pas être une chaîne vide.";
	
	protected  $_instance;

	public final  function __construct() {
		$this->_instance = $this->connecter(Data::HOST, Data::USER, Data::PWD);
		
		$this->selectionnerBdd(Data::BDD, $this->_instance);
		
	}
	public final static function getConnexion() {
		
		if (!isset($this->_instance)) // Si aucune instance de Data
			$this->_instance = new Data(); //Alors on en créer une
		return $this->_instance; //Dans tous les cas on retourne une instance (soit la nouvelle soit l'existante)

	}
	
	public final static  function selectionnerBdd($sBdd, $rId) {
		$ret = @mysql_select_db($sBdd, $rId); //fonction de selection PHP
		if (isset($ret) && empty($ret)) // Test si le code de retour de la fonction est existant et vide
			throw new Exception(Data::MYSQL_BASE_SELECT_IMPOSSIBLE); //Gestion de l'erreur
		return $ret; 
	}
	
	public final  function connecter($sHost, $sUser, $sPwd) {
		$ret = @mysql_connect($sHost, $sUser, $sPwd) or die(); //fonction de connexion a la base
		if (isset($ret) && empty($ret))// Test si le code de retour de la fonction est existant et vide
			throw new Exception(Data::MYSQL_BASE_CONNECT_IMPOSSIBLE);

		return $ret; 
	}
	
	public final  function executer($sRequete) {
		if (!isset($this->_instance) || empty($this->_instance)) // Test si une connexion existe si elle n'existe pas
			 $this->getConnexion(Data::HOST, Data::USER, Data::PWD, Data::BDD); //on essaye dans créer une.
		
		 if (!isset($sRequete) || empty($sRequete))
		 	throw new Exception(Data::MYSQL_REQUETE_VIDE);
		 else {			 
			 	$resultat = mysql_query($sRequete);
				if($resultat != false)
					return $resultat;
				else
					throw new Exception(Data::MYSQL_REQUETE_INVALIDE);
 		}
	 	
		return false;			  
	}
	
	public final  function select($sRequete) { 
		return $this->executer($sRequete);
	}
	
	public function recuperer($resultat,$result_type=MYSQL_BOTH){
		if (!isset($resultat) && empty($resultat))
			throw new Exception(Data::MYSQL_RESSOURCE_VIDE);
		$aResultats = array();
		$i=0;
		while(($aLigne = mysql_fetch_array($resultat, $result_type)) != false){
			$aResultats[$i] = $aLigne;
			$i++;
		}
		if($i<=0)
			return false;
			
		return $aResultats;
	}
	
	public final  function getInstance() {
		return $this->_instance;
	}
	
	public function getPlayer($id){
		
		$sRequete = "
		SELECT players.*, teams.* FROM players LEFT JOIN teams ON players.team = teams.id WHERE players.idPlayer = ".mysql_real_escape_string($id).";";
		$ressource = $this->select($sRequete);
		$aPlayer = $this->recuperer($ressource);
		return $aPlayer;
	}
	public function getTeam($id){
		$sRequete = "
		SELECT * FROM teams WHERE id = ".mysql_real_escape_string($id).";";
		$ressource = $this->select($sRequete);
		$aPlayer = $this->recuperer($ressource);
		return $aPlayer;
	}
	
	public function getAllPlayers($a=NULL, $order = NULL){
		$_order = $order;
		if($_order == NULL){
			$_order = array("name" => "username", "order" => "ASC");
		}
		$sRequete = "
		SELECT players.*, teams.* FROM players LEFT JOIN teams ON players.team = teams.id WHERE ";
		if($a != NULL){
			for($i =0; $i<count($a); $i++){
				if($i > 0){
					$sRequete .= " AND ";
				}
				$sRequete .= $a[$i]['name']. " " . $a[$i]['condition']." '". $a[$i]['value']."'";
			}
		}
		else{
			$sRequete .= "1";
		}
		$sRequete .= " ORDER BY ". $_order['name'] . " " . $_order['order'];

		$sRequete .= ";";
		$ressource = $this->select($sRequete);
		$aPlayers = $this->recuperer($ressource);
		return $aPlayers;
	}
	
	public function getAllTeams($a=NULL, $order = NULL){
		$_order = $order;
		if($_order == NULL){
			$_order = array("name" => "name", "order" => "ASC");
		}
		$sRequete = "
		SELECT * FROM `teams` WHERE ";
		if($a != NULL){
			for($i =0; $i<count($a); $i++){
				if($i > 0){
					$sRequete .= " AND ";
				}
				$sRequete .= $a[$i]['name']. " " . $a[$i]['condition']." '". $a[$i]['value'] ."'";
			}
		}
		else{
			$sRequete .= "1";
		}
		$sRequete .= " ORDER BY ". $_order['name'] . " " . $_order['order'];
		$sRequete .= ";";

		$ressource = $this->select($sRequete);
		$aTeams = $this->recuperer($ressource);
		return $aTeams;
	}
}
?>