<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CRUD no Modals</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<link href="plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="dist/css/sweetalert.css">
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script> <!-- lib js untuk ajax -->
	<script src="bootstrap/js/bootstrap.min.js"></script> <!-- lib js untuk modals -->
	<script src="plugins/datatables/jquery.dataTables.min.js"></script> <!-- lib js untuk datatables -->
	<script src="plugins/datatables/dataTables.bootstrap.min.js"></script> <!-- lib js untuk datatables -->
	<script src="dist/js/sweetalert.min.js"></script> <!-- lib js untuk sweet alert -->

	<style>
		body{
		width: 100%;
		height: 800px;
		margin: 10px auto;
		};	
		section{
			width: 900px;
		};
		form .button-group{
			text-align: right;
		}		
	</style> 
</head>
<body>
<div >
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<!-- box box-primary -->
				<div class="box box-primary">
					<!-- modal dialog-->
					<div class="modal fade" id="mymodaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Tambah Data Peserta</h4>
						      </div>
						      <div class="modal-body">
					                <div class="form-group">
					                  <label>Nama Lengkap</label>
					                  <input type="text" class="form-control" name="add_nama_lengkap" placeholder="Nama Lengkap">
					                </div>
					                <div class="form-group">
					                  <label>Jenis Kelamin</label>
					                  <select class="form-control" name="add_jenis_kelamin" >
					                      <option value="Laki-laki">Laki-laki</option>
					                      <option value="Perempuan">Perempuan</option>
					                  </select>
					                </div>
					                <div class="form-group">
					                  <label>Alamat</label>
					                  <input type="text" class="form-control" name="add_alamat" placeholder="Alamat">
					                </div>
					                <div class="form-group">
					                  <label>Email</label>
					                    <input type="email" class="form-control" name="add_email" placeholder="Email">
					                </div>
						      </div>
						      <div class="modal-footer">
							      <button type="submit" class="btn btn-success" data-dismiss="modal" id="add_action">Simpan</button>
							      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						      </div>						      
					    </div>
					  </div>
					</div>
					<div class="modal fade" id="mymodalupdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Ubah Data Peserta</h4>
						      </div>
						      <div class="modal-body">
					                <div class="form-group">
					                  <label>Id</label>
					                  <input type="text" class="form-control" name="update_id_disabled" placeholder="Id" disabled>
					                  <input type="hidden" class="form-control" name="update_id">
					                </div>
					                <div class="form-group">
					                  <label>Nama Lengkap</label>
					                  <input type="text" class="form-control" name="update_nama_lengkap" placeholder="Nama Lengkap">
					                </div>
					                <div class="form-group">
					                  <label>Jenis Kelamin</label>
					                  <select class="form-control" name="update_jenis_kelamin" >
					                      <option value="Laki-laki">Laki-laki</option>
					                      <option value="Perempuan">Perempuan</option>
					                  </select>
					                </div>
					                <div class="form-group">
					                  <label>Alamat</label>
					                  <input type="text" class="form-control" name="update_alamat" placeholder="Alamat">
					                </div>
					                <div class="form-group">
					                  <label>Email</label>
					                    <input type="email" class="form-control" name="update_email" placeholder="Email">
					                </div>
						      </div>
						      <div class="modal-footer">
							      <button type="submit" class="btn btn-success" data-dismiss="modal" id = "update_action">Ubah</button>
							      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						      </div>						      
					    </div>
					  </div>
					</div>    			
					<!-- /modal dialog-->					
					<!-- box-header -->
					<div class="box-header with-border">
						<button class="btn btn-primary tambah-form" data-toggle="modal" data-target="#mymodaladd"><i class="fa fa-plus"></i>Tambah</button>
					</div>
					<!-- /box-header -->					
					<!-- view data -->
	                <div class="box-body">
						<table id="tabel_data_pegawai" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Email</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Id</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Email</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>                   
	                </div><!-- /.box-body -->
					<!-- /view data -->
				</div>
				<!-- /box box-primary-->
			</div><!--/.col (right) -->
		</div> <!-- /.row -->
	</section><!-- /.content -->
</div>
<script type="text/javascript">
	var t = $('#tabel_data_pegawai').DataTable({
			  "autoWidth": false,
			  "rowCallback": function( row, data, index ) {
				  $('td:eq(5)', row).html("<button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#mymodalupdate\" onclick='handleClickUpdate("+data[0]+");'><i class=\"fa fa-edit\"></i>Ubah</button>&nbsp;&nbsp;<button class=\"btn btn-danger\"  data-toggle=\"modal\" onclick='handleClickDelete("+data[0]+");'><i class=\"fa fa-trash\"></i>Hapus</button>");
			  },			  
			  "columnDefs": [
    				{ "width": "2%", sClass: "dt-head-center dt-body-center", "targets": 0 },
    				{ "width": "15%", sClass: "dt-head-center dt-body-center", "targets": 1 },
    				{ "width": "20%", sClass: "dt-head-center dt-body-center", "targets": 2 },
    				{ "width": "20%", sClass: "dt-head-center dt-body-center", "targets": 3 },
    				{ "width": "15%", sClass: "dt-head-center dt-body-center", "targets": 4 },
    				{ "width": "20%", sClass: "dt-head-center dt-body-center", "targets": 5 }
  				]
			});	

	function getDataOnJSON(data, id) {
		for(var i = 0; i < data.length; i++)
		{
			if(data[i][0] == id){
				return data[i];
			}
		}
	}

	function handleClickUpdate(id){
		$.ajax({
			url:"phpCode/action_t_pegawai.php",
			dataType: "json", 
	        success:function(data){
	        	add_data_to_table_t(t, data);
	        	get_data = getDataOnJSON(data, id);
	        	$('input[name="update_id"]').val(get_data[0]);
				$('input[name="update_id_disabled"]').val(get_data[0]);
				$('input[name="update_nama_lengkap"]').val(get_data[1]);
				$('select[name="update_jenis_kelamin"]').val(get_data[2]).change();;
				$('input[name="update_alamat"]').val(get_data[3]);
				$('input[name="update_email"]').val(get_data[4]);	
			}
		})				
	}

	function handleClickDelete(id){
			swal({
			  title: "Apa kamu yakin?",
			  text: "Kamu tidak akan bisa mengembalikan data yang sudah terhapus!",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Ya, hapus!",
			  closeOnConfirm: false
			},
			function(){
				$.ajax({
					dataType: "json", 
					url:"phpCode/action_t_pegawai.php",
					type:"POST",
				    contentType: false,
				    processData: false,     
					data: function() {
				        var data = new FormData();
				        data.append("action", "delete");
				        data.append("id", id);
				        return data;
				    }(),
				    success:function(data){
				    	add_data_to_table_t(t, data);
					}
				})				
			  swal("Terhapus!", "Data berhasil dihapus.", "success");
			});			
	}

	function add_data_to_table_t(table, data){
  	  	table.clear().draw();
  	  	table.rows.add(data).draw( false );
	}		

	function refresh_tabel(){
		$.ajax({
			url:"phpCode/action_t_pegawai.php",
			dataType: "json", 
	        success:function(data){
	        	add_data_to_table_t(t, data);
		        console.log(JSON.stringify(data));
			}
		})			
	}
	
  	$(document).ready(function(){
  		$(function(){
	  		t.order( [ 0, 'asc' ] ).draw(false);
  			refresh_tabel();
		});	
		
	  	$("#add_action").click(function(){
	  		var nama_lengkap = $("input[name=\"add_nama_lengkap\"]").val();
	  		var jenis_kelamin = $("select[name=\"add_jenis_kelamin\"]").val();
	  		var alamat = $("input[name=\"add_alamat\"]").val();
	  		var email = $("input[name=\"add_email\"]").val();
			$.ajax({
				dataType: "json", 
				url:"phpCode/action_t_pegawai.php",
				type:"POST",
		        contentType: false,
		        processData: false,    
				data: function() {
			        var data = new FormData();
			        data.append("action", "add");
			        data.append("nama_lengkap", nama_lengkap);
			        data.append("jenis_kelamin", jenis_kelamin);
			        data.append("alamat", alamat);
			        data.append("email", email);
			        return data;
		        }(),
		        success:function(data){
		        	add_data_to_table_t(t, data);
				}
			});	  		
		});	

	  	$("#update_action").click(function(){
	  		var id = $("input[name=\"update_id\"]").val();
	  		var nama_lengkap = $("input[name=\"update_nama_lengkap\"]").val();
	  		var jenis_kelamin = $("select[name=\"update_jenis_kelamin\"]").val();
	  		var alamat = $("input[name=\"update_alamat\"]").val();
	  		var email = $("input[name=\"update_email\"]").val();
			$.ajax({
				dataType: "json", 
				url:"phpCode/action_t_pegawai.php",
				type:"POST",
		        contentType: false,
		        processData: false,     
				data: function() {
			        var data = new FormData();
			        data.append("action", "update");
			        data.append("id", id);
			        data.append("nama_lengkap", nama_lengkap);
			        data.append("jenis_kelamin", jenis_kelamin);
			        data.append("alamat", alamat);
			        data.append("email", email);
			        return data;
		        }(),
		        success:function(data){
		        	add_data_to_table_t(t, data);
				}
			})		  		
		});		
	});	
</script>	
</body>
</html>
