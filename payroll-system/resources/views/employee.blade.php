@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Add new Position</h1>
        </div>
        <div class="row">
            <form action="employee" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group">
                    <label for="position_name">Employee Name</label>
                    <input type="text" class="form-control @error('employee_name') is-invalid @enderror" id="posotion_name" 
                    name="employee_name" placeholder="Employee Name" value="{{ old('department_name') }}">
                    <!-- @error('employee_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror -->
                    <label for="position_name">Position Name</label>
                    <select  name='id'>
                    @foreach ($position as $position)
                        <option value="{{$position->id}}">
                        {{$position->position_id}}
                        </option>
                    @endforeach
                    </select>
                    <!-- @error('position_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror -->
                    <br>
                    <label for="position_name">Salary</label>
                    <input type="text"  id="posotion_name" name="salary" placeholder="Salary" value="{{ old('department_name') }}">
                    <!-- @error('salary')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror -->
                </div>
                    <br>
                    <label for="position_name">Email</label>
                    <input type="text"  id="posotion_name" name="email" placeholder="Email" value="{{ old('department_name') }}">
                    <!-- @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror -->
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="col-md-8" >
            <table class="table table-responsive common-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Position ID</th>
                        <th>Email</th>
                        <th>Salary</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->salary }}</td>
                            <td>{{ $position->created_at }}</td>
                            <td>{{ $position->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <div class="row">
        {{$employees->links()}}
        </div>
    </div>
@endsection