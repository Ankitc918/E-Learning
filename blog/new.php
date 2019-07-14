  <?php
include('conn.php');
 if(isset($_POST['submit'])){
     $title=mysqli_real_escape_string($conn,$_POST['title']);
     $author=mysqli_real_escape_string($conn,$_POST['author']);
     $upload_date=date();
     $content=mysqli_real_escape_string($conn,$_POST['content']);
     $image=mysqli_real_escape_string($conn,$_POST['image']);
     $category=mysqli_real_escape_string($conn,$_POST['category']);
     $sql="INSERT INTO posts(title,author,content,category) VALUES('.$title.','.$author.','.$content.','.$category.')";
     $res=mysqli_query($conn,$sql);
     if($res!=null){
         echo "successfully added your blog!";
     }
     else{
         echo "failed to upload";
     }
 }

?>
      <html>
       <div id="Add" class="w3-container blog" style="display">
        <h2 style="color:#4880db">Add New Blog</h2><br>
        <form action="#" method="POST" role="form">
            <div class="">
               <br>
                <div class="row">
                    <div class="col">
                        <label for="title">Title</label>
                    </div>
                    <div class="col">
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <label for="author">Author</label>
                    </div>
                    <div class="col">
                        <input type="text" id="author" name="author" class="form-control" required>
                    </div>
                </div><br>
                <div class="row" hidden>
                    <div class="col">
                        <label for="upload_date">Upload Date</label>
                    </div>
                    <div class="col">
                        <input type="date" id="upload_date" name="upload_date" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <label for="content">Content</label>
                    </div>
                    <div class="col">
                        <textarea type="textarea" id="content" name="content" class="form-control" required></textarea>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <label for="image">Upload Image</label>
                    </div>
                    <div class="col">
                        <input type="file" id="image" name="image" class="btn btn-light" accept="image/*" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <label for="category">Category</label>
                    </div>
                    <div class="col">
                        <input type="text" id="category" name="category" class="form-control" required>
                    </div>
                </div><br>
                
                <div class="row" >
                    <div class="col">
                        
                    </div>
                    <div class="col">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary left" onclick="getd();">Add</button>
                    </div>
                </div><br>

            </div>
        </form>
    </div>
</html>