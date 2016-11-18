<?php $this->load->view('back_end/html/V_menu'); ?>

<div class="panel-body1">
<a href="<?php echo site_url('info/insert/'); ?>"class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>

<table class="table">
    <thead>
        <tr>
          <th>#</th>
          <th>Nama Info</th>
          <th>Blog</th>
          <th>Foto</th>
          <th>Gallery</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php $no = 1; foreach ($query as $key) { ?>      
        <tbody>
          <td><?php echo $no++; ?></td>
          <td><?php echo $key->nama_info; ?></td>
          <td><textarea><?php echo $key->blog; ?></textarea></td>
          <td><img src="<?=base_url()?>uploads/<?php echo $key->foto; ?>" width="auto" height="100"></td>
          <td><a href="<?php echo site_url('info/viewAllimage/')."$key->id_info"; ?>"class="btn btn-info btn-sm"><span class="glyphicon glyphicon-picture"></span>&nbsp View All Image</a></td>
          <td>
            <a href="<?php echo site_url('info/edit/')."$key->id_info"; ?>" class="btn btn-info btn-sm" onclick="return confirm_delete()"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="<?php echo site_url('info/del/')."$key->id_info"; ?>"class="btn btn-danger btn-sm" onclick="return confirm_delete()"><span class="glyphicon glyphicon-trash"></span></a>
            
          </td>
        </tbody>
      <?php } ?>
    </table>
</table>
</div>

<?php $this->load->view('back_end/html/V_end'); ?>