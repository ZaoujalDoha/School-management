@extends('layout')

@section('content')
<h3> Edit Student </h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Name :</label>
        <input type="text" id="name" class="form-control" name="name" value="{{ old('name', $student->name) }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input type="text" id="email" class="form-control" name="email" value="{{ old('email', $student->email) }}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone :</label>
        <input type="text" id="phone" class="form-control" name="phone" value="{{ old('phone', $student->phone) }}">
    </div>
    <div class="mb-3">
        <label for="section" class="form-label">Section :</label>
        <input type="text" id="section" class="form-control" name="section" value="{{ old('section', $student->section) }}">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image :</label><br>
        <img src="/image/{{ $student->image }}" width="96" height="96" class="mb-2"><br>
        <input type="file" id="image" class="form-control" name="image">
        <small>Laisse vide pour garder la photo actuelle.</small>
    </div>

    <button type="submit" class="btn btn-primary">Update Student</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection