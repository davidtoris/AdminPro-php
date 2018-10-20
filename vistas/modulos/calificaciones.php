<div class="page-wrapper">

  <div class="container-fluid">

    <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h3 class="text-themecolor">Calificaciones</h3>
              </div>
              <div class="col-md-7 align-self-center">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                          <a href="javascript:void(0)">Home</a>
                      </li>
                      <li class="breadcrumb-item">pages</li>
                      <li class="breadcrumb-item active">Categorias</li>
                  </ol>
              </div>
              <!-- <div>
                  <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
              </div> -->
    </div>




  <div class="row">
          <div class="col-12">
               <div class="card">

               <?php
               if($_SESSION['foto'] == 'administrador'){
                    echo'<div class="card-body">
          
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCalificacion">
                        
                        Agregar Calificaciones

                        </button>

                    </div>';}?>

  <div class="table-responsive m-t-40">
        
    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">

        <thead>
            <tr>
                <th>Materia</th>
                <th>Bim1</th>
                <th>Bim2</th>
                <th>Bim3</th>
                <th>Bim4</th>
                <th>Final</th>
                <?php
               if($_SESSION['foto'] == 'administrador'){
                echo'<th>Acciones</th>
                ';}?>
            </tr> 
        </thead>

        <tbody>
            
        <?php



$calificaciones = ControladorCalificaciones::ctrMostrarCalificaciones();

foreach ($calificaciones as $key => $value){
    
         
          echo' 
          
          <tr>
            
            <td>'.$value["materia"].'</td>
            <td>'.$value["bim1"].'</td>
            <td>'.$value["bim2"].'</td>
            <td>'.$value["bim3"].'</td>
            <td>'.$value["bim4"].'</td>
            <td>'.$value["final"].'</td>';
            
            if($_SESSION['foto'] == 'administrador'){
             echo'<td>
                <div class="btn-group">
                    <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
                </div>';
            }    

            echo'</td>

          </tr>';
          }?>

          
        </tbody>

       </table>
                  </div>
                </div>
            </div>

          </div>
      </div>
  </div>




<!--=====================================
MODAL AGREGAR CALIFICACIONES
======================================-->

<div id="modalAgregarCalificacion" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Calificación</h4>

        </div>
        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


          <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="nuevaMateria" required>
                  
                  <option value="">Seleciona la Materia</option>

                  <option value="espanol">Español</option>
                  <option value="matematicas">Matemáticas</option>
                  <option value="ciencias">Ciencias</option>
                  <option value="historia">Historia</option>
                  <option value="geografia">Geografía</option>

                </select>

              </div>

            </div>


            <!-- ENTRADA PARA EL 1er BIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-tasks"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoBim1" placeholder="Calificación 1er Bim" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL 2do BIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class=" fa fa-tasks"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoBim2" placeholder="Calificación 2do Bim" >

              </div>

            </div>


            <!-- ENTRADA PARA EL 3er BIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class=" fa fa-tasks"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoBim3" placeholder="Calificación 3er Bim" >

              </div>

            </div>


            <!-- ENTRADA PARA EL 4to BIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class=" fa fa-tasks"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoBim4" placeholder="Calificación 4to Bim" >

              </div>

            </div>

            
            <!-- ENTRADA PARA EL FINAL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class=" fa fa-tasks"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoFinal" placeholder="Calificación FINAL"   >

              </div>

            </div>


            
             

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

         <?php

          $crearUsuario = new ControladorCalificaciones();
          $crearUsuario -> ctrCrearCalificaciones();

        ?>

      </form>

    </div>

  </div>

</div>



<!--=====================================
MODAL EDITAR CALIFICACIONES
======================================-->

<div id="modalEitarCalificacion" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Calificación</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


          <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="editarMateria" required>
                  
                  <option value="" id="editarMateria"></option>

                  <option value="espanol">Español</option>
                  <option value="matematicas">Matemáticas</option>
                  <option value="ciencias">Ciencias</option>
                  <option value="historia">Historia</option>
                  <option value="geografia">Geografía</option>

                </select>

              </div>

            </div>


            <!-- ENTRADA PARA EL 1er BIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-tasks"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoBim1" id="nuevoBim1" value="">

              </div>

            </div>



            <!-- ENTRADA PARA EL 2do BIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class=" fa fa-tasks"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoBim2" id="nuevoBim2" >

              </div>

            </div>


            <!-- ENTRADA PARA EL 3er BIM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class=" fa fa-tasks"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoBim3" id="nuevoBim3">

              </div>

            </div>


            <!-- ENTRADA PARA EL 4to BIM -->
            
            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class=" fa fa-tasks"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoBim4" placeholder="Calificación 4to Bim" >

              </div>

            </div>

            
            <!-- ENTRADA PARA EL FINAL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class=" fa fa-tasks"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoFinal" placeholder="Calificación FINAL"   >

              </div>

            </div>  
             

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

         <?php

          $crearUsuario = new ControladorCalificaciones();
          $crearUsuario -> ctrCrearCalificaciones();

        ?>

      </form>

    </div>

  </div>

</div>