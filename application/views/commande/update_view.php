<center>
   <h1><?php echo $title; ?></h1>
</center>
<?php echo validation_errors(); ?>
<?php echo form_open('commande/update/' . $commande['commandeId']); ?>


<hr>
<div class="container">
   <label for="NomCommande">Nom de la Commande</label>
   <input type="input" name="nomCommande" class="form-control" value="<?php echo $commande['nomCommande']; ?>" />

   <label for="DateCommande">Date de la Commande</label>
   <input name="dateCommande" class="form-control" value="<?php echo $commande['dateCommande']; ?>" />

   <label for="IsDelivred">Envoie de la commande</label>
   <input type="input" name="isDelivred" class="form-control" value="<?php echo $commande['isDelivred']; ?>" />

   <label for="Fk_clientId">Client ID</label>
   <input type="number" name="fk_clientId" class="form-control" value="<?php echo $commande['fk_clientId']; ?>" />

   <br>
   <input type="submit" name="submit" value="modifier" class="btn btn-primary" />
   <input type="submit" name="submit" onClick="history.back()" value="retour" class="btn btn-secondary" />
   </form>
</div>