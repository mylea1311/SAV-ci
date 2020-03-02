<center>
   <h1> Ajout Commande </h1>
</center>

<?php echo validation_errors(); ?>
<?php echo form_open('commande/create'); ?>


<div class="container">
   <label for="NomCommande">Nom</label>
   <input type="input" class="form-control" name="nomCommande" />

   <label for="DateCommande">Date</label>
   <input name="dateCommande" class="form-control" />

   <label for="IsDelivred">Envoie</label>
   <input type="input" name="isDelivred" class="form-control" />

   <label for="Fk_clientId">Clients</label>
   <input type="tel" name="fk_clientId" class="form-control" />


   <br>
   <input type="submit" name="submit" value="Créer" class="btn btn-success" />
   <input type="submit" onClick="history.back()" value="retour" class="btn btn-secondary" />
   </form>
</div>