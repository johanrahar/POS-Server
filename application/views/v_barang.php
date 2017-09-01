<?php include 'header.php'  ?>
<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
  <!-- page content -->
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Users <small>Some examples to get you started</small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>KeyTable example <small>Users</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <p class="text-muted font-13 m-b-30">
                KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
              </p>

              <table id="datatable-keytable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Satuan</th>
                    <th>ID Cabang</th>
                    <th>Stock</th>
                  </tr>
                </thead>


                <tbody>
          <?php
          $no = 1;
          foreach($barang as $c){
          ?>
                      <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $c->id_barang?></td>
                        <td ondblclick="contentEditable=true;"><?php echo $c->nama_barang?></td>
                        <td><?php echo $c->harga_barang?></td>
                        <td><?php echo $c->id_cabang?></td>
                        <td><?php echo $c->stock?></td>
                      </tr>
          <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

            <!-- /page content -->


</div>
</div>

<!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Tambah Barang</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="book_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">ID Barang</label>
              <div class="col-md-9">
                <input name="id_barang" placeholder="Masukkan ID Barang" class="form-control" type="number">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Barang</label>
              <div class="col-md-9">
                <input name="nama_barang" placeholder="Masukkan Nama Barang" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Harga Barang</label>
              <div class="col-md-9">
                <input name="harga_barang" placeholder="Masukkan Harga Barang" class="form-control" type="number">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">ID Cabang</label>
              <div class="col-md-9">
                <input name="id_cabang" placeholder="Masukkan ID Cabang" class="form-control" type="number">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Stock</label>
              <div class="col-md-9">
				            <input name="stock" placeholder="Masukkan Jumlah" class="form-control" type="number">
              </div>
            </div>
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-default">Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

<!-- Datatables -->
<script src="<?php echo base_url('vendors/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.flash.min.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js');?>"></script>
<script src="<?php echo base_url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>"></script>
<script src="<?php echo base_url('vendors/jszip/dist/jszip.min.js');?>"></script>
<script src="<?php echo base_url('vendors/pdfmake/build/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('vendors/pdfmake/build/vfs_fonts.js');?>"></script>

<script>

	$('.edit').on('dblclick', function() {
	var id = $(this).attr('id');
	var $this = $(this);
	var $input = $('<input>', {
		value: $this.text(),
		type: 'text',
		blur: function() {
		   $this.text(this.value);
		},
		keyup: function(e){
			if((e.keyCode) === 13){
				if (confirm('Are you sure you want to save this thing into the database?')){
					e.preventDefault();
					var value = $input.val();
					$.ajax({
						type: "POST",
						url:'<?php echo site_url('barang/savedata')?>',
						data: {
							'id':id,
							'title':value
						},
						success: function(response){
							alert(response);
						},
					});
				}
			}
		}
	}).appendTo( $this.empty() ).focus();
	});

	function tambah()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }
	</script>
</body>
</html>
<?php include 'footer.php' ?>
