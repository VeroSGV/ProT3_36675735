<form>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre completo</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre completo" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" required>
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirmar contraseña</label>
        <input type="password" class="form-control" id="confirmPassword" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="terminos" required>
        <label class="form-check-label" for="terminos">Acepto los <a href="#">términos y condiciones</a></label>
    </div>
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
</form>