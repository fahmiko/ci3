<?php 
	echo form_open_multipart('blogger/edit/'.$show_article['id']);
?>
<div class="col-sm-9">
 <h4><small>EDIT POST</small></h4>
 <hr>
Title : <input type="text" class="form-control" name="title" value="<?php echo $show_article['title'] ?>"><br>
Author : <input type="text" class="form-control" name="author" value="<?php echo $show_article['author'] ?>"><br>
Artikel : <textarea name="artikel" class="form-control" style="height:400px;"><?php echo $show_article['artikel']?></textarea><br>
File : <input type="file" name="userfile" required=""><br>
<input type="submit" class="btn btn-default" value="Edit"><hr>
<?php
	if(validation_errors()){
		echo "<div class='alert alert-danger'>
 			  <strong>Danger!</strong>".validation_errors()."
			  </div>"
			  ;
	}
?>
</div>