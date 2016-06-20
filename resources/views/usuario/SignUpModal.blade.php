<div id="signUpModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registrarse</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['route'=> ['usuario.store'],'method'=>'POST'])!!}
                <div >
                    <input name="name" type="text" class="form-control" placeholder="Nombre...">
                    <input name="email" type="text" class="form-control" placeholder="Correo...">
                    <input name="password" type="password" class="form-control" placeholder="Contraseña...">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-block" type="submit">
                        Registrarse
                    </button>
                    <a class="btn btn-block btn-social btn-facebook" href="{{URL::to('auth/facebook')}}">
                        <i class="fa fa-facebook"></i> Registrarse con Facebook
                    </a>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>