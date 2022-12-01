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
            <i class="fa-solid fa-list"></i> Category
            <a href="/management/category/create" class="btn btn-success btn-sm" style="float: right;"><i class="fas fa-plus"></i> Create Category</a>
            <hr>
            @if(Session()->has('status'))
            <div class="alert alert-success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">× </span>
                {{Session()->get('status')}}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection