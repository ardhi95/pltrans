<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
<form action="<?php echo site_url('armada/insertData'); ?>" enctype="multipart/form-data" method="post">
<div class="form-group">
          <!-- <label for="focusedinput" class="col-sm-2 control-label">Nama Info Wisata</label> -->
            <input type="hidden" name="id_armada" id="">
            <div class="col-sm-5">
            <!-- Nama Armada -->
              <input type="text" class="form-control1" id="focusedinput" placeholder="Nama Armada" name="nama_armada">
            </div>
            <div class="col-sm-5">
            <!-- Foto Armada -->
              <input type="file" class="form-control1" id="focusedinput" name="foto">
            </div>
            <div class="col-sm-2" >
              <button type="submit" class="btn-success btn">Simpan</button>
            </div>
        </div>
</form>
<table class="table">
    <thead>
        <tr>
         	<th>#</th>
         	  <td>Nama Armada</td>
            <td>Foto</td>
      			<td>Deskripsi</td>
      			<td></td>
        </tr>
      </thead>
      <?php $no = 1; foreach ($query as $key) { ?>      
        <tbody>
          	<td><?php echo $no++; ?></td>
			<td><?php echo $key->nama_armada; ?></td>
			<td><img src="<?=base_url()?>uploads/<?php echo $key->foto; ?>" width="auto" height="100"></td>
          
          	<td><a href="<?php echo site_url('armada/insertKet/')."$key->id_armada"; ?>"class="btn btn-info btn-sm"><span class="glyphicon glyphicon-picture"></span>&nbsp Ket Armada</a></td>
          <td>
            <a href="<?php echo site_url('armada/edit/')."$key->id_armada"; ?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="<?php echo site_url('armada/del/')."$key->id_armada"; ?>"class="btn btn-danger btn-sm" onclick="return confirm_delete()"><span class="glyphicon glyphicon-trash"></span></a>
            
          </td>
        </tbody>
      <?php } ?>
    </table>
</table>
</div>

<?php $this->load->view('back_end/html/V_end'); ?>