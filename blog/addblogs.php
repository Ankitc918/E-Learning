<?php include('addblogtodb.php'); ?>
   <script src="https://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
    <div class="">

    <div class="w3-row">
        <a href="javascript:void(0)" onclick="openBlog(event, 'Add');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">ADD</div>
        </a>
        <a href="javascript:void(0)" onclick="openBlog(event, 'Update');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">UPDATE</div>
        </a>
        <a href="javascript:void(0)" onclick="openBlog(event, 'Remove');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">REMOVE</div>
        </a>
    </div>

    <div id="Add" class="w3-container blog" style="display:none">
        <h2 style="color:#4880db">Add New Blog</h2>
        <form action="" id="addblogtodb" class="form-group" method="POST" style="background-color:white;border-radius:5px;">
            <div class="container">
               <br>
                <div class="row">
                    <div class="col col-sm-3">
                        <label for="title">Title</label>
                    </div>
                    <div class="col col-sm">
                        <input type="text" id="title" name="title" class="form-control" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col col-sm-3">
                        <label for="author">Author</label>
                    </div>
                    <div class="col col-sm">
                        <input type="text" id="author" name="author" class="form-control" >
                    </div>
                </div><br>
                <div class="row" hidden>
                    <div class="col col-sm-3">
                        <label for="upload_date">Upload Date</label>
                    </div>
                    <div class="col col-sm">
                        <input type="date" id="upload_date" name="upload_date" class="form-control" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col col-sm-3">
                        <label for="content">Content</label>
                    </div>
                    <div class="col col-sm">
                        <textarea type="textarea" id="content" name="content" class="form-control" ></textarea>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col col-sm-3">
                        <label for="image">Upload Image</label>
                    </div>
                    <div class="col col-sm">
                        <input type="file" id="image" name="image" class="btn btn-light" accept="image/*" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col col-sm-3">
                        <label for="category">Category</label>
                    </div>
                    <div class="col col-sm">
                        <input type="text" id="category" name="category" class="form-control" >
                    </div>
                </div><br>
                
                <div class="row" >
                    <div class="col col-sm-3">
                        
                    </div>
                    <div class="col col-sm">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary left">Add</button>
                    </div>
                </div><br>

            </div>
        </form>
        <script>
            CKEDITOR.replace('content');
        </script>
    </div>

    <div id="Update" class="w3-container blog" style="display:none">
        <h2 style="color:#4880db">Update Blog</h2>
        <form action="" id="updateblogtodb" class="form-group" method="POST" style="background-color:white;border-radius:5px;">
            <div class="container">
               <br>
                <div class="row">
                    <div class="col col-sm-3">
                        <label for="ntitle">Title</label>
                    </div>
                    <div class="col col-sm">
                        <input type="text" id="ntitle" name="ntitle" class="form-control" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col col-sm-3">
                        <label for="nauthor">Author</label>
                    </div>
                    <div class="col col-sm">
                        <input type="text" id="nauthor" name="nauthor" class="form-control" >
                    </div>
                </div><br>
                <div class="row" hidden>
                    <div class="col col-sm-3">
                        <label for="nupload_date">Upload Date</label>
                    </div>
                    <div class="col col-sm">
                        <input type="date" id="nupload_date" name="nupload_date" class="form-control" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col col-sm-3">
                        <label for="ncontent">Content</label>
                    </div>
                    <div class="col col-sm">
                        <textarea type="textarea" id="ncontent" name="ncontent" class="form-control" ></textarea>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col col-sm-3">
                        <label for="nimage">Change Image</label>
                    </div>
                    <div class="col col-sm">
                        <input type="file" id="nimage" name="nimage" class="btn btn-light" accept="image/*" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col col-sm-3">
                        <label for="ncategory">Category</label>
                    </div>
                    <div class="col col-sm">
                        <input type="text" id="ncategory" name="ncategory" class="form-control" >
                    </div>
                </div><br>
                
                <div class="row" >
                    <div class="col col-sm-3">
                        
                    </div>
                    <div class="col col-sm">
                        <button type="submit" id="nsubmit" name="nsubmit" class="btn btn-primary left">Update</button>
                    </div>
                </div><br>

            </div>
        </form>
        <script>
            CKEDITOR.replace('ncontent');
        </script>
    </div>

    <div id="Remove" class="w3-container blog" style="display:none">
        <h2>Remove Blog</h2>
        <p>for removing.</p>
    </div>
</div>

<script>
    function openBlog(evt, blogName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("blog");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
        }
        document.getElementById(blogName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-border-red";
    }

</script>
