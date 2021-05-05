<h1 class="page-header">
    <?php echo $fournisseur->id != null ? $fournisseur->denomination : 'Nouvel Enregistrement'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=fournisseur">fournisseur</a></li>
  <li class="active"><?php echo $fournisseur->id != null ? $fournisseur->denomination : 'Nouveau fournisseur'; ?></li>
</ol>

<form id="frm-alumno" action="?c=fournisseur&a=Enregistrer" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $fournisseur->id; ?>" />
    
    <div class="form-group">
        <label>Dénomination</label>
        <input type="text" name="denomination" value="<?php echo $fournisseur->denomination; ?>" class="form-control" placeholder="Nom Fournisseur" required>
    </div> 
    <div class="form-group">
        <label>Adresse</label>
        <input type="text" name="adresse" value="<?php echo $fournisseur->adresse; ?>" class="form-control" placeholder="Adresse Fournisseur" required>
    </div>
     <div class="form-group">
        <label>Téléphone</label>
        <input type="text" name="telephone" value="<?php echo $fournisseur->telephone; ?>" class="form-control" placeholder="Téléphone" required>
    </div>
    <div class="form-group">
        <label>E-mail</label>
        <input type="text" name="email" value="<?php echo $fournisseur->email; ?>" class="form-control" placeholder="E-Mail Fournisseur" required>
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