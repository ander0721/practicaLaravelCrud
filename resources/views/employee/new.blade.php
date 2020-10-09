@extends('layout')

@section('content')
<div class="container">
    <h1 class="h1">inserte informacion</h1>
    <div class="container">
        <form class="form-horizontal" method="POST" action="{{ route('employee.store') }}">
            @csrf
            <fieldset>
                <div class="form-group">
                    <label>nombre </label>
                    <input type="text" class="form-control" name="txtName" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label>email </label>
                    <input type="text" class="form-control" name="txtEmail" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">numero</label>
                    <input type="number" class="form-control" name="txtNumber">
                </div>

                <div class="form-group">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>