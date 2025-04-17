<div class="col-9">
    <button class="btn btn-danger m-3" >
        <a href="" class="link-light" style="text-decoration: none">+ Add Sport</a>
    </button>
    
    <table class="table text-center border">
      <thead class="table-active fs-6 fw-light ">
        <tr>
          <th scope="col">Sport ID</th>
          <th scope="col">Sport Name</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sports as $sport)
          <tr>
            <th scope="row">{{ $sport['id'] }}</td>
            <td>{{ $sport['name'] }}</td>
            <td>{{ $sport['status'] }}</td>
            {{-- <td>{{ $class->status->label() }}</td> --}}
  
  
            <td>
              @include('/button/sportsbutton')
          </td>
          </tr>
          
        @endforeach
  
      </tbody>
    </table>