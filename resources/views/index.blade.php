@extends('layout.master')

@section('content')
<div class="row">

  @include('layout.sidebar')
 
      <div class="large-9 columns">

        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Hola 
            </a></h5>
              <div class="large-6 columns">
                <table width="100%">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $clients as $id => $client )
                  <tr>
                    <td>{{ $client['name'] }}</td>
                    <td>{{ $client['email'] }}</td>
                    <td><a href="/details/?id={{$id}}" class="button tiny radius secondary">MODIFICAR</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
              
              @unless( isset( $user ) )
                @include('layout.sidebar_right')
              @endunless
          </section>
        </div>
      </div>
      
</div>
@stop