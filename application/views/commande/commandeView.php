<center>
   <h1><?php echo $title; ?></h1>
</center>
<br>
<div class="container">

   <table class="table table-striped">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Nom de la commande</th>
            <th scope="col">Date de la commande</th>
            <th scope="col">Délivré</th>
            <th scope="col">Client ID</th>


         </tr>

      </thead>
      <tbody>
         <?php foreach ($commandes as $commande) : ?>
            <tr>
               <th scope="row"><?= $commande['commandeId'] ?></th>
               <td><?= $commande['nomCommande'] ?>
               <td><?= $commande['dateCommande'] ?></td>
               <td><?= $commande['isDelivred'] ?></td>
               <td><?= $commande['fk_clientId'] ?></td>

               <td>
                  <a href="<?php echo site_url('commande/commande/' . $commande['commandeId']); ?>"> <button type="button" class="btn btn-outline-dark">Voir</button></a>
                  <a href="<?php echo site_url('commande/delete/' . $commande['commandeId']); ?>"> <button type="button" class="btn btn-outline-danger">Supprimer</button></a>
                  <a href="<?php echo site_url('commande/update/' . $commande['commandeId']); ?>"><button type=" button" class="btn btn-outline-primary">Modifier</button></a></td>
               </td>




            <?php endforeach ?>


      </tbody>
   </table>
   <a href="<?php echo site_url('commande/create'); ?>"><button type="button" class="btn btn-outline-success">Créer</button></a>
</div>