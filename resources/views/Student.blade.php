@extends ('layouts.main')

@section('content')
<h1 class="text-center">Student Data</h1>
  <div class="row mt-4">
  <a href="/addstudent">
  <button type="button" class="btn btn-success mb-2">Add Data</button><br>
  </a>
  @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
      {{ $message }}
    </div>
  @endif
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">NIM</th>
      <th scope="col">Major</th>
      <th scope="col">Email</th>
      <th scope="col">No. HP</th>
      <th scope="col">Access</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1 ?> 
    @foreach ($data as $student)

    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td>{{ $student["name"] }}</td>
      <td>{{ $student["nim"] }}</td>
      <td>{{ $student["Major"] }}</td>
      <td>{{ $student["email"] }}</td>
      <td>{{ $student["nohp"] }}</td>
      <td>
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
      <?php $i++ ?>
    </tr>
    @endforeach
    
  </tbody>
</table>



  </div>
  
@endsection