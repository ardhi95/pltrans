<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
<a href="<?php echo site_url('PaketWisata/insert'); ?>"class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>

<table class="table">
    <thead>
        <tr>
			<td>No</td>
			<td>nama_paket</td>
			<td>deskripsi</td>
			<td>harga</td>
      <td>Foto</td>
			<td>action</td>
		</tr>
      </thead>
      <?php $no = 1; foreach ($query as $key) { ?>      
        <tbody>
          <td><?php echo $no++; ?></td>
          <td><?php echo $key->nama_paket; ?></td>
          <td><textarea><?php echo $key->deskripsi; ?></textarea></td>
          <td><?php echo $key->harga; ?></td>
          <td><img src="<?= base_url(); ?>uploads/<?php echo $key->foto; ?>" width="100px" height="50px"> </td>
          <td>
            <a href="<?php echo site_url('PaketWisata/edit/')."$key->id_paket"; ?>" class="btn btn-info btn-sm" onclick="return confirm_delete()"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="<?php echo site_url('PaketWisata/del/')."$key->id_paket"; ?>"class="btn btn-danger btn-sm" onclick="return confirm_delete()"><span class="glyphicon glyphicon-trash"></span></a>
            
          </td>
        </tbody>
      <?php } ?>
    </table>
</table>
</div>



<?php $this->load->view('back_end/html/V_end'); ?>
