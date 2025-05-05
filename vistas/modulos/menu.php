<section class="container-fluid bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if (isset($_GET["modulo"])): ?>
                    <!-- Inicio -->
                    <li class="nav-item">
                        <a href="index.php?modulo=contenido" class="nav-link <?= ($_GET["modulo"] == "contenido") ? 'active' : '' ?>">Inicio</a>
                    </li>
                    
                    <!-- Registro -->
                    <li class="nav-item">
                        <a href="index.php?modulo=registro" class="nav-link <?= ($_GET["modulo"] == "registro") ? 'active' : '' ?>">Registro</a>
                    </li>
                    
                    <!-- Ingreso -->
                    <li class="nav-item">
                        <a href="index.php?modulo=ingreso" class="nav-link <?= ($_GET["modulo"] == "ingreso") ? 'active' : '' ?>">Ingreso</a>
                    </li>
                    
                    <!-- Inventario -->
                    <li class="nav-item">
                        <a href="index.php?modulo=inventario" class="nav-link <?= ($_GET["modulo"] == "inventario") ? 'active' : '' ?>">Inventario</a>
                    </li>
                    
                    <!-- Roles -->
                    <li class="nav-item">
                        <a href="index.php?modulo=roles" class="nav-link <?= ($_GET["modulo"] == "roles") ? 'active' : '' ?>">Roles</a>
                    </li>
                    
                    <!-- Salir -->
                    <li class="nav-item">
                        <a href="index.php?modulo=salir" class="nav-link <?= ($_GET["modulo"] == "salir") ? 'active' : '' ?>">Salir</a>
                    </li>
                <?php else: ?>
                    <!-- Menú por defecto cuando no hay módulo seleccionado -->
                    <li class="nav-item">
                        <a href="index.php?modulo=inicio" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?modulo=registro" class="nav-link">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?modulo=ingreso" class="nav-link">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?modulo=inventario" class="nav-link">Inventario</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?modulo=roles" class="nav-link">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?modulo=salir" class="nav-link">Salir</a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>       
    </div>
</section>