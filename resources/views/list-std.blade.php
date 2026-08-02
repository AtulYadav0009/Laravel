<div>
    <h1>List Student</h1>
</div>

<table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Opration</td>
    </tr>
    @foreach($students as $student)
    <tr>
        <td> {{ $student->name}}</td>
        <td> {{ $student->email}}</td>
        <td> {{ $student->phone}}</td>
        <td><a href="./delete/{{$student->id}}">Delete</a></td>
        <td><a href="./edit/{{$student->id}}">Editor</a></td>

    </tr>
    @endforeach
</table>


<pre>
{{print_r($students)}}
</pre>