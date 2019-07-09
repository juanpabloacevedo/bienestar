@extends('profesor.layouts.base_inst')

@section('content')


        <div class="card-body text-center align-content-center align-items-center">
          <div class="card-title text-center">
            <br/>

            <h2 class="text-left">Clases </h2>
            <br/>

            <table class="table">
              <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Clase </th>
                <th scope="col">Periodo</th>
                <th scope="col">Espacio Deportivo</th>
                <th scope="col">Cupo</th>
                <th></th>
                <th></th>

              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Civil1</td>
                <td>2019-2</td>
                <td>Alterofilia</td>
                <td>32</td>
                <td><a href="#agregarModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Agregar</a>


                <div id="agregarModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">

                        <h4 class="modal-title">Reserva</h4>
                      </div>
                      <div class="modal-body">
                        <ul class="collection">
                          <li class="collection-item avatar">

                            <span class="title ">Pepe</span>
                            <p class="">Estudiante
                            <br/>
                              213578
                            <br/>
                              <a class="secondary-content align-bottom" href="javascript:add_user(3)"><i class="m btn btn-outline-primary">person_add</i></a>
                            </p>

                          </li>
                          <li class="collection-item avatar">

                            <span class="title">jimmy</span>
                            <>Instructor
                              <br>
                              45454
                            <br/>
                            <a class="secondary-content" href="javascript:add_user(2)"><i class="material-icons">person_add</i></a>
                            </p>

                          </li>
                          <li class="collection-item avatar">

                            <span class="title">supadministrador</span>
                            <p>Administrador
                              <br>
                              0001
                            <br/>
                              <a class="secondary-content" href="javascript:add_user(1)"><i class="material-icons">person_add</i></a>
                            </p>

                          </li>
                        </ul>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-outline-primary">Registrar</button>
                      </div>
                    </div>
                  </div>
                </div></td>
                <td><a href="#reservaModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Reserva</a>


                  <div id="reservaModal" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">

                          <h4 class="modal-title">Reserva</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label >Nombres</label>
                            <input type="text" class="form-control" id="nomb"  aria-describedby="nomb" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label >Espacio</label>
                          <select class="form-control">
                            <option>Espacio Deportivo</option>
                            <option value="1">Alterofilia</option>

                          </select>
                        </div>
                        <div class="form-group">
                          <label >Clase</label>
                          <select class="form-control">
                            <option>Clase</option>
                            <option value="1">Civil1</option>

                          </select>
                        </div>
                          <div class="form-group">
                            <label >Inicio</label>
                            <input type="datetime-local" class="form-control" id="ini"  aria-describedby="ini" >
                          </div>
                          <div class="form-group">
                            <label >Fin</label>
                            <input type="datetime-local" class="form-control" id="fin"  aria-describedby="fin" >
                          </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-outline-primary">Registrar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>


              </tr>
              <tr>
                <td>2</td>
                <td>Arqt2</td>
                <td>2019-2</td>
                <td>funcional</td>
                <td>42</td>
                <td><button class=" btn btn-primary">agregar</button></td>
                <td><button class=" btn btn-primary">Reserva</button></td>



              </tr>
              <tr>
                <td>1</td>
                <td>Sis1</td>
                <td>2020-1</td>
                <td>TRX</td>
                <td>32</td>
                <td><button class=" btn btn-primary">agregar</button></td>
                <td><button class=" btn btn-primary">Reserva</button></td>


              </tr>
              </tbody>
            </table>




            <div class="card-body">
              <div class="row text-center align-items-center justify-content-center">
              </div>
            </div>
          </div>
        </div>



@endsection