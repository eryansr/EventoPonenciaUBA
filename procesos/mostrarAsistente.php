<?php

    require_once "../admin/crud.php";
    $obj = new Crud(); // crea nueva instancia de la clase crud
    $datos = $obj->mostrarAsistente(); // variable almacena el array retornado del metodo mostrarDatos 

    $tabla = '<table class="table table-dark">
									<thead>
										<tr class="font-weight-bold">
											<td>Nombre</td>
											<td>Apellido 1</td>
                                            <td>Apellido 2</td>
                                            <td>Cedula</td>
                                            <td>Dirección</td>
											<td>Teléfono</td>
											<td>Email</td>
                                            <td>Eliminar</td>
										</tr>
									</thead>
									<tbody>';
    $datosTabla="";

    foreach($datos as $key => $value) { // ciclo para mostrar cada uno de los registros de la tabla
                                        // utiliza la clave primaria como índice
        $datosTabla=$datosTabla.'<tr>   
											<td>'.$value['nombre'].'</td>
											<td>'.$value['apellido1'].'</td>
											<td>'.$value['apellido2'].'</td>
                                            <td>'.$value['cedula'].'</td>
                                            <td>'.$value['direccion'].'</td>
                                            <td>'.$value['telefono'].'</td>
                                            <td>'.$value['email'].'</td>
								            <td>
												<span class="btn btn-danger btn-sm" onclick="eliminarAsistente('.$value['id_asist'].')">
													<li class="fas fa-trash-alt"></li>
												</span>
											</td>
										</tr>';
    }
    
    echo $tabla.$datosTabla.'</tbody></table>'; // concatena todas las variables
?>