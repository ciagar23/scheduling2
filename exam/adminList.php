<?php
$query = mysql_query("select * from exam");

$success = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '';
?>

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Exam Schedule</h1>
                </div>
                <!-- /.col-lg-12 -->
</div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Requested exam schedule status.
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Mentor</th>
                                        <th>Proctor</th>
                                        <th>Date and Time</th>
                                        <th>Room</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								while($row=mysql_fetch_array($query)){
									extract($row);
								?>
                                    <tr class="odd gradeX <?=conflict($Id)?>">
                                        <td><?=$subject_code;?></td>
                                        <td><?=fullname($mentor);?></td>
                                        <td><?=fullname($proctor);?></td>
                                        <td><?=$date;?></br><?=date("h:i A", strtotime($time_from));?>-<?=date("h:i A", strtotime($time_to));?></td>
                                        <td><?=$room;?></td>
                                        <td><?=$course;?></td>
                                        <td><?=approve_status($Id);?>
											<?php
											if ($is_approved!=1){
												?>
												<button class="btn btn-primary btn-circle" onClick="location.href='index.php?view=update&id=<?=$Id?>'"><i class="fa fa-edit"></i></button>
												<?php
											}
											?>
										</td>
                                    </tr>
								<?php
								}
								?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
