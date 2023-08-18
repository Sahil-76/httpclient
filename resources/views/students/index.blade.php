<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Email</th>
                        <th>Phone</th>
                         {{-- <th>Action</th>  --}}
                    </tr>
                </thead>
                <tbody>
                     {{-- @dd($students);   --}}
                    @foreach ($students as $student)
                        <tr>
                            
                            <td>{{ $student['id'] }}</td>
                            <td>{{ $student['name'] }}</td>
                            <td>{{ $student['course'] }}</td>
                            <td>{{ $student['email'] }}</td>
                            <td>{{ $student['phone'] }}</td>
                        </tr>
            
                    @endforeach

                    
                     
            
                </tbody>
            </table>
        </div>
</body>
</html>



