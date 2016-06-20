<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Log in</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['route'=> ['usuario.log'],'method'=>'POST'])!!}
                <div>
                    <input name="email" type="text" class="form-control" placeholder="Email...">
                    <input name="password" type="password" class="form-control" placeholder="Password...">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-block" type="submit">
                        Log In
                    </button>
                    <a class="btn btn-block btn-social btn-facebook" href="{{URL::to('auth/facebook')}}">
                        <i class="fa fa-facebook"></i> Log in with Facebook
                    </a>
                </div>

                {!!Form::close()!!}
            </div>

        </div>
    </div>
</div>