<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
<a href="<?php echo site_url('armada/insert/'); ?>"class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>

<table class="table">
    <thead>
        <tr>
         	<th>#</th>
         	<td>nama_armada</td>
			<td>foto</td>
			<td>deskripsi</td>
			<td>action</td>
        </tr>
      </thead>
      <?php $no = 1; foreach ($query as $key) { ?>      
        <tbody>
          	<td><?php echo $no++; ?></td>
			<td><?php echo $key->nama_armada; ?></td>
			<td><img src="<?=base_url()?>uploads/<?php echo $key->foto; ?>" width="auto" height="100"></td>
          
          	<td><a href="<?php echo site_url('armada/insert/')."$key->id_armada"; ?>"class="btn btn-info btn-sm"><span class="glyphicon glyphicon-picture"></span>&nbsp Ket Armada</a></td>
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