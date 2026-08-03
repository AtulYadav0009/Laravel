<div>
    <h1>UPLOAD FILE</h1>

    <form action="./UploadImg" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <input type="submit" value="Submit">
    </form>
</div>