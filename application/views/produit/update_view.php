<center>
   <h1><?php echo $title; ?></h1>
</center>
<?php echo validation_errors(); ?>
<?php echo form_open('produit/update/' . $produit['produitId']); ?>


<hr>
<div class="container">
   <label for="NomProduit">Nom de la produit</label>
   <input type="input" name="nomProduit" class="form-control" value="<?php echo $produit['nomProduit']; ?>" />

   <label for="DescriptProduit">Date de la produit</label>
   <input name="descriptProduit" class="form-control" value="<?php echo $produit['descriptProduit']; ?>" />

   <label for="QttProduit">Envoie de la produit</label>
   <input type="input" name="qttProduit" class="form-control" value="<?php echo $produit['qttProduit']; ?>" />

   <label for="IsAvailable">Client ID</label>
   <input type="number" name="isAvailable" class="form-control" value="<?php echo $produit['isAvailable']; ?>" />

   <label for="PrixProduit">Client ID</label>
   <input type="number" name="prixProduit" class="form-control" value="<?php echo $produit['prixProduit']; ?>" />

   <br>
   <a href="index.php"><input type="submit" name="submit" value="modifier" class="btn btn-primary" /></a>
   <input type="submit" name="submit" onClick="history.back()" value="retour" class="btn btn-secondary" />
   </form>
</div>