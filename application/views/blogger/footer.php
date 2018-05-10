<br><br><br><br>
</div></div>
</div></div>
<footer id="myFooter">
        <div class="social-networks">
        	<small>Follow Us</small><br>
            <a href="https://plus.google.com/108254097920473857198" class="twitter"><i class="fa fa-google-plus"></i></a>
            <a href="https://web.facebook.com/profile.php?id=100002580687107" class="facebook"><i class="fa fa-facebook-official"></i></a>
            <a href="https://github.com/fahmiko/ci3" class="google"><i class="fa fa-github"></i></a><br>
            <small>@Copyright 2018 by Fahmiko</small>
        </div>
    </footer>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<!-- Datatable Libraly -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?php echo base_url().'assets/js/holder.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/custom.js'?>"></script>

<script type="text/javascript">
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>

<!-- <script type="text/javascript">
function sortArticle(sort){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                document.getElementById("selectSort").innerHTML = xmlhttp.responseText;    
            }
    };
    xmlhttp.open("GET","Blogger/sorting_article/" +sort,true);
    xmlhttp.send();
}
</script>
 -->

 <!-- Datatable Get Table -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#dt_kategori').DataTable({
            "ajax": "<?php echo base_url().'blogger/json_kategori'?>",
            "columns" :[
                {"data": "id_kategori"},
                {"data": "nama"},
                {"data": "deskripsi"},
                { 
                    "data" : null,
                    "render": function (data) {
                        return '<a href="<?php echo base_url('kategori/edit/') ?>'+ data.id_kategori + '" class="btn btn-primary btn-xs"><span class="fa fa-edit"></span></a> <a href="<?php echo base_url('kategori/delete/') ?>'+ data.id_kategori + '" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>' 
                    }
                },

            ],
        });
    } );
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dt_artikel').DataTable({
            "ajax": "<?php echo base_url().'blogger/json_artikel'?>",
            "columns" :[
                {"data": "id"},
                {"data": "title"},
                {"data": "author"},
                {"data": "tanggal"},
                { 
                    "data" : null,
                    "render": function (data) {
                        return '<a href="<?php echo base_url('blogger/edit/') ?>'+ data.id + '" class="btn btn-primary btn-xs"><span class="fa fa-edit"></span></a> <a href="<?php echo base_url('blogger/delete/') ?>'+ data.id + '" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>' 
                    }
                },

            ],
        });
    } );
</script>