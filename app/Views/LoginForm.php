<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">
    <script src="boot/js/jquery-3.6.0.min.js"></script>
     <script src="boot/js/bootstrap.bundle.js"></script>
     <script src="boot/ckeditor4_easy_image/ckeditor.js"></script>
     <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
    <title>Email Sending</title>
</head>
<body>
    <div id="containter" style="width:60%;max-width:800px;margin:0 auto;margin-top:10px">
      <div id="editor" > </div>
      
    </div>
    <script>
      CKEDITOR.replace('editor', {
      height: 400,
      baseFloatZIndex: 10005,
      removeButtons: 'PasteFromWord'
    });
    </script>

</body>
</html>