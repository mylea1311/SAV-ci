<h1><?php echo $title; ?></h1>
<?php echo validation_errors(); ?>
<?php echo form_open('client/update/' . $client['clientId']); ?>

<label for="nomClient">Nom</label>
<input type="input" name="nomClient" value="<?php echo $client['nomClient']; ?>" />

<label for="numClient">n° Client</label>
<input name="numClient" value="<?php echo $client['numClient']; ?>" />

<label for="adresse">Adresse</label>
<input type="input" name="adresse" value="<?php echo $client['adresse']; ?>" />

<label for="numTel">Téléphone</label>
<input type="tel" name="numTel" value="<?php echo $client['numTel']; ?>" />

<label for="mail">Mail</label>
<input type="email" name="mail" value="<?php echo $client['mail']; ?>" />

<input type="submit" name="submit" value="modifier" />

</form>