<!-- Untuk form sorting -->
<?php echo form_open('Blogger/index'); ?>
<div class="row" style="margin-top: 10px">
  <div class="col-sm-2">
    <select name="kolom" class="form-control" style="max-width: 100px">
      <option value="title" selected="">Judul</option>
      <option value="tanggal">Tanggal</option>
      <option value="author">Author</option>
    </select>
  </div>
  <!-- untuk urutan sorting ASC atau DESC -->
  <div class="col-sm-2">
    <select name="urutan" class="form-control" style="max-width: 100px;margin-left: -80px;">
      <option value="asc" selected="">ASC</option>
      <option value="desc">DESC</option>
    </select>
  </div>
  <div class="col-sm-6" style="margin-left: -160px">
    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-list"></i></button>
  </div>
  <?php echo form_close(); ?>
  <!-- Mengakhiri form sorting -->
  <!-- Membuat form untuk searching -->
  <?php echo form_open('Blogger/index'); ?>
  <div class="col-sm-3" style="margin-left: -70px">
      <input type="text" class="form-control" name="cari" required="" placeholder="Cari Judul..">
  </div>
  <div class="col-sm-1" style="margin-left: -25px">
      <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
  </div>
  <!-- Menutup form searching -->
  <?php echo form_close(); ?>
</div>
<hr>
<?php 
  // Jika artikel tidak ditemukan tampilkan pesan "DATA TIDAK DITEMUKAN"
  if($artikel['select']->num_rows()==0){
    // Ditampilkan dalam jumbotron
    echo "<div class='jumbotron' style='margin-bottom:230px' align='center'>DATA TIDAK DITEMUKAN</div>";
  }else{
?>
<?php
	foreach ($artikel['select']->result_array() as $row){
?>
<h4><small>POSTS ID <?php echo $row['id'] ?></small></h4>
<hr>
<h2><?php echo $row['title']?></h2>
<h5><span class="glyphicon glyphicon-time"></span> Diposting oleh <?php echo $row['author']?>, <?php echo time_ago($row['tanggal'])?>.</h5>
<h5><span class="glyphicon glyphicon-list"></span> <?php echo $row['nama']?></h5>
<div class="row">
  	<div class="col-sm-3">
   		<p><?php echo "<img src='".base_url()."assets/img/".$row['gambar']."' width='200' height='150'>"?></p>
		</div>	
		<div class="com-sm-9">
			<p><?php echo $row['artikel']?></p>
		</div>
</div>
  <p><a href="<?php echo site_url('blogger/baca-artikel/'.$row['id'])?>" class="btn btn-default">Lanjutkan =></a> 
      <a href="<?php echo site_url('blogger/edit/'.$row['id'])?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
     <a href="<?php echo site_url('blogger/delete/'.$row['id'])?>" class="btn btn-danger" onclick="return confirm('ingin hapus postingan ?')" ><span class="glyphicon glyphicon-trash"></span></a>
  </p>
  <br>
  <?php } ?>
  <hr>
  <?php
    if(isset($pagination)){
      echo $pagination;
      }
    }
  ?>