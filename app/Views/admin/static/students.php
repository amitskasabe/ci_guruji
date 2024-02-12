<?php include 'components/header.php' ?>
<div class="main">
	<?php $firstname = "amit"; ?>
	<?php include 'components/topnav.php' ?>

	<main class="content">
		<div class="container-fluid p-0">

			<h1 class="h3 mb-3"><strong>All Students</strong> Dashboard</h1>

			<div class="row">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered" id="studentDetails">
							<thead>
								<tr>
									<th scope="col">Sr</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
									<th scope="col">Email</th>
									<th scope="col">Phone</th>
									<th scope="col">City</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($students as $student){
									?>
									<tr>
										<td><?= $student['id'] ?></td>
										<td><?= $student['firstname'] ?></td>
										<td><?= $student['lastname'] ?></td>
										<td><?= $student['username'] ?></td>
										<td><?= $student['email'] ?></td>
										<td><?= 
										
										$student['phone'] == null ? " Not Updated" : $student['phone'];
										
										?></td>
										<td><?= $student['city'] == null ? " Not Updated " : $student['city']; ?></td>
										
									</tr>
									<?php 
								} ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>
	</main>
</div>
<?php include 'components/footer.php' ?>