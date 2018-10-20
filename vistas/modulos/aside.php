<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <?php
                        
                        if($_SESSION['foto'] == 'administrador'){
                        echo'<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                            <span class="hide-menu">Administrador 
                                <span class="label label-rouded label-themecolor pull-right">5</span>
                            </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="usuarios">Usuarios</a></li>
                            </ul>
                        </li>';
                    }?>

                        <!-- Alumnos -->
                        <li> <a class="has-arrow waves-effect waves-dark" href="calificaciones" aria-expand="false"><i class="mdi mdi-gauge"></i>
                            <span class="hide-menu">Calificaciones 
                                <span class="label label-rouded label-themecolor pull-right">5</span>
                            </span></a>
                        </li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->