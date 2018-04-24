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