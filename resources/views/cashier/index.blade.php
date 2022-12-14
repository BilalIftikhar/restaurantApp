@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="table-detail"></div>
    <div class="row justify-content-center py-5">
        <div class="col-md-5">
            <button class="btn btn-primary btn-block" id="btn-show-tables">
                View All Tables
            </button>
        </div>
        <div class="col-md-7">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @foreach($categories as $category)
                    <a href="" class="nav-item nav-link" data-toggle="tab" data-id="{{$category->id}}">{{$category->name}}</a>
                    @endforeach
                </div>
            </nav>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#table-detail").hide();
        $('#btn-show-tables').click(function() {
            if ($('#table-detail').is(":hidden")) {
                $.get("/cashier/getTable", function(data) {
                    $("#table-detail").html(data);
                    $("#table-detail").slideDown('fast')
                    $("#btn-show-tables").html('hide tables').removeClass('btn-primary').addClass('btn-danger');
                })
            } else {
                $("#table-detail").slideUp('fast')
                $("#btn-show-tables").html('View all tables').removeClass('btn-danger').addClass('btn-primary');
            }
        });
        $('.nav-link').click(function() {
            $.get('/cashier/getMenuTable' + $(this).data('id'),
                function(data) {

                })
        })
    })
</script>
@endsection