<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Learn PHP</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css" />
</head>

<body>
    <div class="container">
    <!-- enctype="multipart/form-data" specifies which content-type to use when submitting information back to server - this is required for file uploads. Also, POST method is needed for file uploads.
    note also the type='hidden' which restricts the maximum file size allowed (default is 2mb but the php.ini
    may have this set also) -->
        <form enctype="multipart/form-data" action="upload.php" method="post">
        Choose a file to upload: <input name="uploaded_file" type="file" />
        <input class="submit" type="submit" value="Upload" />
        </form>
    </div>
</body>
</html>