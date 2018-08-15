<div class="page-wrapper">

    <div class="container-fluid">

	        <div class="row page-titles">
	            <div class="col-md-5 align-self-center">
	                <h3 class="text-themecolor">Categorias</h3>
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
                            <div class="card-body">

                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#responsive-modal"><i class="fa fa-plus"></i> Agregar</button>


                            
                                
                                <!-- sample modal content -->
                                <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modal Content is Responsive</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Recipient:</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label">Message:</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
                                
                   
                                
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nombre</th>
                                                <th>Controles</th>
                                                
                                            </tr>
                                        </thead>
                                     
                                        <tbody>

                                            <?php 
                                        

                                            $categorias = ControladorCategorias::ctrMostrarCategorias();
                                            foreach ($categorias as $key => $value) {
                                                
                                                echo '<tr>
                                                <td><span class="footable-toggle"></span>1</td>
                                                
                                                <td>genelia@gmail.com</td>
                                                
                                                <td><span class="label label-danger">Designer</span> </td>
                                               
                                                
                                                
                                            </tr>';
                                            }


                                            ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

			    </div>
			</div>
	</div>
