<h4><small>Category</small></h4>
<hr class="">
<div class="container">
    <div class="row" style="margin-right: 30px;">
    	<?php foreach ($kategori['select']->result() as $data) {?>
        <div class="col-md-6">
            <div class="thumbnail">
                <div class="caption">
                     <h4 class=""><?php echo $data->nama?></h4>
                     	<hr>
                    	<p class=""><?php echo $data->deskripsi?>
                    	</p> 
                      <!-- Untuk delete kategori -->
                      <a href="<?php echo site_url().'kategori/delete/'.$data->id_kategori ?>" class="btn btn-danger btn-xs pull-right" 
                      onclick="return confirm('ingin hapus kategori ?')" >Delete <i class="glyphicon glyphicon-trash"></i></a>  

                      <!-- Untuk edit Kategori -->
                      <a href="<?php echo site_url().'kategori/edit/'.$data->id_kategori ?>" class="btn btn-primary btn-xs" role="button">Edit <i class="glyphicon glyphicon-edit"></i></a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <!--/row-->
<div class="container">
  <?php echo "<p style='margin-left:100px'>".$pagination."</p>"?>
</div>
<?php
  if(validation_errors()){
    echo "<div class='alert alert-danger'>
        <strong>Danger!</strong>".validation_errors()."
        </div>"
        ;
  }
?>
</div>
<!--/container -->
<div class="container">
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" style="margin-bottom: 200px;margin-left: 15px" data-target="#myModal">Tambah Kategori</button>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <?php echo form_open('Kategori/create', array('class' => 'needs-validation', 'novalidate' => '')) ;?>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Kategori</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" value="<?php echo set_value('nama') ?>" name="nama">
             </div>
             <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi"><?php echo set_value('deskripsi') ?></textarea>
             </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Tambah">
        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>