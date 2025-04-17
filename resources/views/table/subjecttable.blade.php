

<div class="col-9">
    <button class="btn btn-danger m-3" >
        <a href="/create-subject" class="link-light" style="text-decoration: none">+ Add Subject</a>
    </button>
    
    <table class="table text-center border">
    <thead class="table-active fs-6 fw-light ">
      <tr>
        <th scope="col">Subject ID</th>
        <th scope="col">Subject Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($subjects as $subject)
        <tr>
          <th scope="row">{{ $subject['id'] }}</td>
          <td>{{ $subject['name'] }}</td>
          <td>
            @include('/button/subjectbutton')
        </td>
        </tr>
        
      @endforeach

    </tbody>
  </table>