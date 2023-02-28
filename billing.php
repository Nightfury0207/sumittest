<?php
include 'db.php';
include 'boothid.php';
$conn = OpenCon();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">

		function enterdig(num){
		var vnum =document.getElementById('vnumfield');
		var finbill=document.getElementById('finalbillfield');
		vnum.value+=num;
		finbill.innerHTML+=num;	
		}
	</script>
	<title>TollAway-Billing</title>
</head>
<body>
	<div class="container-fluid bg-primary">
		<div class="row mx-auto p-2">
			<div class="col">
	            <div class="card border-left-primary shadow">
	                <div class="card-body">
	                    <div class="row no-gutters align-items-center">
	                    	<div class="col-3">
	                            <img src="img/icons8-location-96.png" class="img-fluid">
	                        </div>
	                        <div class="col mr-2">
	                            <div class="text-xs text-primary text-uppercase">TOLL BOOTH</div>
	                            <div class="h6 mb-0 text-gray-800">ID: <?php echo $b_id; ?></div>
	                            <div class="h6 mb-0 text-gray-800">Location: <?php echo $location; ?></div>
	                        </div>
	                    </div>
	                </div>
	            </div>
			</div>
			<div class="col">
	            <div class="card border-left-primary shadow">
	                <div class="card-body">
	                    <div class="row no-gutters align-items-center">
	                    	<div class="col-3">
	                            <img src="img/icons8-booth-64.png" class="img-fluid">
	                        </div>
	                        <div class="col mr-2">
	                            <div class="text-xs text-primary text-uppercase">COUNTER</div>
	                            <div class="h6 mb-0 text-gray-800">Number: <?php  ?></div>
	                            <div class="h6 mb-0 text-gray-800">Route: <?php  ?></div>
	                        </div>
	                    </div>
	                </div>
	            </div>
			</div>
			<div class="col">
	            <div class="card border-left-primary shadow">
	                <div class="card-body">
	                    <div class="row no-gutters align-items-center">
	                    	<div class="col-3">
	                            <img src="img/icons8-user-96.png" class="img-fluid">
	                        </div>
	                        <div class="col mr-2">
	                            <div class="text-xs text-primary text-uppercase">USER</div>
	                            <div class="h6 mb-0 text-gray-800">ID: <?php  ?></div>
	                            <div class="h6 mb-0 text-gray-800">Shift: <?php  ?></div>
	                        </div>
	                    </div>
	                </div>
	            </div>
			</div>
			<div class="col">
	            <div class="card border-left-primary shadow">
	                <div class="card-body">
	                    <div class="row no-gutters align-items-center">
	                    	<div class="col-3">
	                            <img src="img/icons8-schedule-64.png" class="img-fluid">
	                        </div>
	                        <div class="col mr-2">
	                            <div class="text-xs text-primary text-uppercase" id="time">TIME</div>
	                            <div class="h6 mb-0 text-gray-800" id="datefield">DATE</div>
	                            <div class="h6 mb-0 text-gray-800"  id="day">DAY</div>
	                        </div>
	                    </div>
	                </div>
	            </div>
			</div>
		</div>
	</div>

	<div class="container-fluid p-2 mb-2">
		<div class="container-fluid border rounded p-0 shadow">
			<div class="card p-0 m-0 border border-0 rounded-top">
				<h5 class="card-header text-center fw-semibold p-1 border border-0 rounded-top">
					BILLING
				</h5>
			</div>

			<div class="container-fluid">
				<div class="row">

					<div class="col-8 d-flex p-0 m-0">
						<table class="table table-striped table-bordered text-center fw-semibold align-middle mb-auto">
						  <thead>
						    <tr>
						      <th class="" scope="col">#</th>
						      <th class="col-4 text-start fw-light" scope="col">VEHICLE TYPE</th>
						      <th class="col-2 text-primary fw-normal" scope="col">SINGLE</th>
						      <th class="col-2 text-success fw-normal" scope="col">RETURN</th>
						      <th class="col-2 text-warning fw-normal" scope="col">PASSING</th>
						      <th class="col-2 text-danger fw-normal" scope="col">RET-PASS</th>
						    </tr>
						  </thead>
						  <tbody class="table-group-divider">
<?php
$sql = 'SELECT * FROM rates';
$retval = mysqli_query($conn, $sql);
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
<tr>
  <th scope="row">1</th>
  <td class="col-4 text-start">MINI BUS/BUS/MOTOR LORRY</td>
  <td class="col-2"><button class="rate btn btn-outline-primary col-12 text-black fw-bold p-2" value="MINI BUS/BUS/MOTOR LORRY">0001</button></td>
  <td class="col-2"><button class="rate btn btn-outline-success col-12 text-black fw-bold p-2">0002</button></td>
  <td class="col-2"><button class="rate btn btn-outline-warning col-12 text-black fw-bold p-2">0003</button></td>
  <td class="col-2"><button class="rate btn btn-outline-danger col-12 text-black fw-bold p-2">0004</button></td>
</tr>
<tr>
  <th scope="row">1</th>
  <td class="col-4 text-start">MINI BUS/BUS/MOTOR LORRY</td>
  <td class="col-2"><button class="rate btn btn-outline-primary col-12 text-black fw-bold p-2" value="MINI BUS/BUS/MOTOR LORRY">0001</button></td>
  <td class="col-2"><button class="rate btn btn-outline-success col-12 text-black fw-bold p-2">0002</button></td>
  <td class="col-2"><button class="rate btn btn-outline-warning col-12 text-black fw-bold p-2">0003</button></td>
  <td class="col-2"><button class="rate btn btn-outline-danger col-12 text-black fw-bold p-2">0004</button></td>
</tr>
<tr>
  <th scope="row">1</th>
  <td class="col-4 text-start">MINI BUS/BUS/MOTOR LORRY</td>
  <td class="col-2"><button class="rate btn btn-outline-primary col-12 text-black fw-bold p-2" value="MINI BUS/BUS/MOTOR LORRY">0001</button></td>
  <td class="col-2"><button class="rate btn btn-outline-success col-12 text-black fw-bold p-2">0002</button></td>
  <td class="col-2"><button class="rate btn btn-outline-warning col-12 text-black fw-bold p-2">0003</button></td>
  <td class="col-2"><button class="rate btn btn-outline-danger col-12 text-black fw-bold p-2">0004</button></td>
</tr>
<tr>
  <th scope="row">1</th>
  <td class="col-4 text-start">MINI BUS/BUS/MOTOR LORRY</td>
  <td class="col-2"><button class="rate btn btn-outline-primary col-12 text-black fw-bold p-2" value="MINI BUS/BUS/MOTOR LORRY">0001</button></td>
  <td class="col-2"><button class="rate btn btn-outline-success col-12 text-black fw-bold p-2">0002</button></td>
  <td class="col-2"><button class="rate btn btn-outline-warning col-12 text-black fw-bold p-2">0003</button></td>
  <td class="col-2"><button class="rate btn btn-outline-danger col-12 text-black fw-bold p-2">0004</button></td>
</tr>


						  </tbody>
						</table>
					</div>

					<div class="col-4 m-0 border border-0">
						<div class="container-fluid mx-auto my-2 border rounded p-2">
							<div class="row mx-auto text-center mb-2 p-0">
						  		<div class="col"><button class="col-12 btn btn-outline-primary fw-bold p-2 fs-5">RETURN</button></div>
						  		<div class="col"><button class="col-12 btn btn-outline-primary fw-bold p-2 fs-5">MEMBER PASS</button></div>
						  	</div>
							<div class="container-fluid border rounded mx-auto p-2">
							  	<div class="card mx-auto text-center mb-2">
							  		<input type="text" class="rounded text-center fw-semibold fs-4 p-0 " id="vnumfield" placeholder="XXXX">
							  	</div>
							  	<div class="row mx-auto text-center p-1">
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 fs-5" onclick="enterdig(7);">7</button></div>
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 fs-5" onclick="enterdig(8);">8</button></div>
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 fs-5" onclick="enterdig(9);">9</button></div>
							  	</div>
							  	<div class="row mx-auto text-center p-1">
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 fs-5" onclick="enterdig(4);">4</button></div>
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 fs-5" onclick="enterdig(5);">5</button></div>
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 fs-5" onclick="enterdig(6);">6</button></div>
							  	</div>
							  	<div class="row mx-auto text-center p-1">
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 fs-5" onclick="enterdig(1);">1</button></div>
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 fs-5" onclick="enterdig(2);">2</button></div>
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 fs-5" onclick="enterdig(3);">3</button></div>
							  	</div>
							  	<div class="row mx-auto text-center p-1">
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 fs-5" onclick="enterdig(0);">0</button></div>
							  		<div class="col"><button class="col-12 btn btn-outline-primary fw-bold p-2 fs-5" onclick="document.getElementById('vnumfield').value = document.getElementById('vnumfield').value.slice(0, -1);"><-</button></div>
							  		<div class="col"><button class="col-12 btn btn-outline-primary p-2 text-black fs-5">Free Pass</button></div>
							  	</div>
							</div>
						  	<div class="card mx-auto text-center mt-2">
						  		<div class="card-body fw-semibold fs-6 p-1" id="finalbillfield"></div>
						  	</div>
						  	<div class="row mx-auto text-center mt-2">
						  		<div class="col"><button class="col-12 btn btn-outline-primary text-success fw-bold fs-4">PRINT</button></div>
						  		<div class="col"><button class="col-12 btn btn-outline-primary text-danger fw-bold fs-4">CANCEL</button></div>
						  	</div>
						  </div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

<script>
$(function() {
            $('#vnumfield').keyup(function() {
                this.value = this.value.toLocaleUpperCase();
            });
        });

var allButtons = document.querySelectorAll('button[class^=rate]');
for (var i = 0; i < allButtons.length; i++) {
  allButtons[i].addEventListener('click', function() {
    rate=this.innerHTML;
    vtype=this.value;
    vnum=document.getElementById("vnumfield").value;
     $("div#finalbillfield").text(vtype+" - "+rate+"/- : "+ (vnum ? vnum : " "));
  });
}
</script>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="datetime.js"></script>
</body>
</html>