<?php
    /* TODO: Rol 1 es de Usuario */
    if ($_SESSION["rol_id"]==1){
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="font-icon font-icon-dashboard"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="font-icon font-icon-contacts"></span>
                            <span class="lbl">Nuevo Ticket</span>
                        </a>
                    </li>

                    <li class="magenta with-sub">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php
    }else{
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="font-icon font-icon-dashboard"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>

                    <li class="pink-red">
                        <a href="..\NuevoTicket\">
                            <span class="font-icon font-icon-contacts"></span>
                            <span class="lbl">Nuevo Ticket</span>
                        </a>
                    </li>

                    <li class="green with-sub">
                        <a href="..\MntUsuario\">
                            <span class="font-icon font-icon-user"></span>
                            <span class="lbl">Mant. Usuario</span>
                        </a>
                    </li>

                    <li class="pink-red">
                        <a href="..\MntPrioridad\">
                            <span class="font-icon font-icon-zigzag"></span>
                            <span class="lbl">Mant. Prioridad</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MntCategoria\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Mant. Categoria</span>
                        </a>
                    </li>

                    <li class="blue-magenta with-sub">
                        <a href="..\MntSubCategoria\">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="lbl">Mant. Sub Categoria</span>
                        </a>
                    </li>

                    <li class="magenta with-sub">
                        <a href="..\ConsultarTicket\">
                            <span class="font-icon font-icon-notebook"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php
    }
?>
