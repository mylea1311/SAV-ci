<center>
   <h1><?php echo $title; ?></h1>
</center>


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
         <th scope="row"><?= $client['clientId'] ?></th>
         <td><?php echo $client['nomClient']; ?> </td>
         <td><?= $client['numClient'] ?></td>
         <td><?= $client['adresse'] ?></td>
         <td><?= $client['numTel'] ?></td>
         <td><?= $client['mail'] ?></td>
         </tr>

   </table>
   <input type="submit" name="submit" onClick="history.back()" value="retour" class="btn btn-secondary" />