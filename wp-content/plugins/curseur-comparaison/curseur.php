<?php
/**
Plugin Name: curseur
**/

//Hook de la fonction afficher_curseur dans le header
add_action("wp_footer", "afficher_curseur");
 
// Fonction affichant le curseur
function afficher_curseur()
{

  //CSS du curseur
  echo'<STYLE> form{text-align: center; }
  input[type=range] {
	text-align: center;
	-webkit-appearance: none;
	padding: 10px; 
	margin-top: 20px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	appearance: none;
	position : relative;
    width: 600px;
    height: 25px; 
    background: white; 
	outline: none;
    opacity: 0.7; 
    -webkit-transition: 0.2s; 
    transition: opacity .2s;
  }</STYLE>';

  echo "<p style='text-align:center';>" . 'Voici un curseur permettant de comparer nos produits à des produits de la vie courante !';

 //On enregistre le prix du produit
 $Prix_Produit = $_POST['valeur_curseur'];

  //Affiche le curseur
  echo "<FORM id='formulaire_curseur' method='post' >
  <input name='valeur_curseur' type='range' value= '$Prix_Produit' max='20' min='0' step='1' onchange='this.form.submit()'>
  </FORM>";
  
  //Appel de la fonction AfficheProduit
  if($Prix_Produit!=NULL)
	afficher_produit($Prix_Produit);
}

//Fonction affichant un produit, prenant un prix en entrée
function afficher_produit($Prix)
{

	echo "<p id'produit' style='text-align:center';>" . 'Vous venez de choisir le prix : ', $Prix, '€'; 
	echo "<p style='text-align:center';>" . 'Vous pourriez avoir ceci : ';	
	//Connexion controlee a la BD Monnaie de Singe
	try
	{
		$BD = new PDO('mysql:host=localhost;dbname=wordpress;charset=utf8','root','root');
	}
	catch (Exception $e)
	{
	
		die('Erreur :' . $e->getMessage());
	
	}

	//On recupere des infos sur la monnaie de singe
	$NomMonnaieDeSinge = $BD->query('SELECT nom FROM monnaiedesinge WHERE Prix ='.$Prix.'');
	//On recupere des infos sur le produit
	$NomProduit = $BD->query('SELECT nom FROM produits WHERE Prix ='.$Prix.'');
	
	//On affiche le nom de la monnaie de singe
	while($InfosBD = $NomMonnaieDeSinge->fetch())
	{
		
		//On affiche le nom de la monnaie de singe
		echo $InfosBD['nom'];
	
	}
	
	echo "<p style='text-align:center';>" . 'Mais avouez-le, ça : ';
	
	//On affiche le nom du produit
	while($InfosBD = $NomProduit->fetch())
	{
		
		//On affiche le nom du produit
		echo '<A HREF = "localhost/wordpress/produits/' . $InfosBD['nom'] . '" id = "objets" >' . $InfosBD['nom'] . '</A>' . ', ça vaut vraiment le coup !';
		
	}

}