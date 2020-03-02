<center>
   <h1> Ajout client </h1>
</center>

<?php echo validation_errors(); ?>
<?php echo form_open('client/create'); ?>


<div class="container">
   <label for="nomClient">Nom</label>
   <input type="input" class="form-control" name="nomClient" />

   <label for="numClient">n° Client</label>
   <input name="numClient" class="form-control" />

   <label for="adresse">Adresse</label>
   <input type="input" name="adresse" class="form-control" />

   <label for="numTel">Téléphone</label>
   <input type="tel" name="numTel" class="form-control" />

   <label for="mail">Mail</label>
   <input type="email" name="mail" class="form-control" />
   <br>
   <input type="submit" name="submit" value="Créer" class="btn btn-success" />
   <input type="submit" onClick="history.back()" value="retour" class="btn btn-secondary" />
   </form>
</div>