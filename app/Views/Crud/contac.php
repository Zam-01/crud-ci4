<?= $this->extend('layout/template'); ?>
<?= $this->section('copas'); ?>
<div class="container">
  <nav class="navigasi">
    <h3>Khaerunnizam | ZAM.dev</h3>
    <div class="link">
      <a href="/Crud/home">home</a>
      <a href="/Crud/about">about</a>
      <a href="/Crud/data">Motivate youe self</a>
      <a href="/Crud/contac">Contac me</a><!-- <a href="#"></a> -->
    </div>
  </nav>
  <ul>
    <div class="contac-me">
      <p>
        perasaan contac sudah tadi di buat dihalaman rumah , but it's oke lah
        nambah opsi dikit g ngaruh
      </p>
      <div class="tim-sucses">
        <h4>MOTIVATE YOURSELF TIM =></h4>
        <span id="profil">
          <img src="/img/kakasi.jpg" alt="mas zam | Zam.dev" />
        </span>
        <div class="id-card">
          <table>
            <tr>
              <th>Nama ;</th>
              <td>Khaerun Nizam</td>
            </tr>
            <tr>
              <th>Umur ;</th>
              <td>17</td>
            </tr>
            <tr>
              <th>Hobi ;</th>
              <td>Bermain game | Mempelajari hal baru</td>
            </tr>
            <tr>
              <th>Folowers ;</th>
              <td>Tik Tok ; 0k <br />instagram ; 0k <br />Facebook ; 350</td>
            </tr>
          </table>
        </div>
        <button class="back">
          <a href="about.html">folllow me bro</a>
        </button>
      </div>
    </div>

    <footer id="about">
      copyright &copy; 2024
      <b>WebPrograming | Zam.dev </b>
    </footer>
    <?= $this->endSection(); ?>