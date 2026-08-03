<div>
    <!-- <pre>
    {{ print_r($images)}}
    </pre> -->
    @foreach($images as $img)

    <img src="{{url('storage/images/'.$img->path)}}" alt="img" width="150">
    @endforeach
</div>