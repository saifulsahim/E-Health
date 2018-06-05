
  <!--/ banner-->

  <div class="container">
    <h3 class="text-center">A Positive blood donor</h3>
   <table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">Name</th>
      <th scope="col">Mobile no</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>

  <?php
    foreach ($donor_data as $v_donor)
    {
?>

    <tr>

      <td><?php echo $v_donor->donor_name?></td>
      <td><?php echo $v_donor->donor_mobile_no?></td>
      <td><?php echo $v_donor->donor_address?></td>


    </tr>
<?php } ?>
  </tbody>
</table>


  </div>