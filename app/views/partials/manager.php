<div class="content-header">
	 Hello, Project Head
</div>

<div class="content" ng-controller="ProjectController">
	<div class="row">

		<div class="col-md-2">
			<input type="button" class="form-control btn-info" value="New Project" onclick="disp('#newProject')">
			<input type="button" class="form-control btn-info" value="Old Projects" onclick="disp('#oldProjects')">
			<input type="button" class="form-control btn-info" value="My Details" onclick="disp('#myDetails')">

		</div>
		
		<div class="col-sm-9">


			<!-- 	Current Project Form -->
		
			<div class="box box-primary" id="newProject">
				<div class="box-title expandable"  >
					Create A New Project
				</div>

				<div class="box-body">
					<form name="newProjectForm" ng-submit="addProject(project)"  novalidate>
						<label>Project Name</label>
						<input type="text",name="project_name" ng-model="project.project_name" required>
						<label>Description</label>
						<textarea name="description" class="form-control" ng-model="project.description" required>					
						</textarea>
						<label>Cliant Name</label>
						<input type="text",name="client" ng-model="project.client" required>
						<input type="submit" class="btn btn-default" ng-disabled="newProjectForm.$invalid"> 
					</form>
				</div>
				<div class="box-footer">
					Best of Luck
				</div>
			</div>

			<!-- 	New Project Form -->
		
			<div class="box box-primary" id="myDetails">
				<div class="box-title expandable" >
					Create A New Project
				</div>

				<div class="box-body">
					<form name="newProjectForm" ng-submit="addProject(project)"  novalidate>
						<label>Project Name</label>
						<input type="text",name="project_name" ng-model="project.project_name" required>
						<label>Description</label>
						<textarea name="description" class="form-control" ng-model="project.description" required>					
						</textarea>
						<label>Cliant Name</label>
						<input type="text",name="client" ng-model="project.client" required>
						<input type="submit" class="btn btn-default" ng-disabled="newProjectForm.$invalid"> 
					</form>
				</div>
				<div class="box-footer">
					Best of Luck
				</div>
			</div>

			<!-- New Project Pages Completes -->

					
			<!-- 	Old Project With Summary Plug ins  -->
			
			<div class="box box-primary" id="oldProjects">
				<div class="box-title expandable" >
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
					</table>
				</div>
				<div class="box-footer">
					Past
				</div>
			</div>

			<!-- End oF The old Projects -->

		<!-- End Of Every Functions Of The Manager -->
		
		</div>
	</div>
</div>

