<?php
    require_once '../../model/database.php';
    $pdo = new PDO('mysql:host=localhost;dbname=dbtest;charset=utf8', 'root', '');
    $st1 = $pdo->prepare("select * from profil");
    $st1->execute();
    $res = null;
?> 

  <body>
  <!-- container section start -->
 
  <section id="container" class="">
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->         
        <div class="row">
                  <div class="col-lg-12">
                      <SECTION class="panel">
                          <HEADER class="panel-heading">
                           Formulaire de saisie des utilisateurs 
                         </HEADER>
                          <div class="panel-body">
                             <form id="frm-alumno" action="?c=utilisateur&a=Enregistrer" method="post" enctype="multipart/form-data">
                               <input type="hidden" name="id" value="<?php echo $utilisateur->id; ?>" />
                                <div class="form-group">
                                    <label>PrénomN</label>
                                    <input type="text" name="prenom" value="" class="form-control" placeholder="Prénom utilisateur" required>
                                </div>
                                <div class="form-group">
                                    <label>NOM</label>
                                    <input type="text" name="nom" value="" class="form-control" placeholder="Nom utilisateur" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Login</label>
                                    <input type="text" name="login" value="" class="form-control" placeholder="Compte utilisateur" required>
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" name="password" value="" class="form-control" placeholder="Mot de passe" required>
                                </div>
                                <div class="form-group">
                                      <label for="Idprofil">Profil</label>
                                        <select class="form-control" name="idprofil" placeholder="Profil de l'utilisateur" required>> 
                                          <?php
                                              echo "<option></option>\n";
                                              while($res = $st1->fetch(PDO::FETCH_NUM))
                                              {
                                                  //echo "<option>" . $res[0] . "</option>\n";
                                                echo "<option value='".$res[0]."'>".$res[1]."</option>";
                                              }
                                          ?>
                                        </select> 
                                  </div>


                                <hr />     
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <BUTTON type="submit" name="submit" class="btn btn-success">Enregistrer</button>
                                           <a href="index.php" CLASS="btn btn-default">Annuler</a>
                      
                                      </div>
                                  </div>
                              </form>
                          </div>  </div>

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
            <header class="panel-heading">
                    Liste des utilisateurs
            </header>
                          
<table class="table table-striped table-advance table-hover">         
 

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
            <th style="width:120px; background-color: #5DACCD; color:#fff">ID</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Prénom</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Nom</th>
            <th style=" background-color: #5DACCD; color:#fff">Profil</th>         
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Lister() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->prenom; ?></td>
            <td><?php echo $r->nom; ?></td>
            <td><?php echo $r->idprofil; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=utilisateur&a=Crud&Id=<?php echo $r->Id; ?>">Modifier</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('Voulez vous supprimer cet enregistrement?');" href="?c=utilisateur&a=Supprimer&Id=<?php echo $r->Id; ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
