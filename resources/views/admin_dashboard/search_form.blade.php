@extends('app_layout.app')

@section('content')
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title text-center pb-0 fs-4">Search Student Result by CNIC</h5>
        @csrf
        <form action="{{ route('search.result') }}" method="get" class="row g-3 needs-validation" novalidate>
            <div class="col-12">
                <label for="cnic" class="form-label">Enter CNIC Number:</label>
                <input type="text" name="cnic" class="form-control" required>
                <div class="invalid-feedback">Please enter a CNIC number.</div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Search</button>
            </div>
        </form>

        @if($errors->has('error'))
            <div class="alert alert-danger mt-3">{{ $errors->first('error') }}</div>
        @endif
        
    </div>
</div>
@endsection
