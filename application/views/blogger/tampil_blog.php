<div class="col-sm-9">
<?php
	foreach ($artikel['select']->result_array() as $row){
?>
 <h4><small>POSTS</small></h4>
 <hr>
 <h2><?php echo $row['title']?></h2>
 <h5><span class="glyphicon glyphicon-time"></span> Diposting oleh <?php echo $row['author']?>, <?php echo $row['tanggal']?>.</h5>
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
       <a href="<?php echo site_url('blogger/delete/'.$row['id']) ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
    </p>
      <br>
       <?php
			}
		?>
    <hr>
    <?php
      echo $pagination;
    ?>
</div>


<?php
// foreach ($artikel->result_array() as $row)
// 		{
// 			echo "<tr>";
//         	echo "<td>".$row['id']."</td>";
//         	echo "<td><img src='assets/img/".$row['gambar']."' width='300' height='200'><br>";
//         	echo "Tanggal Posting <b>".$row['tanggal']."</b></td>";
//         	echo "<td>".$row['title']."</td>";
//         	echo "<td>".$row['artikel']."</td>";
//         	echo "<td><a href='".site_url('blogger/baca-artikel/'.$row['id'])."'>Tampil</a></td>";
//           	echo "<td><a href='".site_url('blogger/edit/'.$row['id'])."'>Edit</a></td>";
//           	echo "<td><a href='".site_url('blogger/delete/'.$row['id'])."'>Delete</a></td>";
//         	echo "</tr>";
// 		}
?>
