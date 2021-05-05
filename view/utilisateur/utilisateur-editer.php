  <!-- container section start -->
 
  <section id="container" class="">
     
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
           <div class="row">
                  <div class="col-lg-12">
                      <SECTION class="panel">
                          <HEADER class="panel-heading">
                           Formulaire de Mise à jour des utilisateurs 
                         </HEADER>
                          <div class="panel-body"

                            <h1 class="page-header">
                             <?php echo $utilisateur->id != null ? $utilisateur->id : 'Nouvel Enregistrement'; ?>
                            </h1>

                        <ol class="breadcrumb">
                          <li><a href="?c=utilisateur">utilisateur</a></li>
                          <li class="active"><?php echo $utilisateur->id != null ? $utilisateur->id : 'Nouvel Enregistrement'; ?></li>
                        </ol>

                        <form id="frm-alumno" action="?c=utilisateur&a=Enregistrer" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" name="Id" value="<?php echo $utilisateur->Id; ?>" class="form-control" placeholder="ID du utilisateur" required>
                            </div>
                            <div class="form-group">
                                <label>CIN</label>
                                <input type="text" name="CIN" value="<?php echo $utilisateur->CIN; ?>" class="form-control" placeholder="CIN du utilisateur" required>
                            </div>
                            <div class="form-group">
                                <label>NOM</label>
                                <input type="text" name="Nom" value="<?php echo $utilisateur->Nom; ?>" class="form-control" placeholder="Nom du utilisateur" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" name="Tel" value="<?php echo $utilisateur->Tel; ?>" class="form-control" placeholder="N° Telephone du utilisateur" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Village</label>
                                <input type="text" name="IdVillage" value="<?php echo $utilisateur->IdVillage; ?>" class="form-control" placeholder="Village du utilisateur" required>
                            </div>    
                            
                            <hr />
                            
                            <div class="text-right">
                                <button class="btn btn-primary">Modifier</button>
                            </div>
                        </form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>