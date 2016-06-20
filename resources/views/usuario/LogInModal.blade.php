<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ingresar</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['route'=> ['usuario.log'],'method'=>'POST'])!!}
                <div >
                    <input name="email" type="text" class="form-control" placeholder="Correo..."><br>
                    <input name="password" type="password" class="form-control" placeholder="Contraseña...">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-block" type="submit">
                        Ingresar
                    </button>
                    <a class="btn btn-block btn-social btn-facebook" href="{{URL::to('auth/facebook')}}">
                        <i class="fa fa-facebook"></i> Ingresar con Facebook
                    </a>
                </div>

                {!!Form::close()!!}
            </div>

        </div>
    </div>
</div>