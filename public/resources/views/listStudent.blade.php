<!DOCTYPE html>
<html>
<head>
    <title>list student</title>
</head>
<body>
<center>
        <h2>List Student</h2>
        <table border="1px">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @foreach($data as $value)
            <tr>
                <td>{{$value->studentId}}</td>
                <td>{{$value->studentName}}</td>
                <td><a href="editStudent/<?php echo $value->studentId; ?>" >Edit |</a><a href="deleteStudent/{{$value->studentId}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
        <a href="{{url('addStudent')}}">Add Student</a>
</center>
</body>
</html>