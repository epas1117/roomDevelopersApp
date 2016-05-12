<div class="modal fade" id="myModalLabel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
            </div>
            <div class="modal-body">

                {!!Form::open(['route'=> ['usuario.signUp'],'method'=>'POST'])!!}
                <div class="input-group">

                    <input name="email" type="text" class="form-control" placeholder="Email...">
                    <input name="password" type="password" class="form-control" placeholder="Password...">

                    <button class="btn btn-default" type="submit">
                        Enter
                    </button>

                </div>
                {!!Form::close()!!}

            </div>
            <div class="modal-footer">
                {!!link_to('#', $title='Actualizar', $attributes = ['id'=>'actualizar', 'class'=>'btn btn-primary'], $secure = null)!!}
            </div>
        </div>
    </div>
</div>