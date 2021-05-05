<h1 class="page-header">
    <?php echo $client->id != null ? $client->cni : 'Nouvel Enregistrement'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=client">client</a></li>
  <li class="active"><?php echo $client->id != null ? $client->cni : 'Nouveau Client'; ?></li>
</ol>

<form id="frm-alumno" action="?c=client&a=Enregistrer" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $client->id; ?>" />
      <div class="form-group">
        <label>CNI</label>
        <input type="text" name="cni" value="<?php echo $client->cni; ?>" class="form-control" placeholder="Carte Nationale d'Identité" required>
    </div>
    
    <div class="form-group">
        <label>Prénom</label>
        <input type="text" name="prenom" value="<?php echo $client->prenom; ?>" class="form-control" placeholder="Prénom" required>
    </div>
    
    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" value="<?php echo $client->nom; ?>" class="form-control" placeholder="Nom" required>
    </div>
    
    <div class="form-group">
        <label>Adresse</label>
        <input type="text" name="adresse" value="<?php echo $client->adresse; ?>" class="form-control" placeholder="Adresse" required>
    </div>
     <div class="form-group">
        <label>Téléphone</label>
        <input type="text" name="telephone" value="<?php echo $client->telephone; ?>" class="form-control" placeholder="Téléphone" required>
    </div>
        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>