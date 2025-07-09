@extends('admin.master')

@section('content')

<div class="card-box">
    <h2>Add New Clinic</h2>
    <form action="{{ route('clinic.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="enter clinic name" name="name">
        </div>

        <div class="my-2">

            <button type="submit" class="btn btn-primary">Add</button>
            <a href="{{ route('clinic.index') }}" class="btn btn-warning">Back</a>

        </div>

    </form>
</div>

@endsection
