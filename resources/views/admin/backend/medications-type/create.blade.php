@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <div class="card p-4">
            <h2>Add New Medications Type</h2>
            <form action="{{ route('medications-type.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="medication_type">Medications Type</label>
                    <input type="text" class="form-control" id="medication_type" placeholder="enter medications type"
                        name="medication_type">
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="{{ route('medications-type.index') }}" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>
    </div>

@endsection
