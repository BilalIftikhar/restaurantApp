@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')

        <div class="col-md-8">
            <i class="fa-solid fa-burger"></i> Edit a Menu
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
            <form action="/management/menu/{{$menu->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="menuName">Menu Name</label>
                    <input type="text" name="name" class="form-control" value="{{$menu->name}}" placeholder="Menu...">
                </div>
                <label for="menuPrice">Price</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" name="price" class="form-control" value="{{$menu->price}}" aria-label="Amount (to the nearest dollor)">
                </div>
                <label for="MenuImage">Image</label>
                <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control" value="{{$menu->image}}" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>

                <div class="form-group mb-3">
                    <label for="Description">Description</label>
                    <input type="text" name="description" class="form-control" value="{{$menu->description}}" placeholder="Description...">
                </div>

                <div class="form-group mb-3">
                    <label for="Category">Category</label>
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{$menu->category->id === $category->id  ? 'selected' : ''}}>{{$category->name}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="input-group mt-3">

                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection