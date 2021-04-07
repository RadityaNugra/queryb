

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">alamat</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td> {{ $item->id}} </td>
                <td> {{ $item->nama}} </td>
                <td> {{ $item->email}} </td>
                <td> {{ $item->alamat}} </td>
            </tr>
            @endforeach
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
