<div>
   <h1>Upload file</h1>
   <form action="/uploadFile" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="">
    <button type="submit">Submit</button>
   </form>
</div>
