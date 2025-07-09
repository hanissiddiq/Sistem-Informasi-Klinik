@extends('admin.master');
@section('title', 'master data doctor')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-title">
                            <h3>Master Data Doctor</h3>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{ route('doctor.create') }}" class="btn btn-primary">Add Data</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th style="width: 20%;">Name</th>
                                <th style="width: 20%;">Address</th>
                                <th style="width: 20%;">Clinics</th>
                                <th style="width: 15%;">Phone Number</th>
                                <th style="width:10%;">Schedule</th>
                                <th style="width: 10%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctor_data as $doctors)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td>dr. {{ $doctors->name }}</td>
                                    <td>{{ $doctors->address }}</td>
                                    <td>{{ $doctors->clinic->name }}</td>
                                    <td>{{ $doctors->phone }}</td>
                                    <td>{{ $doctors->schedule->practice_schedule }}</td>
                                    <td>
                                        <div style="display: flex; align-items:center; gap: 10px;">
                                            <a href="{{ route('doctor.edit', $doctors->id) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('doctor.destroy', $doctors->id) }}" method="post"
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
