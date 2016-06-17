<html lang="en">
<head>
	<meta charset="utf-8">

	<title>RACI</title>
	<meta name="AdamBergere" content="JPMC Service Improvement RACI">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>
<div class="container" role="main">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#ITRC" aria-controls="ITRC" role="tab" data-toggle="tab">ITRC</a></li>
    <li role="presentation"><a href="#CMDB" aria-controls="CMDB" role="tab" data-toggle="tab">CMDB</a></li>
    <li role="presentation"><a href="#ESM" aria-controls="ESM" role="tab" data-toggle="tab">ESM</a></li>
    <li role="presentation"><a href="#NVA" aria-controls="NVA" role="tab" data-toggle="tab">NVA</a></li>
    <li role="presentation"><a href="#CCS" aria-controls="CCS" role="tab" data-toggle="tab">CCS</a></li>
  </ul>

    <!-- Tab panes -->
  	<div class="tab-content">


  	<!-- CMDB PHP Data Grab -->
	<?php
		$sample =  array(
			array("MSG_ID" => "1001",
							"MSG_Title" => "Unexpected system error",
							"Platform" => "WINDOWS",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			array("MSG_ID" => "1005",
							"MSG_Title" => "Connection Failure",
							"Platform" => "DBI DB2",
							"Severity" => "Medium",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			array("MSG_ID" => "5144",
							"MSG_Title" => "GID of home directory is incorrect",
							"Platform" => "UNIX",
							"Severity" => "Medium",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Application Dependent")
			);
	?>


	    <div role="tabpanel" class="tab-pane active" id="ITRC">
			<h2>Selected Table</h2>
			<p>The .table-striped class adds zebra-stripes to a table:</p>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>MSG_ID</th>
						<th>MSG_Title</th>
						<th>Platform</th>
						<th>Severity</th>
						<th></th>
					</tr>
				</thead>
				<tbody>

		<?php

		for($x = 0; $x <3; $x++){
			echo '<tr>'
				. "<td>"
					. $sample[$x]["MSG_ID"]
				. "</td>"
				. "<td>"
					. $sample[$x]["MSG_Title"]
				. "</td>"
				. "<td>"
					. $sample[$x]["Platform"]
				. "</td>"
				. "<td>"
					. $sample[$x]["Severity"]
				. "</td>"
				."<td>";
					// $deetsLink = 'details.php?deets=' . serialize($sample[$x]);
					// echo "<a href='$deetsLink'>Details</a>";
				?>

							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
							  Details
							</button>

							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog modal-lg" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
							      </div>
							      <div class="modal-body">
							        FILL IN HERE...
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>

		<?php
					echo 
				"</td>"
			. "</tr>";
		}

		?>

				</tbody>
			</table>
		</div> <!-- ITRC Div Close -->

		<!-- CMDB PHP Data Grab -->
		<?php
		$sample2 =  array(
			array("Policy" => "70",
							"Policy Name" => "Tools - GSO ADDM Login Failed-In Build Host",
							"Policy Type" => "WINDOWS",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			array("Policy" => "71",
							"Policy Name" => "FAIL - GSO ADDM Login Failed-In Build Host",
							"Policy Type" => "WINDOWS",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			array("Policy" => "120",
							"Policy Name" => "Critical Error - GSO ADDM Login Failed-In Build Host",
							"Policy Type" => "WINDOWS",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			);

		?>

		<div role="tabpanel" class="tab-pane" id="CMDB">
			<h2>Selected Table</h2>
			<p>The .table-striped class adds zebra-stripes to a table:</p>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Policy ID</th>
						<th>Policy Name</th>
						<th>Policy Type</th>
						<th>Severity</th>
						<th>Details</th>
					</tr>
				</thead>
				<tbody>

		<?php
		for($x = 0; $x <3; $x++){
			echo '<tr>'
				. "<td>"
					. $sample2[$x]["Policy"]
				. "</td>"
				. "<td>"
					. $sample2[$x]["Policy Name"]
				. "</td>"
				. "<td>"
					. $sample2[$x]["Policy Type"]
				. "</td>"
				. "<td>"
					. $sample2[$x]["Severity"]
				. "</td>"
				."<td>";
					$deetsLink = 'details.php?deets=' . serialize($sample2[$x]);
					echo "<a href='$deetsLink'>Details</a>";
					echo 
				"</td>"
			. "</tr>"; 
		} 
		?>

				</tbody>
			</table>
		</div> <!-- CMDB div close -->

		<!-- ESM PHP Data Grab -->
		<?php
		$sample3 =  array(
			array("Policy" => "30",
							"Policy Name" => "Tools host",
							"Policy Type" => "WINDOWS",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			array("Policy" => "1231",
							"Policy Name" => "FAIL - Php",
							"Policy Type" => "WINDOWS",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			array("Policy" => "140",
							"Policy Name" => "Critical Error - Javascript Build Host",
							"Policy Type" => "WINDOWS",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			);

		?>

		<div role="tabpanel" class="tab-pane" id="ESM">
			<h2>Selected Table</h2>
			<p>The .table-striped class adds zebra-stripes to a table:</p>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Policy ID</th>
						<th>Policy Name</th>
						<th>Policy Type</th>
						<th>Severity</th>
						<th>Details</th>
					</tr>
				</thead>
				<tbody>

		<?php
		for($x = 0; $x <3; $x++){
			echo '<tr>'
				. "<td>"
					. $sample3[$x]["Policy"]
				. "</td>"
				. "<td>"
					. $sample3[$x]["Policy Name"]
				. "</td>"
				. "<td>"
					. $sample3[$x]["Policy Type"]
				. "</td>"
				. "<td>"
					. $sample3[$x]["Severity"]
				. "</td>"
				."<td>";
					$deetsLink = 'details.php?deets=' . serialize($sample3[$x]);
					echo "<a href='$deetsLink'>Details</a>";
					echo 
				"</td>"
			. "</tr>"; 
		} 
		?>

				</tbody>
			</table>
		</div> <!-- ESM div close -->

		<!-- NVA PHP Data Grab -->
		<?php
		$sample4 =  array(
			array("Policy" => "91290",
							"Policy Name" => "File setup is setguid",
							"Policy Type" => "Oracle DB",
							"Severity" => "high",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			array("Policy" => "1581",
							"Policy Name" => "The file attributes are modiefied",
							"Policy Type" => "MAcOS",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			array("Policy" => "16996",
							"Policy Name" => "Critical Error - Javascript Build Host",
							"Policy Type" => "WINDOWS",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			);

		?>

		<div role="tabpanel" class="tab-pane" id="NVA">
			<h2>Selected Table</h2>
			<p>The .table-striped class adds zebra-stripes to a table:</p>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Policy ID</th>
						<th>Policy Name</th>
						<th>Policy Type</th>
						<th>Severity</th>
						<th>Details</th>
					</tr>
				</thead>
				<tbody>

		<?php
		for($x = 0; $x <3; $x++){
			echo '<tr>'
				. "<td>"
					. $sample4[$x]["Policy"]
				. "</td>"
				. "<td>"
					. $sample4[$x]["Policy Name"]
				. "</td>"
				. "<td>"
					. $sample4[$x]["Policy Type"]
				. "</td>"
				. "<td>"
					. $sample4[$x]["Severity"]
				. "</td>"
				."<td>";
					$deetsLink = 'details.php?deets=' . serialize($sample4[$x]);
					echo "<a href='$deetsLink'>Details</a>";
					echo 
				"</td>"
			. "</tr>"; 
		} 
		?>

				</tbody>
			</table>
		</div> <!-- NVA div close -->

				<!-- CCS PHP Data Grab -->
		<?php
		$sample5 =  array(
			array("Policy" => "35125",
							"Policy Name" => "Tools host",
							"Policy Type" => "Ubuntu",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			array("Policy" => "16831",
							"Policy Name" => "FAIL - Php",
							"Policy Type" => "Linux",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			array("Policy" => "19599",
							"Policy Name" => "Critical Error - Ocaml",
							"Policy Type" => "WINDOWS",
							"Severity" => "Low",
							"Remediation Owner" => "Hygiene",
							"Resolution Owner" => "Infrastructure Owned"),
			);
		?>

		<div role="tabpanel" class="tab-pane" id="CCS">
			<h2>Selected Table</h2>
			<p>The .table-striped class adds zebra-stripes to a table:</p>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Policy ID</th>
						<th>Policy Name</th>
						<th>Policy Type</th>
						<th>Severity</th>
						<th>Details</th>
					</tr>
				</thead>
				<tbody>

		<?php
		for($x = 0; $x <3; $x++){
			echo '<tr>'
				. "<td>"
					. $sample5[$x]["Policy"]
				. "</td>"
				. "<td>"
					. $sample5[$x]["Policy Name"]
				. "</td>"
				. "<td>"
					. $sample5[$x]["Policy Type"]
				. "</td>"
				. "<td>"
					. $sample5[$x]["Severity"]
				. "</td>"
				."<td>";
					$deetsLink = 'details.php?deets=' . serialize($sample5[$x]);
					echo "<a href='$deetsLink'>Details</a>";
					echo 
				"</td>"
			. "</tr>"; 
		} 
		?>

				</tbody>
			</table>
		</div> <!-- CCS div close -->

	</div> <!-- Tab Panes div close -->
</div> <!-- Page Div Close -->


<script>

</script>

</body>
</html>





