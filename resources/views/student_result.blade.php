@extends('app_layout.app')

@section('content')

<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title text-center pb-0 fs-4">Student Result Details</h5>

        <ul class="list-group">
            <li class="list-group-item">Roll No: {{ $result->rollno }}</li>
            <li class="list-group-item">CNIC: {{ $result->cnic }}</li>
            <li class="list-group-item">Name: {{ $result->name }}</li>
            <li class="list-group-item">Obtained Marks: {{ $result->obmarks }}</li>
            <li class="list-group-item">Total Marks: {{ $result->tmarks }}</li>
        </ul>
    </div>
</div>

@endsection
