@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>nama</th>
                                <th>stok</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $item)
                            <tr>
                                <td scope="row">{{$item->name}}</td>
                                <td>{{$item->stok}}</td>
                                <td><a name="" id="" class="btn btn-primary|secondary|success|info|warning|danger" href=" {{url('home/galery/'.$item->id)}} " role="button">galery</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
