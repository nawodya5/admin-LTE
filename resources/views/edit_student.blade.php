
{{-- resources/views/student.blade.php --}}
@extends('adminlte::page')

@section('title', 'Student Page')


@section('content')
    

    
  <div class="container mt-5">
    <!-- Student details  -->
   
    <div class="card mt-5">
        <div class="modal-content">
          <div class="card-header bg-secondary text-white">
              <h3 class="card-title">Add New Student</h3>
          </div>
  
          <div class="card-body">
            <form action="{{ route('updateStudent', $student->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                  <label for="first_name">First name</label>
                  <input type="text" id="First name" name="first_name" class="form-control" value="{{ $student->first_name }}" required>
              </div>
              <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" id="last_name" name="last_name" class="form-control" value="{{$student->last_name }}" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" value="{{ $student->email }}" required>
              </div>
              <div class="form-group mb-3">
                  <label for="phone_number">Phone Number</label>
                  <input type="tel" name="phone_number" class="form-control" required value="{{$student->phone_number}}" >
              </div>
    
              <div class="form-group mb-3">
                <label for="date_of_birth">Date of birth</label>
                <input type="date" name="date_of_birth" class="form-control" required value="{{$student->date_of_birth }}" >
            </div>
    
            <div class="form-group mb-3">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control" required value="{{ $student->address }}"  >
          </div>
              <button type="submit" class="btn btn-primary">Update Student</button>
          </form>
          </div>
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


