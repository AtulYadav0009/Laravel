<div>
    <h1>List Student</h1>
</div>


<form action="search" method="get">
    <input type="text" name="search" id="search" placeholder="Search AnyThing" value="{{@$search}}">
    <button>Search</button>
</form>

<form action="./MultiDelete" method="post">
    @csrf 

    <button>Delete</button>
    <table border="1">
        <tr>
            <td>Delete</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Opration</td>
        </tr>
        @foreach($students as $student)
        <tr>
            <td><input type="checkbox" name="ids[]" id="" value="{{ $student->id}}"></td>
            <td> {{ $student->name}}</td>
            <td> {{ $student->email}}</td>
            <td> {{ $student->phone}}</td>
            <td><a href="./delete/{{$student->id}}">Delete</a></td>
            <td><a href="./edit/{{$student->id}}">Editor</a></td>

        </tr>
        @endforeach
    </table>
</form>



<!-- <pre>
{{print_r($students)}}
</pre> -->
<style>
    .w-5.h-5 {
        width: 50px;
    }
</style>