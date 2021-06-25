<?php 

return [
	'title' => 'Tautan (Banner)', 
	'desc' => 'Berikut ini adalah daftar seluruh data yang telah tersimpan di dalam database.', 
	'empty' => 'Sepertinya Anda belum memiliki :message.', 

	'created' => 'Data :title berhasil ditambah!', 
	'updated' => 'Data :title berhasil diubah!', 
	'deleted' => 'Beberapa data :title berhasil dihapus sekaligus!', 

	'create' => [
		'title' => 'Tambah :attribute', 
		'desc' => 'Silahkan lengkapi form berikut untuk menambahkan data baru.'
	],

	'edit' => [
		'title' => 'Ubah :attribute', 
		'desc' => 'Silahkan lakukan perubahan sesuai dengan kebutuhan.'
	], 

	'form' => [
		'label' => [
			'label' => 'Label', 
			'placeholder' => 'Contoh: Portal Samarinda', 
		],
		'url' => [
			'label' => 'URL', 
			'placeholder' => 'Contoh: https://portal.samarindakota.go.id', 
		],
		'tab' => [
			'label' => 'Open in new tab', 
			'desc' => 'Dengan mengaktifkan <b>"Open in new tab"</b>, artinya banner akan membuka halaman baru ketika pengguna menekan banner.', 
		],
		'banner' => [
			'label' => 'Pilih Banner', 
			'select' => 'Pilih Banner', 
			'change' => 'Ganti', 
			'remove' => 'Remove', 
		],
	],

	'table' => [
		'content' => 'CONTENT', 
		'tab' => 'NEW TAB', 
		'created' => 'CREATED', 
	],
];