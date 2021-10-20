<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Chek Out!</title>
  </head>
  <body style="background-image: url(https://static.vecteezy.com/system/resources/previews/000/423/584/non_2x/sea-animals-vector-water-plants-ocean-fish-cartoon-illustration-undersea-water-marine-aquatic-character-life.jpg)">  
      <div class="container" >
        <div class="px-4 py-5 my-5 text-center" style="background-color:white;">
            <img src="cupang.png" class="rounded mx-auto d-block" alt=" Logo Pang's" width="200" height="200" >
            <h1 class="display-5 fw-bold"> Pang's</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4"> Toko Ikan Jepara </p>
              <p class="lead mb-4"> Temukanlah berbagai jenis ikan dengan harga yang terjangkau  </p>
            </div>
            <button type="button" class="btn btn-dark">ChekOut Sekarang </button>
            <br>
            <br>

                  <form name=""action="proses.php" method="get">
                  <div class="row">
                    <div class="col">
                      <label for="inputEmail4" class="form-label">Nama</label>
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="Nama">
                    </div>
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Alamat</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="alamat">
                    </div>
                    <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nomer Handphone</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" name="hp">
                  </div>
                  <p> Pesanan ikan </p>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nama Ikan</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="namaikan">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lokasi TPI</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="lokasitpi">
                  </div>
                      <div class="input-group mb-3">
                    <span class="input-group-text">Jumlah Beli</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="jumlahkg">
                    <span class="input-group-text">/kg</span>
                  </div>
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-danger" input type="submit" value = "simpan" name="button">kirim</button>
                      </div>
                      <br><br>
</div>
</div>
                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    </body>
                  </html>