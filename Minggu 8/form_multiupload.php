<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multiupload Dokumen</title>
</head>
<body>
  <h2>Unggah Dokumen</h2>
  <form action="proses_upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx, .png, .jpg, .jpeg">
    <input type="submit" value="Unggah">
  </form>
</body>
</html>