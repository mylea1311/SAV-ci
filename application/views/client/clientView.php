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
            <th scope="col">BOUTON</th>

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
               <td><button type="button" class="btn btn-outline-danger" href="<?php echo site_url('/client/delete/' . $client['clientId']); ?>">Supprimer</button>
                  <button type="button" class="btn btn-outline-primary" href="<?php echo site_url('client/update/' . $client['clientId']); ?>">Modifier</button></td>
               </td>

            <?php endforeach ?>
      </tbody>
   </table>
</div>