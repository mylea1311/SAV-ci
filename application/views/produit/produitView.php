<center>
   <h1><?php echo $title; ?></h1>
</center>
<br>
<div class="container">

   <table class="table table-striped">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Nom du produit</th>
            <th scope="col">Description du produit</th>
            <th scope="col">Quantité</th>
            <th scope="col">Disponibilité</th>
            <th scope="col">Prix du Produit</th>


         </tr>

      </thead>
      <tbody>
         <?php foreach ($produits as $produit) : ?>
            <tr>
               <th scope="row"><?= $produit['produitId'] ?></th>
               <td><?= $produit['nomProduit'] ?>
               <td><?= $produit['descriptProduit'] ?></td>
               <td><?= $produit['isAvailable'] ?></td>
               <td><?= $produit['qttProduit'] ?></td>
               <td><?= $produit['prixProduit'] ?></td>

               <td>
                  <a href="<?php echo site_url('produit/produit/' . $produit['produitId']); ?>"> <button type="button" class="btn btn-outline-dark">Voir</button></a>
                  <a href="<?php echo site_url('produit/delete/' . $produit['produitId']); ?>"> <button type="button" class="btn btn-outline-danger">Supprimer</button></a>
                  <a href="<?php echo site_url('produit/update/' . $produit['produitId']); ?>"><button type=" button" class="btn btn-outline-primary">Modifier</button></a></td>
               </td>




            <?php endforeach ?>


      </tbody>
   </table>
   <a href="<?php echo site_url('produit/create'); ?>"><button type="button" class="btn btn-outline-success">Créer</button></a>
</div>