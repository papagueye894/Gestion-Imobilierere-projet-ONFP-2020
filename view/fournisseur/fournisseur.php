<h1 class="page-header">GESTION DES FOURNISSEURS </h1>


    <a class="btn btn-primary pull-right" href="?c=fournisseur&a=Crud">Ajouter</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Dénomination</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Adresse</th>
            <th style=" background-color: #5DACCD; color:#fff">Telephone</th>
            <th style=" background-color: #5DACCD; color:#fff">E-mail</th>
            <th style="width:60px; background-color: #5DACCD; color:#fff">Modifier</th>
            <th style="width:60px; background-color: #5DACCD; color:#fff">Supprimer</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Lister() as $r): ?>
        <tr>
            <td><?php echo $r->denomination; ?></td>
            <td><?php echo $r->adresse; ?></td>
            <td><?php echo $r->telephone; ?></td>
            <td><?php echo $r->email; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=fournisseur&a=Crud&id=<?php echo $r->id; ?>">Modifier</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('Voulez-vous vraiment supprimer cet enregistrement?');" href="?c=fournisseur&a=Supprimer&id=<?php echo $r->id; ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="../../assets/js/datatable.js">  

</script>


</html>
