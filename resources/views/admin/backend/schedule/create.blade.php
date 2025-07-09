@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <div class="card p-4">
            <h2>Add New Schedule</h2>
            <form action="{{ route('schedule.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="practice_schedule">Practice Schedule</label>
                    <input type="text" class="form-control" id="practice_schedule" placeholder="enter practice schedule"
                        name="practice_schedule">
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="{{ route('schedule.index') }}" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
