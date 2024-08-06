<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul; ?></title>
  <style>
    * {
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      text-decoration: none;
    }

    /* setting background color di sini */
    body {
      background-color: #031825;
    }

    /* oke */
    .container {
      margin: 0% 20px 1px 20px;
      padding: 15px 20px;
      box-sizing: border-box;
    }

    .navigasi {
      padding: 10px 5px;
      width: 100%;
      /* background-color: aqua; */
      display: flex;
      justify-content: center;
      align-items: center;
      outline: 0;
      border: 1px solid transparent;
      border-radius: 15px;
    }

    .navigasi>h3 {
      position: absolute;
      left: 50px;
      color: rgb(116, 111, 111);
    }

    .navigasi .link {
      margin: 5px 1px 5px 125vh;
      padding: 10px;
      font-size: 1rem;
      font-style: inherit;
      display: inline-block;
    }

    .link a {
      margin: 10px;
      padding: 5px;
      width: 35px;
      color: rgb(102, 179, 179);
      text-transform: capitalize;
      /* background-color: aliceblue; */
      border: 2px solid transparent;
      outline: 0px;
      border-radius: 5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      -ms-border-radius: 5px;
      -o-border-radius: 5px;
    }

    .navigasi:active .link a:first-child,
    .navigasi:visited .link a:nth-child(2) {
      color: gray;
    }

    /* text-shadow: 0px 0px 2px aqua, ; */
    /* }

    /*th,
    td {
      padding: 5px 5px;
      border: 1px solid black;
      border-collapse: collapse;

    } */

    /* gaya menu home */
    h2 {
      margin: 40px 40px 23px 10px;
      color: rgb(20, 210, 210);
      text-align: center;
    }

    .materi,
    i,
    article {
      margin: 5px;
      padding: 10px;
      word-spacing: 10px;
      font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
      color: rgb(30, 120, 120);
      font-weight: 500;
    }

    /* gaya aboute */
    .konten>h3 {
      font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
        sans-serif;
      margin: 25px;
      width: 500px;
      color: rgb(23, 130, 130);
    }

    .konten>article {
      width: 85%;
      height: 80%;
      box-sizing: border-box;
      margin: 10px 50px 10px 50px;
      padding: 5px 5px;
      /* background-color: rgb(114, 184, 184); */
      word-spacing: 0.6em;
      text-transform: capitalize;
    }

    .konten article b a {
      color: blue;
      font-style: italic;
      text-decoration: none;
    }

    .callme {
      width: 80%;
      /* background: #ded2d2; */
      margin: 30px 50px 10px 120px;
      padding: 5px 5px;

    }

    .callme>h3 {
      color: rgb(33, 96, 98);
      text-align: center;
      line-height: 5rem;
    }

    .callme .media {
      /* background-color: bisque; */
      display: flex;
      justify-content: center;
      box-sizing: border-box;
    }

    .callme .media>img {
      margin: 25px;
      padding: 10px;
      color: #000fff;
      /* background-color: aqua; */
    }

    /* class saran  */
    .saran {
      position: relative;
      width: 90%;
      /* background-color: chartreuse; */
      /* box-sizing: border-box; */
      margin: 20px 35px 15px 35px;
      padding: 10px;
      text-transform: capitalize;
      font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    }

    .saran>p {
      font-weight: 400;
      color: aqua;
    }

    /* .saran b {
      background-color: aqua; 
      padding: 10px;
      margin-left: 20vh;
      width: 50px;
      color: azure;
    } */

    #pesan>* {
      color: aquamarine;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-weight: 400;
      color: aqua;
    }

    .saran #pesan {
      width: 150em;
      /* position: absolute; */
      /* transform: translateY(20px), translateX(-50em); */
    }

    /* gaya motivate your self */
    .tabel-aset {
      margin: 20px 10px 20px 0px;
      border: 1px solid transparent;
      outline: none;
      width: 70%;
      height: 80%;
      box-sizing: border-box;
      /* background-color: aqua; */
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-weight: 400;
    }

    #tambah>a {
      margin: 25px;
      padding: 15px;
      width: 140px;
      height: 40px;
      text-decoration: none;
      text-transform: capitalize;

    }

    .tabel-aset table {

      width: 130%;
      box-sizing: border-box;
    }

    /* .tabel-aset table tr th {
      width: 500px;
    }

    .tabel-aset table tr>* {
      width: 500px;
      margin: 15px;
      padding: 10px;
      
    } */

    .tabel-aset table,
    tr,
    th,
    td {
      margin: 15px;
      padding: 20px;
      border-collapse: collapse;
      border: 1px solid rgb(66, 64, 64);
      font-size: 0.8rem;
      color: aqua;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    }

    .tabel-aset table tr>td {
      padding: 30px;
    }

    .tabel-aset table tr>td a:first-child {
      font-size: 10px;
      margin: 10px;
      padding: 15px;
      color: aqua;
      width: max-content;
      /* height: 50px; */
      background-color: #000fff;
      /* border: 1px solid transparent; */
      /* outline: none; */
    }

    .tabel-aset table tr>td a:nth-child(2) {
      margin: 10px;
      font-size: 10px;
      padding: 10px;
      color: aqua;
      width: max-content;
      /* height: 50px; */
      background-color: red;
      /* border: 1px solid transparent;
      outline: none; */
    }

    /* gaya halaman contec me */
    p {
      font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
      font-weight: 300;
      margin: 35px 15px 35px 15px;
      color: rgb(55, 210, 210);
    }

    .tim-sucses {
      margin: 10px;
      padding: 15px;
      width: 90%;
      height: 90vh;
      /* background-color: rgb(176, 218, 255); */
      box-sizing: border-box;
    }

    .tim-sucses>h4 {
      margin: 15px 50px 15px 50px;
      color: rgb(61, 162, 162);
    }

    .id-card {
      margin: 15px 40px 15px 40px;
      padding: 23px;
      width: 90%;
      height: 50vh;
      background-color: #031825;
    }

    .id-card table {
      /* position: absolute;
      right: 50vh; */
      margin: 60px 15px;
      width: 50vmax;
      height: 30vh;
      /* background-color: aqua; */
      border: 0px solid red;
      border-collapse: collapse;
      font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
      font-weight: 600;
      color: rgb(216, 159, 25);
      /* transform: translateY(-20px), translateX(-5px); */
    }

    .id-card table,
    tr,
    th,
    td {
      border: none;
      outline: 0px;
    }

    #profil>img {
      position: absolute;
      bottom: 25%;
      left: 50%;
      transform: translateX(5vh) translateY(7vh);
      width: 50vh;
      height: 50vh;
      outline: none;
      border: 1px solid transparent;
      object-fit: cover;
      border-top-left-radius: 10%;
      border-bottom-right-radius: 10%;
      box-shadow: 0px 0px 5px #000fff, 5px 5px 10px #000fff;
    }

    .tim-sucses .back,
    a {
      text-decoration: none;
      list-style-type: none;
      color: aqua;
      width: 140px;
      height: 40px;
      border-radius: 10px;
      border: 1px solid transparent;
      outline: none;
      background-color: #031825;
      font-size: 1em;
    }

    ::placeholder {
      text-transform: capitalize;
      color: gray;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 1em;
    }

    #cari {
      width: 60vh;
      position: absolute;
      right: 15%;
      margin-bottom: 0px;
      box-sizing: border-box;
      margin-bottom: 30vh;
      display: flex;
      flex-direction: row;
    }

    #cari input {
      left: 40%;
      margin: 20px;
      padding: 5px 5px;
      width: 60vh;
      height: 35px;
      transform: translateY(-17px);
      border: 1px solid black;
      outline: 0px;
      border-radius: 10px;
      text-align: center;
      box-sizing: border-box;
      font-size: 1.1em;
      color: #000fff;
    }

    #cari input:focus {
      box-shadow: 0px 0px 5px 0.5px rgb(79, 200, 248),
        0px 0px 10px 1px rgb(79, 200, 248), 0px 0px 15px 1.5px rgb(79, 200, 248);
    }

    #cari button {
      text-align: center;
      margin: 20px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 1em;
      width: 100px;
      height: 34px;
      transform: translateX(-5px) translateY(-15px);
      color: #000fff;
      border-radius: 10px;
      border: 1px solid transparent;
      left: 40%;
      box-shadow: 0px 0px 5px 0.5px rgb(79, 200, 248),
        0px 0px 10px 1px rgb(79, 200, 248), 0px 0px 15px 1.5px rgb(79, 200, 248);
    }

    #about {
      text-align: center;
      margin: 20px 35px 0px 35px;
      padding: 10px;
      box-sizing: border-box;
      font-weight: 700;
      font-style: inherit;
      font-size: 1rem;
      position: absolute;
      top: 150%;

    }

    footer {
      color: rgb(17, 209, 231);
      margin: 15px;
      padding: 10px;
      position: absolute;
      bottom: 0;
      right: 1px;
      transform: translateX(-70vh);
    }
  </style>
</head>

<body>

  <?= $this->renderSection('copas'); ?>

</body>
<!-- <footer>
  copyright &copy; 2024
  <b>WebPrograming | Zam.dev </b>
</footer> -->

</html>