<div class="content-header">
	 Hello,  <?php echo Auth::user()->name; ?>
</div>

<div class="content" >
	<div class="row">
		<div ng-controller="MemberController">
	
			<div class="col-md-2">
					<a  class="form-control btn-info clickable"  onclick="disp('#newMember')">
						Unfilled Profiles
					</a>
			</div>

			<div class="col-sm-9">

					<!-- Completeing the new user profile -->
					<div class="col-sm-9">
						<div class="box box-primary hideable" id="newMember">
							<div class="box-title clickable" >
								UnFilled User Profiles
							</div>
							<div class="box-body">
								<form name="newProfileForm" novalidate>
									<label>Field</label>
									<input type="text">
									<label>Skills</label>
									<input type="text">
									<label>address</label>
									<textarea class="form-control">										
									</textarea>
									<label>Contact Number</label>
									<input type="text">
								</form>
							</div>
							<div class="box-footer">
								Best of Luck
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

