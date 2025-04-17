<div class="col-9">
    <button class="btn btn-danger m-3" >
        <a href="/create-student" class="link-light" style="text-decoration: none">+ Add Student</a>
    </button>
    
    <table class="table text-center border">
    <thead class="table-active fs-6 fw-light ">
      <tr>
        <th scope="col">Student ID</th>
        <th scope="col">Student Name</th>
        <th scope="col">Classroom ID</th>
        <th scope="col">Classroom Name</th>
        
 
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
        <tr>
          <th scope="row">{{ $student['id'] }}</td>
          <td>{{ $student['name'] }}</td>
          <td>{{ $student["classroom_id"] }}</td>
          <td>{{ $student->classroom->name}}</td>


          <td>
            @include('/button/studentbutton')
        </td>
        </tr>
        
      @endforeach

    </tbody>
  </table>