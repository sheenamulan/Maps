
<a class="btn btn-primary" href="<?php echo base_url('index.php/mahasiswa/add'); ?>">Back</a>

<table class="table mt-4">
  
  <tbody>
    <tr>
      <td>ID</td>
      <td><?php echo $mahasiswa->id; ?></td>
    </tr>

    <tr>
      <td>First name</td>
      <td><?php echo $mahasiswa->first_name; ?></td>
    </tr>
    

    <tr>
      <td>Last name</td>
      <td><?php echo $mahasiswa->last_name; ?></td>
    </tr>

  
  </tbody>
</table>