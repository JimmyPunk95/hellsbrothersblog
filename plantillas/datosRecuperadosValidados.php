<div class="row">
          <div class="col-md-6 mb-3 form-group">
            <input type="hidden" name="idMiembro" value="<?php echo $_SESSION['idMiembro'] ?>">
            <label>Nombre(s)</label>
            <input type="text" class="form-control" name="nombre" required value="<?php echo $validador -> getNombre() ?>">
            <input type="hidden" name="nombre-original" value="<?php echo $MiembroRecuperado -> getNombre() ?>">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
            <?php
                $validador -> mostrarErrorNombre();
             ?>
          </div>
          <div class="col-md-6 mb-3 form-group">
            <label>Apellido(s)</label>
            <input type="text" class="form-control" name="apellido" required value="<?php echo $validador -> getApellido() ?>">
            <input type="hidden" name="apellido-original" value="<?php echo $MiembroRecuperado -> getApellido() ?>">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <?php
                $validador -> mostrarErrorApellido();
             ?>
        </div>

        <div class="mb-3 form-group">
          <label>Plataforma (Nickname)</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            <input type="hidden" name="plataforma-original" value="<?php echo $MiembroRecuperado -> getPlataforma() ?>">
            <select type="text" class="custom-select d-block w-100" name="plataforma" required>
              <option><?php echo $validador -> getPlataforma() ?></option>
                <option>PC</option>
                <option>Xbox One</option>
                <option>Play Station</option>
                <option>Nintendo</option>
                <option>Móvil</option>
            </select>
            <?php
                $validador -> mostrarErrorPlataforma();
             ?>
            </div>
            <input type="text" class="form-control" name="nickname" required value="<?php echo $validador -> getNickname() ?>">
            <input type="hidden" name="nickname-original" value="<?php echo $MiembroRecuperado -> getNickname() ?>">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
            <?php
                $validador -> mostrarErrorNickname();
             ?>
          </div>
        </div>

        <div class="mb-3 form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" required value="<?php echo $validador -> getEmail() ?>">
          <input type="hidden" name="email-original" value="<?php echo $MiembroRecuperado -> getEmail() ?>">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
          <?php
                $validador -> mostrarErrorEmail();
             ?>
        </div>
          <div class="mb-3 form-group">
          <label>Ciudad</label>
          <input type="text" class="form-control" name="ciudad" required value="<?php echo $validador -> getCiudad() ?>">
          <input type="hidden" name="ciudad-original" value="<?php echo $MiembroRecuperado -> getCiudad() ?>">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
          <?php
                $validador -> mostrarErrorCiudad();
             ?>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3 form-group">
            <label>País</label>
            <input type="hidden" name="pais-original" value="<?php echo $MiembroRecuperado -> getPais() ?>">
            <select type="text" class="custom-select d-block w-100" name="pais" required>
                <option>
                   <?php echo $validador->getPais(); ?>
                </option>
                <option>México</option>
                <option>Otro</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
            <?php
                $validador -> mostrarErrorPais();
             ?>
          </div>
          <div class="col-md-4 mb-3 form-group">
            <label>Estado</label>
            <input type="hidden" name="estado-original" value="<?php echo $MiembroRecuperado -> getEstado() ?>">
            <select type="text" class="custom-select d-block w-100" name="estado" required>
              <option><?php echo $validador -> getEstado() ?></option>
                <option>Aguascalientes</option>
                <option>Baja California</option>
                <option>Baja California Sur</option>
                <option>Campeche</option>
                <option>Ciudad de México</option>
                <option>Coahuila</option>
                <option>Colima</option>
                <option>Chiapas</option>
                <option>Chihuahua</option>
                <option>Durango</option>
                <option>Guanajuato</option>
                <option>Guerrero</option>
                <option>Hidalgo</option>
                <option>Jalisco</option>
                <option>México</option>
                <option>Michoacán</option>
                <option>Morelos</option>
                <option>Nayarit</option>
                <option>Nuevo León</option>
                <option>Oaxaca</option>
                <option>Puebla</option>
                <option>Querétaro</option>
                <option>Quintana Roo</option>
                <option>San Luis Potosí</option>
                <option>Sinaloa</option>
                <option>Sonora</option>
                <option>Tabasco</option>
                <option>Tamaulipas</option>
                <option>Tlaxcala</option>
                <option>Veracruz</option>
                <option>Yucatán</option>
                <option>Zacatecas</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
            <?php
                $validador -> mostrarErrorEstado();
             ?>
          </div>
          <div class="col-md-5 mb-3 form-group">
            
            <label>Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fechaNac" required value="<?php echo $validador -> getFechaNac() ?>">
            <input type="hidden" name="fechaNac-original" value="<?php echo $MiembroRecuperado -> getFechaNac() ?>">
            <div class="invalid-feedback">
            </div>
            <?php
                $validador -> mostrarErrorFechaNac();
             ?>
          </div>
        </div>
          <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="guardar-cambios">Guardar</button>

