<div class="col-9">
  <button class="btn btn-danger m-3" >
      <a href="/create-class" class="link-light" style="text-decoration: none">+ Add Class</a>
  </button>
  
  <table class="table text-center border">
    <thead class="table-active fs-6 fw-light ">
      <tr>
        <th scope="col">Classroom ID</th>
        <th scope="col">Class Name</th>
        <th scope="col">No of Students</th>
        <th scope="col">Class Teacher's Name</th>
        <th scope="col">Status</th>
 
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($classes as $class)
        <tr>
          <th scope="row">{{ $class['id'] }}</td>
          <td>{{ $class['name'] }}</td>
          <td>{{ count($class['students']) }}</td>
          <td>{{ $class["teacherName"] }}</td>
          <td>{{ $class->status->label() }}</td>


          <td>
            @include('/button/button')
        </td>
        </tr>
        
      @endforeach

    </tbody>
  </table>