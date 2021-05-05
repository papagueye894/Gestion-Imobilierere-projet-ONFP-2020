<h1 class="page-header">Modele CRUD MVC -  PHP POO PDO </h1>


    <a class="btn btn-primary pull-right" href="?c=client&a=Crud">Ajouter</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">CNI</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Prénom</th>
            <th style=" background-color: #5DACCD; color:#fff">Nom</th>
            <th style=" background-color: #5DACCD; color:#fff">Adresse</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Telephone</th>            
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Lister() as $r): ?>
        <tr>
            <td><?php echo $r->cni; ?></td>
            <td><?php echo $r->prenom; ?></td>
            <td><?php echo $r->nom; ?></td>
            <td><?php echo $r->adresse; ?></td>
            <td><?php echo $r->telephone; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=client&a=Crud&id=<?php echo $r->id; ?>">Modifier</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('Voulez-vous vraiment supprimer cet enregistrement?');" href="?c=client&a=Supprimer&id=<?php echo $r->id; ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="../../assets/js/datatable.js">  

</script>


</html>
