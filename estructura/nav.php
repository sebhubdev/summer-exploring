<nav id="nav_principal">
        <div class='logo_principal'>
                <img src="<?php echo $enlace; ?>sources/img/logo.png?v=1" alt="Summer exploring logo">
        </div>
        <ul>
                <li><a href="<?php echo $enlace; ?>home/">Home</a></li>
                <li><a href="<?php echo $enlace; ?>about/">About us</a></li>
                <li><a href="<?php echo $enlace; ?>services/">Services</a>
                        <ul>
                                <li><a href="<?php echo $enlace; ?>service/services-1/">Service 1</a></li>
                                <li><a href="<?php echo $enlace; ?>service/services-2/">Service 2</a></li>
                                <li><a href="<?php echo $enlace; ?>service/services-3/">Service 3</a></li>
                                <li><a href="<?php echo $enlace; ?>service/Service-4-osea-servicio-numero-4/">Service 4 osea servicio numero 4</a></li>
                        </ul>
                </li>
                <li><a href="<?php echo $enlace; ?>portfolio/">Portfolio</a></li>
                <li><a href="<?php echo $enlace; ?>contact/">Contact us</a></li>
        </ul>
        <div class="botones abrir" onclick="abrir_menu()"><?php include 'sources/svg/abrir.svg'; ?></div>
        <div class="botones cerrar" onclick="cerrar_menu()"><?php include 'sources/svg/cerrar.svg'; ?></div>
</nav>
