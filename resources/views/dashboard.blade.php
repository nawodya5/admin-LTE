
{{-- resources/views/student.blade.php --}}
@extends('adminlte::page')

@section('title', 'Student Page')

@section('content_header')
    <h1>Student Dashboard</h1>
@stop

@section('content')
    <p>Welcome to the Student Dashboard!</p>
    

    <div class="card w-50">
      <div class="card-body">
            <a class="nav-link" id="addStudentLink" href="{{ route('student') }}">Add New Student</a>
      </div>
    </div>

    

 
@stop

@section('css')
    <!-- You can add custom CSS here -->
@stop

@section('js')
    <!-- You can add custom JS here -->
@stop


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />




