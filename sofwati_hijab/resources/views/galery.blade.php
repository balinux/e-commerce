@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="alert alert-info" role="alert">
                        <strong>{{$a->galery->count()}}</strong> images <a href="#" class="alert-link"></a>
                    </div>

                    <form action="/home/galery" class="dropzone">
                    {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{$a->id}}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
