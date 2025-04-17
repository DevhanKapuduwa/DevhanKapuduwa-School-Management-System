<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a New Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Create a New Student</h4>
                    </div>
                    <div class="card-body">
                        <form action="/student-create" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Student Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="classes" class="form-label">Classroom ID:</label>
                                <select name="classroom_id"  class="form-control" required>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class }}">{{ $class}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender:</label>
                                <input type="text" class="form-control" id="gender" name="gender">
                            </div>

                            <div class="mb-3">
                                <label for="personal_phone" class="form-label">Personal Phone Number:</label>
                                <input type="text" class="form-control" id="personal_phone" name="personal_phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>

                            <div class="mb-3">
                                <label for="mother_name" class="form-label">Mother's Name:</label>
                                <input type="text" class="form-control" id="mother_name" name="mother_name" >
                            </div>

                            <div class="mb-3">
                                <label for="mother_phone" class="form-label">Mother's Phone Number:</label>
                                <input type="text" class="form-control" id="mother_phone" name="mother_phone" >
                            </div>

                            <div class="mb-3">
                                <label for="father_name" class="form-label">Father's Name:</label>
                                <input type="text" class="form-control" id="father_name" name="father_name" >
                            </div>

                            <div class="mb-3">
                                <label for="father_phone" class="form-label">Father's Phone Number:</label>
                                <input type="text" class="form-control" id="father_phone" name="father_phone" >
                            </div>

                            <div class="mb-3">
                                <label for="land_phone" class="form-label">Land Phone Number:</label>
                                <input type="text" class="form-control" id="land_phone" name="land_phone" >
                            </div>






                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Add Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
