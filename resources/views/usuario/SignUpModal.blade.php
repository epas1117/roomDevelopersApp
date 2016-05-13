<div id="signUpModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['route'=> ['usuario.store'],'method'=>'POST'])!!}
                <div class="input-group">
                    <input name="name" type="text" class="form-control" placeholder="Your name...">
                    <input name="email" type="text" class="form-control" placeholder="Email...">
                    <input name="password" type="password" class="form-control" placeholder="Password...">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="submit">
                        Sign Up
                    </button>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>