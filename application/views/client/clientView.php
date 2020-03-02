<center>
   <h1><?php echo $title; ?></h1>
</center>
<br>
<div class="container">

   <table class="table table-striped">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">numero</th>
            <th scope="col">adresse</th>
            <th scope="col">telephone</th>
            <th scope="col">mail</th>


         </tr>

      </thead>
      <tbody>
         <?php foreach ($clients as $client) : ?>
            <tr>
               <th scope="row"><?= $client['clientId'] ?></th>
               <td><?= $client['nomClient'] ?>
               <td><?= $client['numClient'] ?></td>
               <td><?= $client['adresse'] ?></td>
               <td><?= $client['numTel'] ?></td>
               <td><?= $client['mail'] ?></td>
               <td>
                  <a href="<?php echo site_url('client/client/' . $client['clientId']); ?>"> <button type="button" class="btn btn-outline-dark">Voir</button></a>
                  <a href="<?php echo site_url('client/delete/' . $client['clientId']); ?>"> <button type="button" class="btn btn-outline-danger">Supprimer</button></a>
                  <a href="<?php echo site_url('client/update/' . $client['clientId']); ?>"><button type=" button" class="btn btn-outline-primary">Modifier</button></a></td>
               </td>




            <?php endforeach ?>


      </tbody>
   </table>
   <a href="<?php echo site_url('client/create'); ?>"><button type="button" class="btn btn-outline-success">Créer</button></a>
</div>