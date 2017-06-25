@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <h2> Cv Chubut </h2>
        <div id="app">

                 <router-link to="/actividades" target="_self">
                  Actividades jkljkljkl
                 </router-link>


                    <router-view class="view" transition="fade" ></router-view>

        </div>
    </div>
</div>
@endsection
