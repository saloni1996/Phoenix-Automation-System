<html>
		<head>
			<title>Patient Application Form</title>

    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="css/util.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
		</head>

		<body>
			<div class="container">
				<h2>Prediction Of Mode Of Delivery</h2><br><br>
				<center><h4><strong>Enter Details of Patient:</strong></h4><br><br>
				<form action="save_details.php" method="post" class="form-horizontal" name="add_patient" role="form">
					<table class="table table-bordered">
						<tbody>
              <tr>
								<th> Subjective Sleep Quality(Very Bad-0 Bad-1 Good-2 Very good- 3) </th>
								<td><input type="text" name="SleepQuality" id="cell" maxlength="2" value="" required></td>
							</tr>

              <tr>
								<th>Sleep Duration(in hrs)</th>
								<td><input type="text" name="SleepDuration" id="cell" maxlength="4"  value="" required></td>
							</tr>
              <tr>
								<th>use of sleeping medication(Highly Useful-3, useful-2, not very useful-1, not useful at all- 0)</th>
								<td><input type="text" name="Medication" id="cell" maxlength="3" value="" required></td>
							</tr>
			   <tr>
								<th>daytime dysfunction </th>
								<td><input type="text" name="DaytimeDysfunction" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

						</tbody>
					</table>

          <button class="submit-btn">
            Diagnose
          </button>
				</form>
			</div>
		</body>
	</html>
