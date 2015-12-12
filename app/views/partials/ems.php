<div class="content-header">
	 Hello,  <?php echo Auth::user()->name; ?>
</div>

<div class="content" >
	<div  ng-controller="MemberController">
			<div class="row">
				<div>			
					<div class="col-md-2">
							<a  class="form-control btn-info clickable" onclick="disp('#unfilled')" ng-click="getUnfilled()">
								Unfilled Profiles
							</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
						<div class="box box-primary hideable" id="unfilled">
							<div class="box-title clickable">
								Unfilled Users List
							</div>
							<div class="box-body">
								<table class="table table-hover">
									<thead>
										<tr>
										<th>UserID</th>
										<th>Name</th>
										<th>Email</th>
										<th>Complete Profile </th>
										</tr>
									</thead>
									<tbody  ng-repeat="unfilled in unfilleds">
										<tr> 
										<td>{{ detail.id = unfilled.id }} {{ detail.index  =  unfilleds.indexOf(unfilled)}}</td>
										<td>{{ unfilled.name }}</td>
										<td>{{ unfilled.email}} </td>										
										<td>
												<form name="newProfileForm" novalidate>
													<label>Field</label>
													<input type="text" name="field" class="form-control" ng-model="detail.field">
													<label>Skills</label>
													<input type="text" name="skills" class="form-control" ng-model="detail.skills">
													<label>address</label>
													<textarea class="form-control" class="textarea" ng-model="detail.address" name="address">										
													</textarea>
													<label>Contact Number</label>
													<input type="text" name="contact_number" class="form-control" ng-model="detail.contact_number">
												</form>
										</td>

										<td>
												<input type="button" 
														class="btn btn-success" 
														value="Fill"
														ng-click="fillup(detail)">
										</td>
										</tr>
									</tbody>
								</table> 
							</div>
						</div>
				</div>
			</div>
		</div>

				
					
				
				


			


		<div>
			<!-- 	Employee Settings Form -->
			<div class="col-sm-9">
				<div class="box box-primary hideable" id="settings">
					<div class="box-title clickable" >
						My Settings
					</div>

					<div class="box-body">
						<form name="newProjectForm" novalidate>
							
						</form>
					</div>

					<div class="box-footer">
						Best of Luck
					</div>
				</div>
			</div>
		</div>
			
		<!-- End Of Every Functions Of The Manager -->
		
	</div>	
</div>

