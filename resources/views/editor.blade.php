<div>
    <!-- <pre>
    {{ print_r($data)}}
    </pre> -->


    <form action="/updatedata/{{$data->id}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="put">
        <h1>Registration Form</h1>

        <input type="text" name="name" placeholder="Enter Name" value="{{$data->name}}">
        <br><br>

        <input type="email" name="email" placeholder="Enter Email" value="{{$data->email}}">
        <br><br>

        <input type="tel" name="phone" placeholder="Enter Phone" value="{{$data->phone}}">
        <br><br>

        <button type="submit">Submit</button>
    </form>

</div>