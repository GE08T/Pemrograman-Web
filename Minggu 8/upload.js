$(document).ready(function() {
  $("#upload-form").submit(function(e) {
    e.preventDevault();

    var formData = new FormData(this);

    $.ajax({
      type: 'POST',
      url: 'upload_ajax.php',
      data: formData,
      cache: false,
      contentType: false,
      proccessData: false,
      success: function(response) {
        $('#status').html(response)
      },
      error: function() {
        $('#status').html('Terjadi kesalahan saat mengunggah file.')
      }
    })
  });
})