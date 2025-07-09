@section('title', 'master data employees')

@extends('admin.master');

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-title">
                            <h3>Master Data Employees</h3>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Data</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th style="width: 15%;">Employee Code</th>
                                <th style="width: 20%;">Name</th>
                                <th style="width: 10%;">Gender</th>
                                <th style="width: 20%;">Phone</th>
                                <th style="width: 10%;">Religion</th>
                                <th style="width: 10%;">Position</th>
                                <th style="width: 10%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee_data as $employees)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td>{{ $employees->employee_code }}</td>
                                    <td>{{ $employees->name }}</td>
                                    <td>{{ $employees->gender }}</td>
                                    <td>{{ $employees->phone }}</td>
                                    <td>{{ $employees->religion }}</td>
                                    <td>{{ $employees->position }}</td>
                                    <td>
                                        <div style="display: flex; align-items:center; gap: 10px;">
                                            <a href="{{ route('employees.edit', $employees->id) }}"
                                                class="btn btn-info">Edit</a>
                                            <form action="{{ route('employees.destroy', $employees->id) }}" method="post"
                                                onsubmit="return confirm('Are you sure want to delete this data?')"
                                                style="margin: 0";>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
