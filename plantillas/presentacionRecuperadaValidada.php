<div class="row">
<div class="col-md-12 mb-3 form-group">
<label></label>
<input type="hidden" name="idMiembro" value="<?php echo $_SESSION['idMiembro'] ?>">
<input type="hidden" name="presentacion-original" value="<?php echo $PresentacionRecuperada->getPresentacion() ?>">
<textarea class="form-control" rows="10" id="contenido" name="presentacion"><?php echo $validadorPresentacion->getPresentacion() ?></textarea>
<div class="invalid-feedback">
</div>
<?php
    $validadorPresentacion -> mostrarErrorPresentacion();
 ?>
</div>
</div>
<hr class="mb-4">
<button class="btn btn-primary btn-lg btn-block" type="submit" name="guardar-presentacion">Guardar Cambios</button>
