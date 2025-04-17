


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
</head>
<body >

  <div class="container py-5">
    <div class="card p-4">
      <h2 class="mb-4 text-center text-primary">Student Information</h2>

      <div class="row g-4">
        <div class="col-md-4">
        <div class="card p-2 m-1">
          <h5>Student ID:</h5>
          <p><b>{{ $studentitem->id }}</b></p>
        </div>

        <div class="card p-2 m-1">
            <h5>Gender:</h5>
          <p><b>{{ $studentitem->gender }}</b></p>
        </div>

        <div class="card p-2 m-1">
            <h5>Mother's Name:</h5>
          <p><b>{{ $studentitem->mother_name }}</b></p>
        </div>

        <div class="card p-2 m-1">
            <h5>Father's Phone:</h5>
          <p><b>{{ $studentitem->father_phone }}</b></p>
        </div>
        </div>

        <div class="col-md-4">
            <div class="card p-2 m-1">
                <h5>Student Name:</h5>
          <p><b>{{ $studentitem->name }}</b></p>
        </div>

        <div class="card p-2 m-1">
            <h5>Student Phone:</h5>
          <p><b>{{ $studentitem->personal_phone }}</b></p>
        </div>

        <div class="card p-2 m-1">
            <h5>Mother's Phone:</h5>
          <p><b>{{ $studentitem->mother_phone }}</b></p>
        </div>

        <div class="card p-2 m-1">
            <h5>Land Phone:</h5>
          <p><b>{{ $studentitem->land_phone }}</b></p>
        </div>
        </div>

        <div class="col-md-4">
            <div class="card p-2 m-1">
                <h5>Student Class:</h5>
          <p><b>{{ $studentitem->classroom_id }}</b></p>
        </div>

        <div class="card p-2 m-1">
            <h5>Student Address:</h5>
          <p><b>{{ $studentitem->address }}</b></p>
        </div>

        <div class="card p-2 m-1">
            <h5>Father's Name:</h5>
          <p><b>{{ $studentitem->father_name }}</b></p>
        </div>
        </div>
      </div>

      <div class="row g-4 m-1">
        <div class="card p-2 m-1">
          <h5>Subjects:</h5>

          @foreach ($subjects as $subject)
              <div class="d-flex justify-content-between">
                  <span>{{ $subject }}</span>
                  
                  @if(in_array($subject, $studentitem->subjects ?? []))
                      <form action="/students/{{ $studentitem->id }}/remove-subject" method="POST" >
                          @csrf
                          <input type="hidden" name="subject_id" value="{{ $subject}}">
                          <button class="btn btn-danger ">Remove</button>
                      </form>
                  @else
                      <form action="/students/{{ $studentitem->id }}/add-subject" method="POST">
                          @csrf
                          <input type="hidden" name="subject_id" value="{{ $subject }}">
                          <button class="btn btn-success">Add</button>
                      </form>
                  @endif
              </div>
          @endforeach
          
              
              </div>
            </div>
            
          </div>
  
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>    
</body>
</html>
