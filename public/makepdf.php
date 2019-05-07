<?php
require('includes/fpdf/tfpdf.php');
$error = false;
include 'functions.php';
checkSession();
class PDF extends tFPDF
{

    function Header()
    {
        // Logo
        $this->Image('includes/images/logo.png',10,6,30);
        // Police Arial gras 15
        $this->SetFont('Arial','B',12);
        // Décalage à droite
        $this->Cell(80);
        // Titre
        $this->Cell(50,10,'Rapport Visite',1,0,'C');
        // Saut de ligne
        $this->Ln(20);
    }

    // Tableau simple
    function BasicTable($header, $data)
    {
        $this->SetFont('Arial',"",10);
        // En-tête
        foreach($header as $col){
      
            $this->Cell(95,7,$col,1);
     
        }
        $this->Ln();


        // Données
        foreach($data as $row)
        {
            foreach($row as $col)
                $this->Cell(95,6,$col,1);
                $this->Ln();
        }
    }

    // Tableau amélioré
    function ImprovedTable($header, $data)
    {
        $this->SetFont('Arial',"",10);
        // Largeurs des colonnes
        $w = array(95, 95);
        // En-tête
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C');
        $this->Ln();
        // Données
        foreach($data as $row)
        {
            $this->Cell($w[0],6,$row[0],'LR');
            $this->Cell($w[1],6,$row[1],'LR');
            $this->Ln();
        }
        // Trait de terminaison
        $this->Cell(array_sum($w),0,'','T');
    }

    // Tableau coloré
    function FancyTable($header, $data)
    {
        // Couleurs, épaisseur du trait et police grasse
        $this->SetFont('Arial',"",10);
        $this->SetFillColor(86,95,157);
        $this->SetTextColor(255);
        $this->SetDrawColor(0,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
        // En-tête
        $w = array(47, 48, 68, 27);
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $this->Ln();
        // Restauration des couleurs et de la police
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Données
        $fill = false;
        foreach($data as $row)
        {
            $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
            $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
            $this->Cell($w[2],6,$row[2],'LR',0,'R',$fill);
            $this->Cell($w[3],6,$row[3],'LR',0,'R',$fill);
            $this->Ln();
            $fill = !$fill;
        }
        // Trait de terminaison
        $this->Cell(array_sum($w),0,'','T');
    }

}
// --------------------------------------- Programme principal --------------------------------------------- \\
//$_SESSION["makePDF"] = array($_POST["vis_mat"],$nom_prat." ".$prenom_prat,$num_rap,$_POST["mot_vis"],$_POST["bilan"],$tabmedic);	
if((isset($_SESSION["makePDF"]) && !empty($_SESSION["makePDF"])) || (isset($_GET['print']) && !empty($_GET['print']) && isset($_GET['frm']) && !empty($_GET['frm']))){
    $medicaments;
    $vis_mat = "";
    $praticien= "";
    $num_rapport= "";
    $motif= "";
    $bilan= "";
    $nom="";;
    $prenom="";
    if(isset($_GET['print']) && !empty($_GET['print'])){
        try{
     
            $query = "SELECT rapport_visite.VIS_MATRICULE,RAP_NUM,VIS_NOM,Vis_PRENOM,RAP_DATE,rapport_visite.PRA_NUM,PRA_NOM,PRA_PRENOM,RAP_BILAN,RAP_MOTIF 
            FROM rapport_visite 
            INNER JOIN visiteur 
            ON visiteur.VIS_MATRICULE = rapport_visite.VIS_MATRICULE
            INNER JOIN praticien
            ON praticien.PRA_NUM = rapport_visite.PRA_NUM
            WHERE RAP_NUM = ".$_GET['print']." AND rapport_visite.VIS_MATRICULE = '".$_GET['frm']."';";
            //echo $query;
            //die();
            $conBase = new PDO($strCon, $dbUser,$dbPass);
            $req = $conBase->prepare($query);	
            $req->execute();
            $present = false;
            $str;
            while ($donnees = $req->fetch())
            {
                $vis_mat = $donnees["VIS_MATRICULE"];
                $praticien= $donnees["PRA_NOM"]." ".$donnees["PRA_PRENOM"];
                $num_rapport= $donnees["RAP_NUM"];
                $motif= $donnees["RAP_MOTIF"];
                $bilan= $donnees["RAP_BILAN"];
                $nom=$donnees["VIS_NOM"];
                $prenom=$donnees["Vis_PRENOM"];
            }
            if(empty($vis_mat) || !isset($vis_mat)) {
                $error = true;
            }
        }
        catch (Exception $e){
        }
        try{
            $query = "SELECT OFF_QTE,MED_NOMCOMMERCIAL FROM rapport_visite
            INNER JOIN offrir
            ON offrir.RAP_NUM = rapport_visite.RAP_NUM
            INNER JOIN medicament
            ON medicament.MED_DEPOTLEGAL = offrir.MED_DEPOTLEGAL
            WHERE rapport_visite.RAP_NUM = ".$_GET['print']." AND offrir.VIS_MATRICULE = '".$_GET['frm']."';";
            
            $conBase = new PDO($strCon, $dbUser,$dbPass);
            $req = $conBase->prepare($query);	
            $req->execute();
            $present = false;
            $str;
            $medicaments[0][0] ="";
            $medicaments[0][1] ="";
            $comptmedic=0;
            while ($donnees = $req->fetch())//Ajout dans le tableau médicaments
            {
                $medicaments[$comptmedic][0] = $donnees['MED_NOMCOMMERCIAL'];
                $medicaments[$comptmedic][1] = $donnees['OFF_QTE'];   
                $comptmedic++;
            }
        }
        catch(Exception $e){
        }
    }
    else{
        $vis_mat = $_SESSION["makePDF"][0];
        $praticien= $_SESSION["makePDF"][1];
        $num_rapport= $_SESSION["makePDF"][2];
        $motif= $_SESSION["makePDF"][3];
        $bilan= $_SESSION["makePDF"][4];
        $nom="";
        $prenom="";
        $medicaments= $_SESSION["makePDF"][5];
        try{
            $conBas = new PDO($strCon,$dbUser,$dbPass); //connexion à la base
            $ret = $conBas -> prepare('SELECT VIS_NOM, VIS_PRENOM FROM VISITEUR WHERE VIS_MATRICULE = ?'); //préparation de la requête
            $ret->execute(array($vis_mat)); // exécution de la requête et sauvegarde du résultat dans $ret
            while($donnee = $ret->fetch()){ 
                $nom = $donnee["VIS_NOM"];
                $prenom = $donnee["VIS_PRENOM"];    
            }   
        }catch(Exception $e){
            echo 'Erreur : '.$e->getMessage().'<br/>';
            echo 'N° : '.$e->getCode();
            //die();
        }       
           //Tableau médicaments
           for($i = 0; $i<count($medicaments); $i++){
            $medicaments[$i][0] = $_SESSION["test"][$i][0];
        }

    }
   
    if(!$error){
        $pdf = new PDF();
        // Titres des colonnes
        $header = array('Nom', 'Prenom', 'Praticien', 'Rapport');
        $data = array(array($nom,$prenom,$praticien,$num_rapport));
        $pdf->SetFont('Arial','',14);
        $pdf->AddPage();
        $pdf->SetTitle("Rapport Visite",true);
        $pdf->FancyTable($header,$data);
        $pdf->Ln(5);
        $header = array('Motif', 'Bilan');

        //--------------------------------------- Découpe des chaines $motif et $bilan ----------------------------------------------\\
        
        $tabfinal = array(array());
        $motif_cache = $motif;
        $bilan_cache = $bilan;
        $compt=0;
       // echo $motif."<br>".$bilan."<br>";
       // echo strlen($motif_cache);
        $lengthcut = 35;
        $lowerlengthcut =28;
        // découpe de motif
        do{
            $tabfinal[$compt][0]=substr($motif_cache,0,$lengthcut);
            $tabfinal[$compt][1] = " ";
            $strp = $lengthcut;
            if($strp !=false && $strp<$lengthcut){
                $motif_cache = substr($motif_cache,$strp,strlen($motif_cache) - $strp);
            }
            else{
                $motif_cache = substr($motif_cache,$lengthcut,strlen($motif_cache) - $lengthcut);
            }
            if(strlen($motif_cache)<$lengthcut){
                $tabfinal[$compt+1][0] = $motif_cache;
                $tabfinal[$compt+1][1] = "";
                $motif_cache = "";
            }
            $compt++;
        }while($motif_cache != "");
        $compt_cache = $compt;
        $compt=0;
        //découpe de bilan
        do
        {
            $strp = $lengthcut;
            if($strp !=false && $strp<$lengthcut){
                $tabfinal[$compt][1]=substr($bilan_cache,0,$strp);
            }
            else{
                $tabfinal[$compt][1]=substr($bilan_cache,0,$lengthcut);
            }
            if(!isset($tabfinal[$compt][0]) || empty($tabfinal[$compt][0])){
                $tabfinal[$compt][0] = "";
            }
            $strp = $lengthcut;
            if($strp !=false && $strp<$lengthcut){
                $bilan_cache = substr($bilan_cache,$strp,strlen($bilan_cache) - $strp);
            }
            else{
                $bilan_cache = substr($bilan_cache,$lengthcut,strlen($bilan_cache)-$lengthcut);
            }
            if(strlen($bilan_cache)<$lengthcut){
                $tabfinal[$compt+1][1] = $bilan_cache;
                if(!isset($tabfinal[$compt][0]) || empty($tabfinal[$compt][0])){
                    $tabfinal[$compt+1][0] = "";
                }
                $bilan_cache = "";
            }
            $compt++;
        } while($bilan_cache != "");
        

        //compensation des longueurs de tableaux
        if(empty($tabfinal[$compt][0]) || !isset($tabfinal[$compt][0])){
            $tabfinal[$compt][0] = "";
        }

        if(empty($tabfinal[$compt][1]) || !isset($tabfinal[$compt][1])){
            $tabfinal[$compt][1] = "";
        }

       //-------------------------------------------- Fin découpe ---------------------------------------\\
     
       //echo var_dump($tabfinal);
        
        $pdf->ImprovedTable($header,$tabfinal);
        $header = array("Libelle", "Quantite");
        $pdf->ln(5);
       
     
        $pdf->Cell(40,5,'Medicaments',1,0,'C');
        // Saut de ligne
        $pdf->Ln(5);
        $pdf->BasicTable($header,$medicaments);
   
        $pdf->Output();//affichage du PDF

    }
    else{

        ?>
        <!DOCTYPE html>
<html>
	
	<link rel="stylesheet" href="menu_general.css">
	<meta charset="utf-8" />
	<title>Ce rapport n'existe pas</title>
<head>
	 <img src="images/logo.png" class="logo"/> <!-- L'image -->
	 <h1>Ce rapport n'existe pas</h1>
</head>
<body>

	<div class="trait"> </div> 	<!--Le trait -->

	<!-- Liens vers les différentes pages -->
    <nav>
      <a href='rapport_visite.php'>Retour</a>
      </nav>
</body>
</html>
   
        <?php
    }
}
else
{
    header("Location: rapport_visite.php");
}

//echo var_dump($_SESSION["makePDF"]);

?>