@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')
        <div class="col-md-8">
            <i class="fa-solid fa-list"></i> Category
            <a href="/management/category/create" class="btn btn-success btn-sm" style="float: right;"><i class="fas fa-plus"></i> Create Category</a>
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
                        <th scope="col">Category</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="/management/category/{{$category->id}}/edit" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="/management/category/{{$category->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection