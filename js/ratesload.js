<?php
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {?>
<tr>
  <th scope="row"><?php echo $row['sno'] ?></th>
  <td class="col-4 text-start"><?php echo $row['vtype'] ?></td>
  <td class="col-2"><button class="rate btn btn-outline-primary col-12 text-black fw-bold p-2" value="<?php echo $row['vtype'] ?>"><?php echo $row['rsingle'] ?></button></td>
  <td class="col-2"><button class="rate btn btn-outline-success col-12 text-black fw-bold p-2" value="<?php echo $row['vtype'] ?>"><?php echo $row['rreturn'] ?></button></td>
  <td class="col-2"><button class="rate btn btn-outline-warning col-12 text-black fw-bold p-2" value="<?php echo $row['vtype'] ?>"><?php echo $row['rpass'] ?></button></td>
  <td class="col-2"><button class="rate btn btn-outline-danger col-12 text-black fw-bold p-2" value="<?php echo $row['vtype'] ?>"><?php echo $row['rretpass'] ?></button></td>
</tr>
<?php } ?>





<tr>
  <th scope="row">1</th>
  <td class="col-4 text-start">MINI BUS/BUS/MOTOR LORRY</td>
  <td class="col-2"><button class="rate btn btn-outline-primary col-12 text-black fw-bold p-2" value="MINI BUS/BUS/MOTOR LORRY">0001</button></td>
  <td class="col-2"><button class="rate btn btn-outline-success col-12 text-black fw-bold p-2">0002</button></td>
  <td class="col-2"><button class="rate btn btn-outline-warning col-12 text-black fw-bold p-2">0003</button></td>
  <td class="col-2"><button class="rate btn btn-outline-danger col-12 text-black fw-bold p-2">0004</button></td>
</tr>