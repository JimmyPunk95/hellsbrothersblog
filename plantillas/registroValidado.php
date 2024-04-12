<div class="row">
          <div class="col-md-6 mb-3 form-group">
            <label>Nombre(s)</label>
            <input type="text" class="form-control" name="nombre" required <?php $validador -> mostrarNombre() ?>>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
            <?php
                $validador -> mostrarErrorNombre();
             ?>
          </div>
          <div class="col-md-6 mb-3 form-group">
            <label>Apellido(s)</label>
            <input type="text" class="form-control" name="apellido" required <?php $validador -> mostrarApellido() ?>>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
            <?php
                $validador -> mostrarErrorApellido();
             ?>
          </div>
        </div>

        <div class="mb-3 form-group">
          <label>Plataforma (Nickname)</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            
            <select type="text" class="custom-select d-block w-100" name="plataforma" required <?php $validador -> mostrarPlataforma() ?>>
              <option value="">Opciones</option>
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
            <input type="text" class="form-control" name="nickname" required <?php $validador -> mostrarNickname() ?>>
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
          <input type="email" class="form-control" name="email" required <?php $validador -> mostrarEmail() ?>>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
          <?php
                $validador -> mostrarErrorEmail();
          ?>
        </div>
          
        <div class="mb-3 form-group">
          <label>Contraseña</label>
          <input type="password" class="form-control" name="clave1" required>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
          <?php
                $validador -> mostrarErrorClave1();
             ?>
        </div>

        <div class="mb-3 form-group">
          <label>Confirmar Contraseña</label>
          <input type="password" class="form-control" name="clave2" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
          <?php
                $validador -> mostrarErrorClave2();
             ?>
        </div>
          
          <div class="mb-3 form-group">
          <label>Ciudad</label>
          <input type="text" class="form-control" name="ciudad" required <?php $validador -> mostrarCiudad() ?>>
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
            <select type="text" class="custom-select d-block w-100" name="pais" required <?php $validador->mostrarPais(); ?>>
                <option value="">
                    Seleccionar
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
            <select type="text" class="custom-select d-block w-100" name="estado" required <?php $validador -> mostrarEstado() ?>>
              <option value="">Seleccionar</option>
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
            <input type="date" class="form-control" name="fechaNac" required <?php $validador -> mostrarFechaNac() ?>>
            
            <div class="invalid-feedback">
             
            </div>
            <?php
                $validador -> mostrarErrorFechaNac();
             ?>
          </div>
            
            <div class="col-md-12 mb-3 form-group">
          <label>Contraseña del Clan</label>
          <input type="password" class="form-control" name="clanPassword" placeholder="Contraseña proporcionada por el Clan" required>
          <div class="invalid-feedback">
            
          </div>
          <?php
                $validador -> mostrarErrorClanPassword();
             ?>
        </div>
        </div>
          <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="enviar">Continuar</button>
