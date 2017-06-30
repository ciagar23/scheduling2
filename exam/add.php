<?php
$success = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '';
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
$query = mysql_fetch_array(mysql_query('select * from settings'));
extract($query);
?>


<div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Create an exam schedule request</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			
<?php
include 'import.php';
?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
					<?php if ($success !=""){?>
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<?=$success;?>
					</div>
					<?php }?>
					
					
					<?php if ($error !=""){?>
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<?=$error;?>
					</div>
					<?php }?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill in the forms completely
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="process.php?action=create" method="POST">
									
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Subject</span>
											<select  name="subject_code" class="form-control" required>
													<?=buildSubjectOptions();?>
											</select>
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Date</span>
                                            <input type="date" name="date" class="form-control" placeholder="Type User's ID number" required>
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Time</span>
												<select  name="time" class="form-control" required>
														<option value="730">7:30 AM-9:30 AM</option>
														<option value="10">10:00 AM-12:00 NN </option>
														<option value="1">1:00 PM-3:00 PM</opton>
														<option value="330">3:30 PM-5:30 PM</option>
														<option value="6">6:00 PM-8:00 PM</option>
												</select>
                                        </div>
										
										<div class="form-group">
											<label>Room</label>
											<select  name="room" class="form-control" required>
													<?=buildRoomOptions();?>
											</select>
										</div>
                                       
										<div class="form-group">
											<label>Proctor</label>
											<select  name="proctor" class="form-control" required>
													<?=buildProctorOptions();?>
											</select>
											
											<input type="hidden" name="password" value="temppassword">
										</div>
                                       
										<div class="form-group">
											<label>Mentor</label>
											<select  name="mentor" class="form-control" required>
													<?=buildMentorOptions();?>
											</select>
											
											<input type="hidden" name="password" value="temppassword">
										</div>
                                       
										<div class="form-group">
										
											<div class="col-xs-3">
											
												<label>Course</label>
												<select  name="course" class="form-control" required>
														<option>BSBA</option>
														<option>BSIT</option>
														<option>BSHM</option>
														<option>BSTM</option>
												</select>
											</div>
											
										
											<div class="col-xs-3">
											
												<label>Year</label>
												<select  name="year" class="form-control" required>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
												</select>
											</div>
											
										
											<div class="col-xs-3">
											
												<label>Section</label>
												<select  name="section" class="form-control" required>
														<option>A</option>
														<option>B</option>
														<option>C</option>
														<option>D</option>
												</select>
											</div>
											
										</div>
										
										<br>
										<br>
										<br>
										<br>
										
										
											<p class="help-block">To change School Year, Semester and Term, go to <b><a href="../settings">Settings</a></b></p>
											
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">School Year</span>
                                            <input type="text" value="<?=$sy;?>" name="sy" class="form-control" placeholder="" required readonly style="background:white;">
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Semester</span>
                                            <input type="text" value="<?=$sem;?>" name="sem" class="form-control" placeholder="" required readonly style="background:white;">
											
                                        </div>
										
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Term</span>
                                            <input type="text" value="<?=$term;?>" name="term" class="form-control" placeholder="" required readonly style="background:white;">
											
                                        </div>
										
											
										<div class="form-group col-xs-12">
											<button type="submit" class="btn btn-primary">Submit Request</button>
										</div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>