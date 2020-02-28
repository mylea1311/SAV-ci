<center>
   <h1><?php echo $title; ?></h1>
</center>
<?php echo validation_errors(); ?>
<?php echo form_open('client/update/' . $client['clientId']); ?>


<hr>
<div class="container">
   <label for="nomClient">Nom</label>
   <input type="input" name="nomClient" class="form-control" value="<?php echo $client['nomClient']; ?>" />

   <label for="numClient">n° Client</label>
   <input name="numClient" class="form-control" value="<?php echo $client['numClient']; ?>" />

   <label for="adresse">Adresse</label>
   <input type="input" name="adresse" class="form-control" value="<?php echo $client['adresse']; ?>" />

   <label for="numTel">Téléphone</label>
   <input type="tel" name="numTel" class="form-control" value="<?php echo $client['numTel']; ?>" />

   <label for="mail">Mail</label>
   <input type="email" name="mail" class="form-control" value="<?php echo $client['mail']; ?>" />
   <br>
   <input type="submit" name="submit" value="modifier" class="btn btn-primary" />

   </form>
</div>