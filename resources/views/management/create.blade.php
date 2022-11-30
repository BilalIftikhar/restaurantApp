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
            <i class="fa-solid fa-list"></i> Create a Category
            <hr>
            <form action="/management/category" method="POST">
                @csrf
                <div class="form-group">
                    <label for="categoryname">Category Name</label>
                    <input type="text" name="name" placeholder="category..." class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-2">save</button>
            </form>
        </div>
    </div>
</div>
@endsection