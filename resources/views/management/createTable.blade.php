@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')

        <div class="col-md-8">
            <i class="fa-solid fa-list"></i> Create a Table
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
            <form action="/management/table" method="POST">
                @csrf
                <div class="form-group">
                    <label for="categoryname">Table Name</label>
                    <input type="text" name="name" placeholder="table..." class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2">save</button>
            </form>
        </div>
    </div>
</div>
@endsection