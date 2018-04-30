<?php 
	echo form_open_multipart('blogger/create', array('class' => 'needs-validation', 'novalidate' => ''));
?>
 <h4><small>NEW POST</small></h4>
 <hr>
<div class="input-group">
 	<span class="input-group-addon" id="basic-addon1">Title</span>
	<input type="text" class="form-control" name="title" value="<?php echo set_value('title')?>" placeholder="Title Article"><br>
</div><br>
<div class="input-group">
 	<span class="input-group-addon" id="basic-addon1">Kategori</span>
 	<?php echo form_dropdown('kategori', $dropdown, set_value('kategori'), 'class="form-control" required' ); ?>
</div><br>
<div class="input-group">
 	<span class="input-group-addon" id="basic-addon1">Author</span>
	<input type="text" class="form-control" name="author" value="<?php echo set_value('author')?>" placeholder="ex:john"><br>
</div><br>
<div class="input-group">
 	<span class="input-group-addon" id="basic-addon1">Artikel</span>
	<textarea name="artikel" class="form-control" style="height:400px;"><?php echo set_value('artikel')?></textarea><br>
</div><br>
File : .jpg .jpeg .png<input type="file" name="userfile" required=""><br>
<input type="submit" id="submitBtn" class="btn btn-success" value="Tambah"> <input type="reset" class="btn btn-warning" value="Reset"><hr>
<?php
	if(validation_errors()){
		echo "<div class='alert alert-danger'>
 			  <strong>Danger!</strong>".validation_errors()."
			  </div>"
			  ;
	}
?>
