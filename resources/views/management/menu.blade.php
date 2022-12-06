@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')
        <div class="col-md-8">
            <i class="fa-solid fa-burger"></i> Menu
            <a href="/management/menu/create" class="btn btn-success btn-sm" style="float: right;"><i class="fas fa-plus"></i> Create Menu</a>
            <hr>
            @if(Session()->has('status'))
            <div class="alert alert-success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">× </span>
                {{Session()->get('status')}}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Dscription</th>
                        <th scope="col">Category</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                    <tr>
                        <td>{{$menu->id}}</td>
                        <td>{{$menu->name}}</td>
                        <td>{{$menu->price}}</td>
                        <td>
                            <img src="{{asset('menu_images')}}/{{$menu->image}}" alt="" width="120px" height="120px">
                        </td>
                        <td>{{$menu->description}}</td>
                        <td>{{$menu->category_id}}</td>
                        <td><a href="" type="button" class="btn btn-primary">Edit</a></td>
                        <td><a href="" type="button" class="btn btn-danger">Delete</a></td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection