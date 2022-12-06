@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="list-group">
                <a href="/management/category" class="list-group-item list-group-item-action"><i class="fa-solid fa-list"></i> Category</a>
                <a class="list-group-item list-group-item-action"><i class="fa-solid fa-burger"></i> Menu</a>
                <a class="list-group-item list-group-item-action"><i class="fa-solid fa-chair"></i> Table</a>
                <a class="list-group-item list-group-item-action"><i class="fa-solid fa-user"></i> User</a>
            </div>
        </div>
        <div class="col-md-8">
            <i class="fa-solid fa-list"></i> Edit a Category
            <hr>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/management/category/{{$category->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="categoryname">Category Name</label>
                    <input type="text" name="name" value="{{$category->name}}" placeholder="category..." class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2">update</button>
            </form>
        </div>
    </div>
</div>
@endsection