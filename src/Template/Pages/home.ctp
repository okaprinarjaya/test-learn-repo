<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berkah Jeans - Order Manage</title>

  <?= $this->Html->meta('icon') ?>
  <?= $this->Html->css('foundation.min.css') ?>
  <?= $this->Html->css('datepicker.min') ?>
  <?= $this->Html->css('foundation-icons/foundation-icons.css') ?>
  <?= $this->Html->css('style.css') ?>
</head>
<body>

<div class="grid-container fluid">
  <header class="main-heading">
    <h1 class="header-title">Berkah Jeans</h1>
  </header>

  <button class="button expanded toggleme">
    <span id="search-opened-text"><i class="fi-x"></i>&nbsp;&nbsp;Tutup pencarian</span>
  </button>

  <form class="form-search-props">
    <div class="search-props">
      <div class="prop-item">
        <div class="item-title"><i class="fi-calendar"></i>&nbsp;&nbsp;Pilih tanggal</div>
        <div id="dp" class="datepicker-here" data-range="true" data-multiple-dates-separator=" - " data-language="en"></div>
      </div>

      <div class="prop-item">
        <div class="item-title"><i class="fi-price-tag"></i>&nbsp;&nbsp;Pilih status order</div>
        <ul class="order-status">
          <li><input id="checkbox12" type="checkbox"><label for="checkbox12">Belum dikerjakan</label></li>
          <li><input id="checkbox22" type="checkbox"><label for="checkbox22">Sedang dikerjakan</label></li>
          <li><input id="checkbox32" type="checkbox"><label for="checkbox32">Dibatalkan</label></li>
          <li><input id="checkbox32" type="checkbox"><label for="checkbox32">Pengerjaan selesai</label></li>
          <li><input id="checkbox32" type="checkbox"><label for="checkbox32">Lainnya</label></li>
        </ul>
      </div>
    </div>

    <button class="button warning expanded" type="button" style="font-weight: bold;">
      <i class="fi-magnifying-glass"></i>&nbsp;Cari!
    </button>
  </form>

  <div class="search-results-wrapper">
    <div class="order-grouping">
      <div class="heading-group">
        <h3><i class="fi-folder"></i>&nbsp;28 Oktober</h3>
        <button class="button mybutton group-button-add-order" type="button" data-duedate="October 28, 2018">
          <i class="fi-page-add"></i>&nbsp;Input order
        </button>
      </div>

      <div class="order clearfix">
        <p class="order-owner"><i class="fi-torso"></i>&nbsp;&nbsp;Oka Prinarjaya</p>
        <ul class="order-attrs">
          <li><span>Pesanan</span> Celana panjang jeans</li>
          <li><span>Tgl selesai</span> 28 Oktober 2018</li>
          <li><span>Tgl masuk</span> 22 Oktober 2018 15:00</li>
          <li><span>Assignee</span> Taufik</li>
        </ul>
        <p class="label-status" style="background-color: green;">Selesai</p>
      </div>

      <div class="order clearfix">
        <p class="order-owner"><i class="fi-torso"></i>&nbsp;&nbsp;Edi Sukaryo</p>
        <ul class="order-attrs">
          <li><span>Pesanan</span> Celana panjang jeans</li>
          <li><span>Tgl selesai</span> 28 Oktober 2018</li>
          <li><span>Tgl masuk</span> 22 Oktober 2018 15:00</li>
          <li><span>Assignee</span> Rian</li>
        </ul>
        <p class="label-status" style="background-color: green;">Selesai</p>
      </div>

      <div class="order clearfix">
        <p class="order-owner"><i class="fi-torso"></i>&nbsp;&nbsp;Bayu Jolali</p>
        <ul class="order-attrs">
          <li><span>Pesanan</span> Celana panjang jeans</li>
          <li><span>Tgl selesai</span> 28 Oktober 2018</li>
          <li><span>Tgl masuk</span> 22 Oktober 2018 15:00</li>
          <li><span>Assignee</span> Taufik</li>
        </ul>
        <p class="label-status" style="background-color: orange;">Sedang dikerjakan</p>
      </div>

      <div class="order clearfix">
        <p class="order-owner"><i class="fi-torso"></i>&nbsp;&nbsp;Intan Permata</p>
        <ul class="order-attrs">
          <li><span>Pesanan</span> Celana panjang jeans</li>
          <li><span>Tgl selesai</span> 28 Oktober 2018</li>
          <li><span>Tgl masuk</span> 22 Oktober 2018 15:00</li>
          <li><span>Assignee</span>-</li>
        </ul>
        <p class="label-status" style="background-color: red;">Belum dikerjakan</p>
      </div>
    </div>

    <div class="order-grouping">
      <div class="heading-group">
        <h3><i class="fi-folder"></i>&nbsp;31 Oktober</h3>
        <button class="button mybutton group-button-add-order" type="button" data-duedate="October 31, 2018">
          <i class="fi-page-add"></i>&nbsp;Input order
        </button>
      </div>

      <div class="order clearfix">
        <p class="order-owner"><i class="fi-torso"></i>&nbsp;&nbsp;Bayu Jolali</p>
        <ul class="order-attrs">
          <li><span>Pesanan</span> Celana panjang jeans</li>
          <li><span>Tgl selesai</span> 31 Oktober 2018</li>
          <li><span>Tgl masuk</span> 22 Oktober 2018 15:00</li>
          <li><span>Assignee</span>Rian</li>
        </ul>
        <p class="label-status" style="background-color: orange;">Sedang dikerjakan</p>
      </div>

      <div class="order clearfix">
        <p class="order-owner"><i class="fi-torso"></i>&nbsp;&nbsp;Oka Prinarjaya</p>
        <ul class="order-attrs">
          <li><span>Pesanan</span> Celana panjang jeans</li>
          <li><span>Tgl selesai</span> 31 Oktober 2018</li>
          <li><span>Tgl masuk</span> 22 Oktober 2018 15:00</li>
          <li><span>Assignee</span>-</li>
        </ul>
        <p class="label-status" style="background-color: red;">Belum dikerjakan</p>
      </div>

      <div class="order clearfix">
        <p class="order-owner"><i class="fi-torso"></i>&nbsp;&nbsp;Edi Sukaryo</p>
        <ul class="order-attrs">
          <li><span>Pesanan</span> Celana panjang jeans</li>
          <li><span>Tgl selesai</span> 31 Oktober 2018</li>
          <li><span>Tgl masuk</span> 22 Oktober 2018 15:00</li>
          <li><span>Assignee</span> -</li>
        </ul>
        <p class="label-status" style="background-color: red;">Belum dikerjakan</p>
      </div>

    </div>

  </div>

</div>

<div class="reveal form-create-order" id="create-order-modalbox" data-reveal>
  <h3><i class="fi-page-add"></i>&nbsp;Input order baru</h3>
  <?php
  echo $this->Form->create($project, ['url' => ['controller' => 'Projects', 'action' => 'add']]);
  echo $this->Form->hidden('project_due_date', ['id' => 'project-due-date']);
  ?>
    <div class="row">
      <label><i class="fi-bookmark"></i>&nbsp;Nama pesanan *</label>
      <?php echo $this->Form->text('project_name'); ?>
    </div>

    <div class="row">
      <label><i class="fi-bookmark"></i>&nbsp;Catatan untuk pesanan *</label>
      <?php echo $this->Form->textarea('project_notes.notes'); ?>
    </div>

    <div class="row">
      <label><i class="fi-calendar"></i>&nbsp;Tanggal penyerahan pesanan *</label>
      <div id="due-date-dp" class="datepicker-here" data-language="en"></div>
    </div>

    <div class="row" style="margin-top: 10px;">
      <label><i class="fi-torso"></i>&nbsp;Nama pelanggan *</label>
      <?php echo $this->Form->text('customer_name'); ?>
    </div>

    <div class="row">
      <label><i class="fi-telephone"></i>&nbsp;No.Telp *</label>
      <?php echo $this->Form->text('customer_phone'); ?>
    </div>

    <div class="contact-panel-actions">
      <button type="submit" class="button submit-button"><i class="fi-save"></i>&nbsp;Simpan</button>
    </div>
  <?php echo $this->Form->end(); ?>

  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php echo $this->Html->script(['jquery-3.2.1.min', 'foundation.min', 'datepicker.min', 'i18n/datepicker.en', 'app']); ?>
</body>
</html>
