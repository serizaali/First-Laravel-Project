@extends('app_layout.app')

@section('content')
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title text-center pb-0 fs-4">Edit Student Result</h5>
        @csrf
        <form action="{{ route('update.result', $result) }}" method="post" class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="col-12">
                <label for="rollno" class="form-label">Roll No:</label>
                <input type="text" name="rollno" value="{{ old('rollno', $result->rollno) }}" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="cnic" class="form-label">CNIC:</label>
                <input type="text" name="cnic" value="{{ old('cnic', $result->cnic) }}" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" value="{{ old('name', $result->name) }}" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="obmarks" class="form-label">Obtained Marks:</label>
                <input type="text" name="obmarks" value="{{ old('obmarks', $result->obmarks) }}" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="tmarks" class="form-label">Total Marks:</label>
                <input type="text" name="tmarks" value="{{ old('tmarks', $result->tmarks) }}" class="form-control" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Update Result</button>
            </div>
        </form>

        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
    </div>
</div>
@endsection
