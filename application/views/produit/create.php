<center>
   <h1> Ajout Produit </h1>
</center>

<?php echo validation_errors(); ?>
<?php echo form_open('produit/create'); ?>


<div class="container">
   <label for="NomProduit">Nom du produit</label>
   <input type="input" class="form-control" name="nomProduit" />

   <label for="DescriptProduit">Description du produit</label>
   <input name="descriptProduit" class="form-control" />

   <label for="QttProduit">Quantité</label>
   <input type="input" name="qttProduit" class="form-control" />

   <label for="IsAvailable">Disponibilité</label>
   <input type="tel" name="isAvailable" class="form-control" />


   <label for="PrixProduit">Prix du Produit</label>
   <input type="tel" name="prixProduit" class="form-control" />


   <br>
   <input type="submit" name="submit" value="Créer" class="btn btn-success" />
   <input type="submit" onClick="history.back()" value="retour" class="btn btn-secondary" />
   </form>
</div>