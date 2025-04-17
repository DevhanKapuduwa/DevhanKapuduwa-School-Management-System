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
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Update the Class</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('class.update',[$class->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Class Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $class->name }}">
                            </div>

                            <div class="mb-3">
                                <label for="teacherName" class="form-label">Class Teacher's Name:</label>
                                <input type="text" class="form-control" id="teacherName" name="teacherName" value="{{ $class->teacherName }}">
                            </div>

                            {{-- <div class="mb-3">
                                <label for="status" class="form-label">Status:</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ $class->status }}">
                            </div> --}}

                            <div class="mb-3">
                                <label for="status" class="form-label">Status:</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="1" {{ $class->status == 1 ? 'selected' : '' }}>1</option>
                                    <option value="0" {{ $class->status == 0 ? 'selected' : '' }}>2</option>
                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Update Class</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>    
</body>
</html>