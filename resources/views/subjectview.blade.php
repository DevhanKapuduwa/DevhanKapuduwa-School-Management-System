<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">

 
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Details of Subject</h4>
                    </div>
                    <div class="card-body">
            <table class="table text-center border">
                <thead class="table-active fs-4 fw-light ">
                <tr>
                    <th scope="col">Subject ID</th>
                    <th scope="col">Subject Name</th>

                </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">{{ $subjectitem->id }}</td>
                    <td>{{ $subjectitem->name }}</td>   
     
                    </tr>
            
         
    
        </tbody>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>    
</body>
</html>