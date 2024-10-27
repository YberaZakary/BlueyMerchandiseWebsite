<?php

use CodeIgniter\Database\BaseUtils;
?>

<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>Bluey</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

<section>
  <div class="uk-background-cover" data-src="<?= base_url('assets/images/Markets.jpg')?>" style="object-fit: fill; padding-bottom: 10%;" uk-img>
    <div style="padding-block: 10%; max-width: 80%; margin: auto;">
      <div uk-filter="target: .js-filter">
        <ul class="uk-subnav uk-subnav-pill">
            <li class="uk-active" uk-filter-control><a href="#">All</a></li>
            <li uk-filter-control="[data-color='white']"><a href="#">White</a></li>
            <li uk-filter-control="[data-color='blue']"><a href="#">Blue</a></li>
            <li uk-filter-control="[data-color='black']"><a href="#">Black</a></li>
        </ul>

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
            <li data-color="white">
                <div class="uk-card uk-card-default uk-card-body">Item</div>
            </li>
            <li data-color="blue">
                <div class="uk-card uk-card-primary uk-card-body">Item</div>
            </li>
            <li data-color="white">
                <div class="uk-card uk-card-default uk-card-body">Item</div>
            </li>
            <li data-color="white">
                <div class="uk-card uk-card-default uk-card-body">Item</div>
            </li>
            <li data-color="black">
                <div class="uk-card uk-card-secondary uk-card-body">Item</div>
            </li>
            <li data-color="black">
                <div class="uk-card uk-card-secondary uk-card-body">Item</div>
            </li>
            <li data-color="blue">
                <div class="uk-card uk-card-primary uk-card-body">Item</div>
            </li>
            <li data-color="black">
                <div class="uk-card uk-card-secondary uk-card-body">Item</div>
            </li>
            <li data-color="blue">
                <div class="uk-card uk-card-primary uk-card-body">Item</div>
            </li>
            <li data-color="white">
                <div class="uk-card uk-card-default uk-card-body">Item</div>
            </li>
            <li data-color="blue">
                <div class="uk-card uk-card-primary uk-card-body">Item</div>
            </li>
            <li data-color="black">
                <div class="uk-card uk-card-secondary uk-card-body">Item</div>
            </li>
        </ul>

      </div>
    </div>

  </div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<?= $this->endSection('content') ?>



