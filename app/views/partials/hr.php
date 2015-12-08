



	<div class="content-header" >
		Hello , HR
	</div>
<div class="content" ng-controller="UserController">

	<div class="row">

			<!-- For Adding New Users -->
			<div class="col-md-4">			
				<div class="box box-primary ">
					<div class="box-title">
						NEW EMPLOYEE / MEMBER
					</div>
				
					<div class="box-body" >
						<form name="userForm" ng-submit="addUser(user)"  novalidate>
							<label>Email</label>
							<input type="text" name="user_name" ng-model="user.user_name" required>							
							<label>Name</label>
							<input type="text" name="name" ng-model="user.name" required>
							<label>Password</label>
							<input type="password" name="password" ng-model="user.password" required>
		
							<label>Privilage</label>
							<select name="privilage" ng-model="user.privilage" required>
								<option value="1">1</option><!-- For HR User -->
								<option value="2">2</option><!-- For Project Privilage -->
								<option value="3">3</option><!-- For Member User -->
								<option value="4">4</option><!-- For Visitor User -->
							</select>

							<input  type="submit" 
									value="Add user" 
									class="btn btn-default btn-default-small"
									ng-disabled="userForm.$invalid"
									>
							   	
						</form>
					</div>

					<div class="box-footer">
						Add new user with privilage
					</div>
				</div>
			<!---   Fetching The old Recoards of the users  -->
			</div>

			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-title">
						All Member /Emplyee List
					</div>	
					<div class="box-body">
					<table class="table table-hover">
					<!-- Table of The current User List -->	
								<thead>
									<tr>
										<td>Id</td>
										<td>Name</td>
										<td>Email</td>
										<td>Privilage</td>
									</tr>
								</thead>													
								<tbody ng-repeat="user in users">
									<tr>
									<td>{{ user.id}}</td>
									<td>{{ user.name }}</td>
									<td>{{ user.email }}</td>
									<td>{{ user.privilage }}</td>
									</tr>
								
								</tbody>
					</table>		
					</div>
				</div>
			</div>
					
			

	</div>
</div>
