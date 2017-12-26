<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Events<small></small></h3>
      </div>
    </div>

    <div class="clearfix"></div>
      <div class="row">
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th><a href="<?php echo getURLPrefix($language); ?>events/new" type="submit" class="btn btn-success" style="margin-top:15px">+ Add New</a></th>
                </tr>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Type</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Description</th>
                  <th>Contact</th>
                  <th>Link</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $index = 1;
                  foreach($events as $event):
                    echo '<tr>';
                    if($event['expired'] == false) {
                      echo '  <td><img src="'.base_url().'assets/img/expired_small.png'.'" alt="" style="width:50px;height:50px;visibility:hidden">'.$index.'</td>';
                    } else {
                      echo '  <td><img src="'.base_url().'assets/img/expired_small.png'.'" alt="" style="width:50px;height:50px">'.$index.'</td>';
                    }
                    echo '  <td>'.$event['title'].'</td>';
                    echo '  <td>'.$event['subtitle'].'</td>';
                    echo '  <td>'.$event['type'].'</td>';
                    echo '  <td>'.$event['start_date'].'</td>';
                    echo '  <td>'.$event['end_date'].'</td>';
                    echo '  <td>'.$event['description'].'</td>';
                    echo '  <td>'.$event['contact'].'</td>';
                    echo '  <td><a href ="'.$event['link'].'">'.$event['link'].'</a></td>';
                    echo '  <td>';
                    echo '    <a href="'.getURLPrefix($language).'events/'.$event['id'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>';
                    echo '    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_dlg" onclick="deleteclicked('.$event['id'].')"><i class="fa fa-trash-o"></i> Delete </a>';
                    echo '  </td>';
                    echo '</tr>';
                    $index = $index+1;
                  endforeach;
                ?>
              </tbody>
            </table>
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
                    <p>Do you really want to remove this event?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="onyesclicked()">Yes</button>
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
</div>

<script>
  var currentid
  function deleteclicked(id) {
    currentid = id
  }
  function onyesclicked() {
    location.href = "<?php echo getURLPrefix($language); ?>events/deleteevent/"+currentid
  }
</script>