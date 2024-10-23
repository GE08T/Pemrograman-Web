<!DOCTYPE html>   
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
  <title>Dashboard admin</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <?php include("./layout/navAdmin.php") ?>

  <section class="flex flex-col items-center w-full my-10 space-y-5 justify-evenly h-dvh" id="crudfilm">
    <div class="flex flex-col justify-center w-full max-w-xl p-2 mx-auto align-middle border-2 rounded sm:p-4 md:p-6 border-zinc-900">
      <form id="filmForm" class="space-y-5">
          <div>
            <label class="block mb-2 text-sm font-medium">Nama Film</label>
            <input type="text" name="namaFilm"  id="namaFilm" class="border-2 text-sm font-light text-gray-900 rounded block w-full p-1.5 " required>
          </div>
          <div>
            <label class="block mb-2 text-sm font-medium">Genre</label>
            <input type="text" name="genre"  id="genre" class="border-2 text-sm font-light text-gray-900 rounded block w-full p-1.5 " required>
          </div>
          <div>
            <label class="block mb-2 text-sm font-medium">Rating</label>
            <input type="number" name="rating"  id="rating" class="border-2 text-sm font-light text-gray-900 rounded block w-full p-1.5 ">
          </div>
          <div>
            <label class="block mb-2 text-sm font-medium">Tanggal Tayang</label>
            <textarea name="tanggalTayang" id="tanggalTayang" class="border-2 text-sm font-light text-gray-900 rounded block w-full p-1.5 "></textarea>
          </div>
        <button type="submit" class="w-full px-5 py-2 text-sm text-center text-white rounded bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300">Submit</button>
      </form>
    </div>
    <div class="flex flex-col justify-center w-full p-4 mx-auto align-middle border-2 rounded max-w-7xl sm:p-6 md:p-8 border-zinc-900">
      <table class="table-auto">
        <tr class="text-white bg-zinc-900">
          <th class="border-2 border-zinc-900">No</th>
          <th class="border-2 border-zinc-900">Nama Film</th>
          <th class="border-2 border-zinc-900">Genre</th>
          <th class="border-2 border-zinc-900">Rating</th>
          <th class="border-2 border-zinc-900">Tanggal Tayang</th>
        </tr>
        <tbody id="hasil"></tbody>
      </table>
    </div>
  </section>
  <script>
    $('document').ready(function() {
      $('#filmForm').submit(function(e) {
        e.preventDefault();

        var formData = $('#filmForm').serialize();

        $.ajax({
          url: 'filmProses.php',
          type: 'POST',
          data: formData,
          success: function(response) {
            $('#hasil').html(response);
          },
          error: function() {
            $('#filmForm')[0].reset();
          }
        });
      });
    });
  </script>
</body>
</html>