<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Webprograming | Zam.Dev</title>
  <style>
    body {
      background-image: linear-gradient(to right, #051937, #032958, #00397b, #004a9f, #075bc5);
    }

    .container {
      width: 100%;
      height: 90vh;
      margin: 40px auto;
      /* background-color: aqua; */
    }

    .container .input {
      width: 80%;
      height: 75vh;
      /* background-color: blue;*/
      margin: 50px auto;
      padding: 10px;
      border: 1.5px solid transparent;
      outline: none;
      box-shadow: 0px 0px 5px 5px #004a9f;
      border-radius: 10px;
    }

    .input h1 {
      font-size: 1.2rem;
      color: aqua;
      font-weight: 600;
      font-style: italic;
      text-align: center;
      text-transform: capitalize;
      font-family: 'Times New Roman', Times, serif;
    }

    .input #Nama,
    #Hobi {
      width: 30rem;
      height: 3vmax;
      outline: none;
      border: 1px solid transparent;
      margin: 4vh 50vh 4vh 50vh;
      border-radius: 15px;
    }

    ::placeholder {
      text-align: center;
      color: rgb(77, 230, 230);
      font-size: 1rem;
      font-style: italic;
    }

    textarea::placeholder {
      text-align: center;
      line-height: 3vh;
      color: black;
      padding-top: 25px;
    }

    .input textarea {
      margin: 4vh 50vh 4vh 50vh;
      width: 30rem;
      height: 15vh;
      outline: none;
      border: 2px solid transparent;
      border-radius: 15px;
    }

    .input #Ubah {
      width: 8rem;
      height: 3vmax;
      margin: 15px 100vh 15px 100vh;
      color: rgb(16, 96, 69);
      font-size: 15px;
      font-style: italic;
      text-transform: uppercase;
      letter-spacing: .5em;
      outline: 0;
      border: 1px solid transparent;
      border-top-right-radius: 15px;
      border-bottom-left-radius: 15px;
      cursor: pointer;
    }

    #back {
      margin: 20px 0px 10px 0px;
      padding: 15px;
      width: 100px;
      position: absolute;
      left: 30%;
      list-style-type: none;
      text-decoration: none;
      color: rgb(16, 96, 69);
      font-size: 15px;
      font-style: italic;
      text-transform: uppercase;
      letter-spacing: .5em;
      outline: 0;
      border: 1px solid transparent;
      border-top-right-radius: 15px;
      border-bottom-left-radius: 15px;
      cursor: pointer;
      background-color: aqua;
      transform: translateY(-10px);
    }

    #Nama,
    #Hobi,
    #Motivasi {
      color: #075bc5;
      text-align: center;
      font-weight: 600;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: medium;
    }
  </style>

</head>

<body>
  <div class="container">
    <form action="/Crud/update/<?= $isi['id']; ?>" method="post" class="input">
      <h1>Ubah Motivasi mu di sini</h1>
      <label for=""></label>
      <?= csrf_field(); ?>
      <input type="text" name="Nama" id="Nama" placeholder="Masukkan nama anda " required autofocus value="<?= $isi['Nama']; ?>">
      <br>
      <label for=""></label>
      <input type="text" name="Hobi" id="Hobi" placeholder="Hobi" required autofocus value="<?= $isi['Hobi']; ?>">
      <br>
      <label for=""></label>
      <textarea name="Motivasi" id="Motivasi" placeholder="Tulis Motivasi Dengan Versi Mu Sendiri " required autofocus>
        <?php
        echo $isi['Motivasi'];
        ?>
      </textarea>
      <br>
      <a href="/Crud/data" id="back"> Kembali </a>
      <input type="submit" value="Ubah" id="Ubah">
      <!-- <input type="submit" value="Kirim">Kirim</input> -->
    </form>

  </div>

</body>

</html>