<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Services & Jobs<small></small></h3>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="x_content">
        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel">
            <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h4 class="panel-title">Jobs</h4>
            </a>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th><a href="<?php echo getURLPrefix($language); ?>jobs/new" type="submit" class="btn btn-success" style="margin-top:15px">+ Add New</a></th>
                    </tr>
                    <tr>
                      <th>No</th>
                      <th>Job Title</th>
                      <th>Company</th>
                      <th>Type</th>
                      <th>Description</th>
                      <th>Contact</th>
                      <th>Link</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $index = 1;
                      foreach($jobs as $job):
                        echo '<tr>';
                        echo '  <td>'.$index.'</td>';
                        echo '  <td>'.$job['title'].'</td>';
                        echo '  <td>'.$job['company'].'</td>';
                        echo '  <td>'.$job['type'].'</td>';
                        echo '  <td>'.$job['description'].'</td>';
                        echo '  <td>'.$job['contact'].'</td>';
                        echo '  <td><a href ="'.$job['link'].'">'.$job['link'].'</a></td>';
                        echo '  <td>';
                        echo '    <a href="'.getURLPrefix($language).'jobs/'.$job['id'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>';
                        echo '    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_dlg1" onclick="jobdeleteclicked('.$job['id'].')"><i class="fa fa-trash-o"></i> Delete </a>';
                        echo '  </td>';
                        echo '</tr>';
                        $index = $index+1;
                      endforeach;
                    ?>
                  </tbody>
                </table>
                <!-- Modal -->
                <div id="delete_dlg1" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Alert</h4>
                      </div>
                      <div class="modal-body">
                        <p>Do you really want to remove this job?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="onjobyesclicked()">Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- Modal -->
              </div>
            </div>
          </div>
          <div class="panel">
            <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h4 class="panel-title">Parking</h4>
            </a>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th><a href="<?php echo getURLPrefix($language); ?>parking/new" type="submit" class="btn btn-success" style="margin-top:15px">+ Add New</a></th>
                    </tr>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Link</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $index = 1;
                      foreach($parkings as $parking):
                        echo '<tr>';
                        echo '<td>'.$index.'</td>';
                        echo '  <td>'.$parking['name'].'</td>';
                        echo '  <td>'.$parking['contact'].'</td>';
                        echo '  <td><a href ="'.$parking['link'].'">'.$parking['link'].'</a></td>';
                        echo '  <td>';
                        echo '    <a href="'.getURLPrefix($language).'parking/'.$parking['id'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>';
                        echo '    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_dlg" onclick="servicedeleteclicked('.$parking['id'].',\'parking\')"><i class="fa fa-trash-o"></i> Delete </a>';
                        echo '  </td>';
                        echo '</tr>';
                        $index = $index+1;
                      endforeach;
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="panel">
            <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h4 class="panel-title">Free Wi-Fi</h4>
            </a>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th><a href="<?php echo getURLPrefix($language); ?>freewifi/new" type="submit" class="btn btn-success" style="margin-top:15px">+ Add New</a></th>
                    </tr>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Link</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $index = 1;
                      foreach($freewifis as $freewifi):
                        echo '<tr>';
                        echo '<td>'.$index.'</td>';
                        echo '  <td>'.$freewifi['name'].'</td>';
                        echo '  <td>'.$freewifi['contact'].'</td>';
                        echo '  <td><a href ="'.$freewifi['link'].'">'.$freewifi['link'].'</a></td>';
                        echo '  <td>';
                        echo '    <a href="'.getURLPrefix($language).'freewifi/'.$freewifi['id'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>';
                        echo '    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_dlg" onclick="servicedeleteclicked('.$freewifi['id'].',\'freewifi\')"><i class="fa fa-trash-o"></i> Delete </a>';
                        echo '  </td>';
                        echo '</tr>';
                        $index = $index+1;
                      endforeach;
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="panel">
            <a class="panel-heading collapsed" role="tab" id="headingFour" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <h4 class="panel-title">Daily Lockers</h4>
            </a>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th><a href="<?php echo getURLPrefix($language); ?>dailylockers/new" type="submit" class="btn btn-success" style="margin-top:15px">+ Add New</a></th>
                    </tr>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Link</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $index = 1;
                      foreach($dailylockers as $dailylocker):
                        echo '<tr>';
                        echo '<td>'.$index.'</td>';
                        echo '  <td>'.$dailylocker['name'].'</td>';
                        echo '  <td>'.$dailylocker['contact'].'</td>';
                        echo '  <td><a href ="'.$dailylocker['link'].'">'.$dailylocker['link'].'</a></td>';
                        echo '  <td>';
                        echo '    <a href="'.getURLPrefix($language).'dailylockers/'.$dailylocker['id'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>';
                        echo '    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_dlg" onclick="servicedeleteclicked('.$dailylocker['id'].',\'dailylockers\')"><i class="fa fa-trash-o"></i> Delete </a>';
                        echo '  </td>';
                        echo '</tr>';
                        $index = $index+1;
                      endforeach;
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div id="delete_dlg" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Alert</h4>
                </div>
                <div class="modal-body">
                  <p>Do you really want to remove this item?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal" onclick="onserviceyesclicked()">Yes</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
              </div>

            </div>
          </div>
          <!-- Modal -->
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var currentjobid, currentserviceid, currentservicetype

  function jobdeleteclicked(id) {
    currentjobid = id
  }
  function onjobyesclicked() {
    location.href = "<?php echo getURLPrefix($language); ?>jobs/deletejob/"+currentjobid
  }

  function servicedeleteclicked(id, type) {
    currentserviceid = id
    console.log(type)
    currentservicetype = type
  }
  function onserviceyesclicked() {
    location.href = "<?php echo getURLPrefix($language); ?>"+currentservicetype+"/deleteservice/"+currentserviceid
  }
</script>