<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel</title>
</head>

<body>
    <div style="padding: 20px">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name of Student </th>
                    <th scope="col">Parent Name</th>
                    <th scope="col">Opted Courses</th>
                    <th scope="col">is_Active</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->Name }}</td>
                        <td>{{ $student->parentName->Name }}</td>
                        <td>
                            <ul>
                                @foreach ($student->courseOpted as $course)
                                    <li> {{ $course->Course_name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input"
                                data-student="{{ $student->id }}" data-course="{{ $course->id }}" @if($course->pivot->is_active) checked @endif type="checkbox" >
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://ajax.aspnetCDN.com/ajax/jQuery/jQuery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $('.form-check-input').change(function() {
                let status = $(this).prop('checked') ? 1 : 0;
                let student_id = $(this).data('student');
                console.log(student_id)
                let course_id = $(this).data('course');
                $.ajax({
                    url: '{{ route("update.status") }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        student_id: student_id,
                        course_id: course_id,
                        status: status
                    },
                    success: function(data) {
                        console.log(data);
                        if(data.success) {

                            if(data.status==1){
                        swal("Done","Activated");
                    }else{
                        swal("Done","inactivated");
                    }
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>

</html>
