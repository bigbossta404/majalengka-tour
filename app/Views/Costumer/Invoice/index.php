<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Invoice <?= $produk['id_transaksi']; ?></title>
  <link rel="stylesheet" href="<?= base_url('AssetInvoice/style.css'); ?>" media="all" />
</head>
<body>
  <header class="clearfix">
    <div id="logo">
      <img src="<?= base_url('public_asset/img/logo3.png'); ?>">
    </div>
    <h1>INVOICE <?= $produk['id_transaksi']; ?></h1>
    <div id="company" class="clearfix">
      <div>Morowali Tour</div>
      <div>Morowali,<br /> Sulawesi, Indonesia</div>
      <div>(+62)82 788-889-998</div>
      <div><a href="mailto:morowalitour@morowali.com">morowalitour@morowali.com</a></div>
    </div>
    <div id="project">
      <div><span>Nama Produk</span> <?= $produk['nama_produk']; ?></div>
      <div><span>PEMESAN</span> <?= $produk['fname']; ?> <?= $produk['lname']; ?></div>
      <div><span>TELEPHONE</span> <?= $produk['telephone']; ?></div>
      <div><span>EMAIL</span> <a href="mailto:<?= $produk['email']; ?>"><?= $produk['email']; ?></a></div>
      <div><span>TRANSAKSI</span> <?php
      $date = strtotime($produk['tgl_transaksi']);
      $new_date = date('d M Y', $date);
      echo $new_date;
      ?></div>
      <div><span>PAKAI </span> <?php
      $date = strtotime($produk['tanggal_jual']);
      $new_date = date('d M Y', $date);
      echo $new_date;
      ?></div>
    </div>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th class="service">No</th>
          <th class="desc">Item</th>
          <th>Harga</th>
          <?php if ($produk['id_kategori']==3): ?>
            <th>Malam</th>
          <?php elseif($produk['id_kategori']==1): ?>
            <th>Orang</th>
          <?php else: ?>
            <th>Banyak</th>
          <?php endif; ?>
          <th>TOTAL</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="service">1</td>
          <td class="desc"><?= $produk['nama_produk']; ?></td>
          <td class="unit">Rp. <?= number_format($produk['harga']); ?>;-</td>
          <td class="qty"><?= $produk['banyak'] ?></td>
          <td class="total">Rp.<?= number_format($produk['harga']*$produk['banyak']);  ?>;-</td>
        </tr>
        <tr>
          <td colspan="4">SUBTOTAL</td>
          <td class="total">Rp.<?= number_format($produk['harga']*$produk['banyak']);  ?>;-</td>
        </tr>
        <!-- <tr>
        <td colspan="4">TAX 25%</td>
        <td class="total">$1,300.00</td>
      </tr> -->
      <tr>
        <td colspan="4" class="grand total">GRAND TOTAL</td>
        <td class="grand total">Rp.<?= number_format($produk['harga']*$produk['banyak']);  ?>;-</td>
      </tr>
    </tbody>
  </table>
  <div id="notices">
    <div>NOTICE:</div>
    <div class="notice">Jika melewati batas Waktu pakai maka dianggap hangus dan harus melakukan transaksi lagi.</div>
  </div>
</main>
<!-- <footer>
  Invoice was created on a computer and is valid without the signature and seal.
</footer> -->
<script type="text/javascript">
  window.print();
</script>
</body>
</html>
