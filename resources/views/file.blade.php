<div>
    <form action="./files" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        <input type="submit" name="submit" id="">

    </form>

    @if(isset($path))

   <img src="{{url('storage/'.$path)}}" width="300" alt="ABCD">
   @else
   <h1>NOT</h1>
   @endif
</div>