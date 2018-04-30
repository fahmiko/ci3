<?php 
	echo form_open_multipart('kategori/edit/'.$kategori['id_kategori']);
?>
 <h4><small>EDIT POST</small></h4>
 <hr>
<div class="input-group">
 	<span class="input-group-addon" id="basic-addon1">Nama</span>
	<input type="text" class="form-control" name="nama" placeholder="Nama kategori" value="<?php echo $kategori['nama'] ?>"><br>
</div><br>
<div class="input-group">
 	<span class="input-group-addon" id="basic-addon1">Deskripsi</span>
	<textarea name="deskripsi" class="form-control" style="height:400px;"><?php echo $kategori['deskripsi']?></textarea><br>
</div><br>
<input type="submit" class="btn btn-primary" value="Edit"> <input type="reset" class="btn btn-warning" value="Reset"><hr>
<?php
	if(validation_errors()){
		echo "<div class='alert alert-danger'>
 			  <strong>Danger!</strong>".validation_errors()."
			  </div>"
			  ;
	}
?>