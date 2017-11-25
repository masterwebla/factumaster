<div class="modal fade" tabindex="-1" id="modal-usuario" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Actualizar mis datos</h4>
      </div>
      <div class="modal-body">
        <!-- FORMULARIO DE USUARIOS -->
        <div class="row">
          <div class="col-md-12">
            {!!Form::model(Auth::user(),['route' => ['usuarios.update',Auth::user()->id], 'method'=>'PUT']) !!}
              {!!Form::label('name','Nombre')!!}
              {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Su nombre'])!!}
              {!!Form::label('email','Email')!!}
              {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Su email'])!!}
              {!!Form::label('password','Contraseña')!!}
              {!!Form::password('password',['class'=>'form-control','placeholder'=>'Su contraseña'])!!}
              <br>
              {!!Form::submit('Actualizar Mis Datos', ['class'=>'btn btn-primary'])!!}
            {!! Form::close() !!}
          </div>
        </div>
        <!-- FIN - FORMULARIO -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->