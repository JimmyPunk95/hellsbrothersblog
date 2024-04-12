<div class="row">
<div class="col-md-12 mb-3 form-group">
<label></label>
<input type="hidden" name="idMiembro" value="<?php echo $_SESSION['idMiembro'] ?>">
<textarea class="form-control" rows="10" id="contenido" name="presentacion"></textarea>
<div class="invalid-feedback">
</div>
<?php
 $validador -> mostrarErrorPresentacion();
  ?>
</div>
</div>
<hr class="mb-4">
<button class="btn btn-primary btn-lg btn-block" type="submit" name="publicar">Publicar</button>

