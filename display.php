<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
	
}
/*.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);

	min-width: 1000px;
		width:auto;
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}*/
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 48px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 100%;
}
table.table tr th:last-child {
	width: 100%;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    

.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
 
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Customer <b>Data</b></h2>
					</div>
					
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
					
						<th>Name</th>
						<th>consignment</th>
						<th>Move From</th>
						<th>Move From</th>
						
                        <th>Mobile</th>
												<th>update/delete</th>
						
					</tr>
				</thead>
				<tbody>

                <?php
$db=mysqli_connect('localhost','root','','parsuram');

$sql = "SELECT * FROM data ";
$query = mysqli_query($db, $sql);

while($result = mysqli_fetch_assoc($query)){

	 
?>


					<tr>
                    <td><?php echo $result['name'];?></td>	
					<td><?php echo $result['consignment'];?></td>
		<td><?php echo $result['move_from'];?></td>
		<td><?php echo $result['move_to']; ?></td>

<td><?php echo $result['mobile']; ?></td>
		

			
<!--<td><a href="update.php" class="edit"  > <i class="material-icons" 
                   data-toggle="tooltip" title="Edit">&#xE254;</i></a>  
<a href="delete.php?id=<?php echo $result['id'];?>" class="delete">
    <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>	</td>-->
                    
    
                    
                   
                   
					</tr>
	<?php
	
}?>
						 
				</tbody>
			</table>
			
	</div>        
</div>
<!-- Edit Modal HTML -->
<!--<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="demodata.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label for="first name">FIRST NAME:</label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter Your First name" >
					</div>
					<div class="form-group">
						<label for="last name">LAST NAME:</label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter Your Last name" required>
					</div>
					<div class="form-group">
						<label for="last name">DATE OF BIRTH:</label>
            <input type="date" name="dob"class="form-control" placeholder="DD/MM/YYYY" required>
					</div>
					<div class="form-group">
						<label for="gender">GENDER:</label>
            <select name="gender" id="gender" class="form-control">
              <option value="male">Male</option>
              <option value="female">Female</option>

            </select>
					</div>	
						

					<div class="form-group">
						
						<label for="email">Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Enter Your email" required>
					</div>
					

					<div class="form-group">
						<label for="last name">Mobile Number:</label>
            <input type="text" name="mobile" class="form-control" placeholder="Enter Your mobile number" required>
					</div>

					<div class="form-group">
						<label for="dealership">DEALERSHIP:</label>
            <select name="dealer" class="form-control" id="dealer" > 
              
              <option value="bharat Gas">Bharat Gas</option>
              
              <option value="HP gas">HP Gas</option>
              <option value="INDANE GAS">Indane Gas</option>
              
            </select>

					</div>

					<div class="form-group">
						<label for="iamount">INVESTMENT AMOUNT:</label>
            <select name="invest" id="iamount" class="form-control">
              <option value="AMOUNT">Select Amount</option>
              <option value="5-10">5-10(Lakh)</option>
              <option value="10-15">10-15(Lakh)</option>
              <option value="15-20">15-20(Lakh)</option>
              <option value="20-40">20-40(Lakh)</option>
              <option value="40-60">40-60(Lakh)</option>

            </select>
					</div>

					<div class="form-group">
						<label for="last name">HOUSE NO, APARTMENT:</label>
            <input type="text" name="house"class="form-control" placeholder="Enter Your House No." required>
					</div>

					<div class="form-group">
						<label for="last name">STREET ADDRESS:</label>
            <input type="text" name="street" class="form-control" placeholder="Enter Your Address" required>
					</div>

					<div class="form-group">
						<label for="last name">CITY:</label>
            <input type="text" class="form-control" name="city" placeholder="Enter Your City Name" required>
					</div>

					<div class="form-group">
						 <label for="last name">STATE:</label>
            <input type="text" class="form-control" name="state" placeholder="Enter Your State" required>
					</div>

					<div class="form-group">
						<label for="last name">COUNTRY:</label>
            <section class="form-control" id="country" name="count">
              <option value="">India</option>
            </section>
					</div>

					<div class="form-group">
						 <label for="last name">PIN CODE:</label>
            <input type="text" class="form-control" placeholder="Enter Your Pin Code" name="pincode" required>
					</div>


				
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" name="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>


<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="delete.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
				<input type="text" name="mobile" required class="search-box" placeholder="ENTER MOBILE NUMBER TO DELETE" />
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" name="delete"value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>-->


