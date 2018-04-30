**Tugas Pemrograman Web Berbasis Framework**

------------

Tugas 5
Menambahakan form validation client, dan serverside
1. Tambahkan kode set_value() pada form view
```html
<input type="text" name="title" value="<?php echo set_value('title') ?">
```
2. Tambahkan scipt berikut pada form open
```php
echo form_open_multipart('blogger/create', array('class' => 'needs-validation', 'novalidate' => ''));
```
3. Membuat helper baru untuk menyimpan fungsi set rules pada form validation
4. Menambahkan javascript custom.js untuk client validation
5. Helper baru menyimpan fungsi validasi dan pagination


------------

**Tugas 6**
1. Menambahkan data kategori
1. Melakukan CRUD pada kategori
1. Menambahkan select kategori pada form create dan edit artikel
1. Menambahkan `time_ago()` pada posting artikel
1. Filtering data
1. Sorting data