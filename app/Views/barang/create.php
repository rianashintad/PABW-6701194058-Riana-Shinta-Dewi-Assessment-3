<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php

$judul = [
	'name' => 'judul',
	'id' => 'judul',
	'value' => null,
	'class' => 'form-control',
];

$penulis = [
	'name' => 'penulis',
	'id' => 'penulis',
	'value' => null,
	'class' => 'form-control',
];

$pengarang = [
	'name' => 'pengarang',
	'id' => 'pengarang',
	'value' => null,
	'class' => 'form-control',
];

$harga = [
	'name' => 'harga',
	'id' => 'harga',
	'value' => null,
	'class' => 'form-control',
	'type' => 'number',
	'min' => 0,
];

$stok = [
	'name' => 'stok',
	'id' => 'stok',
	'value' => null,
	'class' => 'form-control',
	'type' => 'number',
	'min' => 0,
];

$gambar = [
	'name' => 'gambar',
	'id' => 'gambar',
	'value' => null,
	'class' => 'form-control',
];

$submit = [
	'name' => 'submit',
	'id' => 'submit',
	'value' => 'Submit',
	'class' => 'btn btn-success',
	'type' => 'submit',
];

?>
<h1>Tambah Buku</h1>

<?= form_open_multipart('Barang/create') ?>
<div class="form-group">
    <?= form_label("judul", "judul") ?>
    <?= form_input($judul) ?>
</div>

<div class="form-group">
    <?= form_label("penulis", "penulis") ?>
    <?= form_input($penulis) ?>
</div>

<div class="form-group">
    <?= form_label("pengarang", "pengarang") ?>
    <?= form_input($pengarang) ?>
</div>

<div class="form-group">
    <?= form_label("Harga", "harga") ?>
    <?= form_input($harga) ?>
</div>

<div class="form-group">
    <?= form_label("Stok", "stok") ?>
    <?= form_input($stok) ?>
</div>

<div class="form-group">
    <?= form_label("Gambar", "gambar") ?>
    <?= form_upload($gambar) ?>
</div>

<div class="text-right">
    <?= form_submit($submit) ?>
</div>

<?= form_close() ?>
<?= $this->endSection() ?>