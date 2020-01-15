<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

<div class="container">
    <form method="post" action="" enctype="multipart/form-data" id="myform">
        <div class='preview'>
            <img src="" id="img" width="100" height="100">
        </div>
        <div >
            <input type="file" id="file" name="file" />
            <input type="button" class="button" value="Upload" id="but_upload">
        </div>
    </form>
</div>

<style>
/* Container */
.container{
   margin: 0 auto;
   border: 0px solid black;
   width: 50%;
   height: 250px;
   border-radius: 3px;
   background-color: ghostwhite;
   text-align: center;
}
/* Preview */
.preview{
   width: 100px;
   height: 100px;
   border: 1px solid black;
   margin: 0 auto;
   background: white;
}

.preview img{
   display: none;
}
/* Button */
.button{
   border: 0px;
   background-color: deepskyblue;
   color: white;
   padding: 5px 15px;
   margin-left: 10px;
}</style>



    
  
<script>
$(document).ready(function(){
$("#but_upload").click(function(){

    var fd = new FormData();
    var files = $('#file')[0].files[0];
    fd.append('file',files);

    $.ajax({
        url: 'upload.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
            if(response != 0){
                $("#img").attr("src",response); 
                $(".preview img").show(); // Display image element
            }else{
                alert('file not uploaded');
            }
        },
    });
});
});
</script>



