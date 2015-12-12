<div class="content-header">
	 Hello,  <?php echo Auth::user()->name; ?>
</div>

<div class="content" >
	
		<div ng-controller="ProjectController">
			<div class="row">
				<div class="col-md-2">
						<a  class="form-control btn-info clickable"  onclick="disp('#newProject')"> New Project</a>
				</div>
				<div class="col-md-2">		
						<a  class="form-control btn-info clickable "  onclick="disp('#currentProject')"> Current </a>			
				</div>
				<div class="col-md-2">
						<a  class="form-control btn-info clickable "  onclick="disp('#oldProjects')" ng-click="oldProjects()"> Old Projects </a>			
				</div>
			</div>

			<div class="row">
			<div class="col-md-12">

					<!-- 	Current Project Form -->
				
					<div class="box box-primary hideable" id="newProject">
						
						<div class="box-title clickable" >
							Create A New Project
						</div>

						<div class="box-body">
							<form name="newProjectForm"  novalidate>
								<label>Project Name</label>
								<input type="text" name="project_name" ng-model="project.project_name" required>
								<label>Description</label>
								<textarea name="description" class="form-control" ng-model="project.description" required>					
								</textarea>
								<label>Cliant Name</label>
								<input type="text" name="client" ng-model="project.client" required>
								<input type="button" value="Generate Space" ng-click="addProject(project)" class="btn btn-default" ng-disabled="newProjectForm.$invalid"> 
							</form>
						</div>
					
						<div class="box-footer">
							Best of Luck
				
						</div>
					</div>

					<!-- Step 2 In the New Project team building  -->
						<div class="box box-primary hideable" id="newProject">
							
							<div class="box-title clickable" >
								Select Memebers
							</div>

							<div class="box-body">
								<table  class=" table table-hover">
								<thead>
									<th>Person Name</th>
									<th>Skills</th>									
									<th>Last Work On</th>
									<th>Recruit</th>
								</thead>
								<tbody ng-repeat="member in members">
									<tr>
									<td>{{member.project_name}}</td>
									<td>{{member.client }}</td>
									<td>{{member.created_at | date:'medium'}}</td>
									<td>{{member.updated_at | date:'medium'}}</td>							
									</tr>
								</tbody>
							</table>	
							</div>
						
							<div class="box-footer">								
									List Of Available Memebers
							</div>
						</div>

					<!-- 	Old Project With Summary Plug ins  -->
					
					<div class="box box-primary hideable" id="oldProjects">
					
						<div class="box-title clickable" >
							Old Project ( Completed )
						</div>

						<div class="box-body">				
							<table  class=" table table-hover">
								<thead>
									<th>Project Name</th>
									<th>Client</th>
									<th>Start Date</th>
									<th>Last Work On</th>
									<th>Summary</th>
								</thead>
								<tbody ng-repeat="project in projects">
									<tr>
									<td>{{project.project_name}}</td>
									<td>{{project.client }}</td>
									<td>{{project.created_at | date:'medium'}}</td>
									<td>{{project.updated_at | date:'medium'}}</td>							
									</tr>
								</tbody>
							</table>				
						</div>
				
						<div class="box-footer">
							Past
						</div>
				
					</div>

					<!-- End oF The old Projects -->
			</div>
		</div>

		<div>
			<!-- 	Employee Settings Form -->
			<div class="col-md-12">
				<div class="box box-primary hideable" id="settings">
					<div class="box-title clickable" >
						My Settings
					</div>

					<div class="box-body">
						<form name="Settings" novalidate>
							
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

