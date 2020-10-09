<!--Extender la masterpage en esta vista-->
@extends('layout')

@section('content')
<h1>Lista Empleados</h1>
<a class="btn btn-primary" href="{{ route('employee.create') }}"> crear</a>


<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>numero</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>

            <td> {{$employee->emp_cod}} </td>
            <td> {{$employee->emp_name}} </td>
            <td> {{$employee->emp_email}} </td>
            <td> {{$employee->emp_number}} </td>

        </tr>

        @endforeach
    </tbody>
</table>

{{ $employees->links()  }}



@endsection