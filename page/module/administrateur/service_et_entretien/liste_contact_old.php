<?php 
$page = '';
$id = '';
if (empty($page)) {
 $page = "dbc";
 // On limite l'inclusion aux fichiers.php en ajoutant dynamiquement l'extension
 // On supprime également d'éventuels espaces
 $page = trim($page.".php");

}

// On évite les caractères qui permettent de naviguer dans les répertoires
$page = str_replace("../","protect",$page);
$page = str_replace(";","protect",$page);
$page = str_replace("%","protect",$page);

// On interdit l'inclusion de dossiers protégés par htaccess
if (preg_match("/config/",$page)) {
 echo "Vous n'avez pas accès à ce répertoire";
 }

else {

    // On vérifie que la page est bien sur le serveur
    if (file_exists("../../../config/".$page) && $page != 'index.php') {
       include("../../../config/".$page); 
    }

    else {
        echo "Page inexistante !";
    }
}
page_protect();
if(!checkAdmin()) {
die("Secured");
exit();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Collaborateurs</title>
  <link rel="shortcut icon" href="img/logo/logop.ico">
  
<link rel="stylesheet" href="vendor/date-range-picker/daterangepicker.css">
<link rel="stylesheet" href="vendor/datatables/datatables.min.css">
<link rel="stylesheet" href="vendor/jquery-confirm/jquery-confirm.min.css">   
<link rel="stylesheet" href="fonts/open-sans/style.min.css">
<link rel="stylesheet" href="fonts/iconfont/iconfont.css">
<link rel="stylesheet" href="vendor/flatpickr/flatpickr.min.css">
<link rel="stylesheet" href="vendor/select2/css/select2.min.css">
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.min.css" id="stylesheet">

<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="module/admin/table/css/layout_admin.css">
  

<script src="js/ie.assign.fix.min.js"></script>

</head>
<body class="js-loading  sidebar-md">
<div class="preloader">
  <div class="loader">
    <span class="loader__indicator"></span>
    <div class="loader__label"><img src="img/logo/LogoEnr.png" alt="" width="200"></div>
  </div>
</div>


<?php
$page = '';
if (empty($page)) {
 $page = "top";
 // On limite l'inclusion aux fichiers.php en ajoutant dynamiquement l'extension
 // On supprime également d'éventuels espaces
 $page = trim($page.".php");

}

// On évite les caractères qui permettent de naviguer dans les répertoires
$page = str_replace("../","protect",$page);
$page = str_replace(";","protect",$page);
$page = str_replace("%","protect",$page);

// On interdit l'inclusion de dossiers protégés par htaccess
if (preg_match("/include/",$page)) {
 echo "Vous n'avez pas accès à ce répertoire";
 }

else {

    // On vérifie que la page est bien sur le serveur
    if (file_exists("../../include/".$page) && $page != 'index.php') {
       include("../../include/".$page); 
    }

    else {
        echo "Page inexistante !";
    }
}
?>

<div class="page-wrap">
  
<?php
$page = '';
if (empty($page)) {
 $page = "sidebar";
 // On limite l'inclusion aux fichiers.php en ajoutant dynamiquement l'extension
 // On supprime également d'éventuels espaces
 $page = trim($page.".php");

}

// On évite les caractères qui permettent de naviguer dans les répertoires
$page = str_replace("../","protect",$page);
$page = str_replace(";","protect",$page);
$page = str_replace("%","protect",$page);

// On interdit l'inclusion de dossiers protégés par htaccess
if (preg_match("/include/",$page)) {
 echo "Vous n'avez pas accès à ce répertoire";
 }

else {

    // On vérifie que la page est bien sur le serveur
    if (file_exists("../../include/".$page) && $page != 'index.php') {
       include("../../include/".$page); 
    }

    else {
        echo "Page inexistantes !";
    }
}

?>

	<div class="page-content">

        <div class="container-fluid">
          <h2 class="content-heading">Service /  <b>Collaborateurs</b></h2>
          	
          	<div class="main-container">  
            <div class="container-block">
            <div class="row">
            
           	<div class="col-lg-6">
            <button type="button" class="btn btn-secondary icon-left mr-3" id="add_user">Ajouter un collaborateur <span class="btn-icon iconfont iconfont-plus-v1"></span></button>     
            <a class="btn btn-secondary icon-left mr-3" href="ListeGroupe">Équipes</a>         
            <!--<a class="btn btn-secondary icon-left mr-3" href="ListeGroupe">Gestion des accés</a>-->
            </div>
			<div class="col-lg-6" style="text-align:right">
            <a class="btn btn-primary icon-left mr-3" href="#" id="refresh">Rafraîchissement <span class="btn-icon iconfont iconfont-refresh"></span></a>            
            </div>
            </div>            
            </div>
            
            <div class="container-block">
            <div class="row">            
            <div class="content table-responsive table-full-width">
            
			<table class="datatable table table-striped" id="table_user">
			<thead>
                    <tr>
                    	<th>MATRICULE</th>
                    	<th>COLLABORATEUR</th>
                    	<th>ÉQUIPE</th>
                        <th>TELEPHONE IP</th>
                        <th>ADRESSE MAIL</th>
                        <th>NIVEAU</th>
                        <th></th>
                        <th></th>
                        <th>DATE DE MAJ</th> 
                        <th></th>                       
                    </tr>
                </thead>
                <tbody></tbody>
            </table>                
                                             
            </div>
            </div>                                
            </div>
            </div>
                                    
                                    
        </div>
  	</div>


</div>
<div class="lightbox_bg"></div>
<div class="lightbox_container">
  <div class="lightbox_close"></div>
  <div class="lightbox_content">
        
<h2></h2>          
			
<hr>            
<form class="form add" id="form_company" data-id="">           

<div class="input_container">
<label for="reporting">ÉQUIPE : <span class="required">*</span></label>
<div class="field_container">
<select id="equipe" name="equipe" class="form-control" required>
<option value="" selected>CHOISIR UNE ÉQUIPE</option>
<?php
$query = $bdd->prepare("SELECT name_equipe, id_equipe FROM user_equipe");
$query->execute();	
while($query_equipe = $query->fetch()){
 echo '<option value="'.$query_equipe['id_equipe'].'">'.$query_equipe['name_equipe'].'</option>';	
}
$query->closeCursor();							
?>
</select>
</div>
</div>

<div class="input_container">
<label for="nature">MATRICULE : </label>
<div class="field_container">
<input type="number" id="matricule" name="matricule" class="form-control">
</div>
</div>

<div class="input_container">
<label for="nature">NOM & PRÉNOM : <span class="required">*</span></label>
<div class="field_container">
<input type="text" class="form-control" id="full_name" name="full_name" required>
</div>
</div>

<div class="input_container">
<label for="nature">TÉLÉPHONE IP : </label>
<div class="field_container">
<input type="number" id="ip" name="ip" class="form-control">
</div>
</div>

<div class="input_container">
<label for="nature">ADRESSE EMAIL : <span class="required">*</span></label>
<div class="field_container">
<input type="email" id="user_email" name="user_email" class="form-control" autocomplete="off" placeholder="Courrier éléctronique" >
</div>
</div>

<div class="input_container">
<label for="nature">MOT DE PASSE : <span class="required">*</span></label>
<div class="field_container">
<input type="password" id="pwd" name="pwd" class="form-control" minlength="6" pattern=".{6,}" placeholder=".6 min / Modification impossible" autocomplete="off" required>
</div>
</div>

<div class="input_container">
<label for="reporting">NIVEAU DE PERMISSION : <span class="required">*</span></label>
<div class="field_container">
<select id="niveau" name="niveau" class="form-control" required>
<option value="" selected>SLECTIONEZ UN NIVEAU</option>
<?php
$query = $bdd->prepare("SELECT name_niveau, id_niveau FROM user_niveau");
$query->execute();
while($query_niveau = $query->fetch()){
 echo '<option value="'.$query_niveau['id_niveau'].'">'.$query_niveau['name_niveau'].'</option>';	
}
$query->closeCursor();							
?>
</select>
</div>
</div>

<hr>

<div class="form-group" style="text-align:right">
<button type="submit" class="btn btn-info"></button>
</div>

</form>

		</div>
	</div>
    
<div id="message_container">
    <div class="success" id="message">
        <p>Opération réussie.</p>
    </div>
</div>
<div id="loading_container">
    <div id="loading_container2">
        <div id="loading_container3">
            <div id="loading_container4">
                Chargement...
            </div>
        </div>
    </div>
</div>    
    
<script src="vendor/echarts/echarts.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/datatables/datatables.min.js"></script>
<script src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script charset="utf-8" src="module/admin/table/js/webapp_liste_contact.js"></script>
<script src="vendor/jquery-confirm/jquery-confirm.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/simplebar/simplebar.js"></script>
<script src="vendor/text-avatar/jquery.textavatar.js"></script>
<script src="vendor/flatpickr/flatpickr.min.js"></script>
<script src="vendor/wnumb/wNumb.js"></script>
<script src="js/main.js"></script>
<script src="js/growl-notification/growl-notification.js"></script>
<script src="js/preview/growl-notifications.min.js"></script>
<script src="vendor/momentjs/moment-with-locales.min.js"></script>
<script src="vendor/date-range-picker/daterangepicker.js"></script>
<script src="js/preview/date-range-picker.js"></script>
<script src="vendor/nouislider/nouislider.min.js"></script>
<script src="vendor/tagify/tagify.min.js"></script>
<script src="js/preview/modal.min.js"></script>
<script src="js/preview/datepicker.min.js"></script>
<!--<script src="vendor/select2/js/select2.full.min.js"></script>-->
<div class="sidebar-mobile-overlay"></div> 
</body>
</html>