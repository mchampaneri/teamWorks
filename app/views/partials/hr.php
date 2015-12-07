



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
						<form name="userForm">
							<label>Name</label>
							<input type="text" name="name" ng-model="user.name">							
							<label>Email</label>
							<input type="text" name="email" ng-model"user.email">

							<label>Password</label>
							<input type="password" name="password" ng-model="user.password">

							<label>Privilage</label>
							<select name="level">
								<option value="1">1</option><!-- For HR User -->
								<option value="2">2</option><!-- For Project Privilage -->
								<option value="3">3</option><!-- For Member User -->
								<option value="4">4</option><!-- For Visitor User -->
							</select>

							<input  type="button" 
									value="Add user" 
									class="btn btn-default btn-default-small"
									ng-click="addUser(user)">
							   	
						</form>
					</div>

					<div class="box-footer">
						Add new user with privilage
					</div>
				</div>

					
			</div>

	</div>
	</div>
