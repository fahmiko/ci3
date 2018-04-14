<?php 
	echo form_open_multipart('blogger/edit/'.$show_article['id']);
?>
 <h4><small>EDIT POST</small></h4>
 <hr>
<div class="input-group">
 	<span class="input-group-addon" id="basic-addon1">Title</span>
	<input type="text" class="form-control" name="title" placeholder="Title Article" value="<?php echo $show_article['title'] ?>"><br>
</div><br>
<div class="input-group">
 	<span class="input-group-addon" id="basic-addon1">Author</span>
	<input type="text" class="form-control" name="author" placeholder="ex:john" value="<?php echo $show_article['author'] ?>"><br>
</div><br>
<div class="input-group">
 	<span class="input-group-addon" id="basic-addon1">Artikel</span>
	<textarea name="artikel" class="form-control" style="height:400px;"><?php echo $show_article['artikel']?></textarea><br>
</div><br>
File : <input type="file" name="userfile" required=""><br>
<input type="submit" class="btn btn-primary" value="Edit"> <input type="reset" class="btn btn-warning" value="Reset"><hr>
<?php
	if(validation_errors()){
		echo "<div class='alert alert-danger'>
 			  <strong>Danger!</strong>".validation_errors()."
			  </div>"
			  ;
	}
?>