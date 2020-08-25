@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Add new Position</h1>
        </div>
        <div class="row">
            <form action="position" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif
                <div class="form-group">
                    <label for="position_name">Department Name</label>
                    <select  name='id'>
                    @foreach ($departments as $department)
                        <option value="{{$department->id}}">
                        {{$department->department_name}}
                        </option>
                    @endforeach
                    </select>
                    <input type="text" class="form-control @error('department_name') is-invalid @enderror" id="posotion_name" name="position_name" placeholder="Department Name" value="{{ old('department_name') }}">
                    @error('position_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="row">
            <table class="table table-responsive common-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Positon Name</th>
                        <th>Department ID</th>
                        <th>Created at</th>
                        <th>Updated at</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($positions as $position)
                        <tr>
                            <td>{{ $position->id }}</td>
                            <td>{{ $position->position_name }}</td>
                            <td>{{$position->department['department_name']}}</td>
                            <td>{{ $position->created_at }}</td>
                            <td>{{ $position->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
