<form method="post">
    {{csrf_field()}}
    <div class="row">
        <div class="large-4 columns">
            <label>Nombre
                <input type="text" name="name" value="{{$name or old('name')}}"  />
            </label>
            @if($errors->first('name'))
                <small class="error">{{$errors->first('name')}}</small>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="large-4 columns">
            <label>Correo
                <input type="text" name="email" value="{{$email or old('email')}}"  />
            </label>
            @if($errors->first('email'))
            <small class="error">{{$errors->first('email')}}</small>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <label>
                <input class="button small success radius" type="submit" value="ENVIAR" />
            </label>
        </div>
    </div>
</form>