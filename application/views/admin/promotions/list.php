<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Promotions<small></small></h3>
      </div>
    </div>

    <div class="clearfix"></div>
      <div class="row">
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th><a href="<?php echo getURLPrefix($language); ?>promotions/new" type="submit" class="btn btn-success" style="margin-top:15px">+ Add New</a></th>
                </tr>
                <tr>
                  <th>No</th>
                  <th>Mall Name</th>
                  <th>Store Name</th>
                  <th>Amount</th>
                  <th>AR Description</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Description</th>
                  <th>Contact</th>
                  <th>Link</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $index = 1;
                  foreach($promotions as $promotion):
                    echo '<tr>';
                    echo '  <td>'.$index.'</td>';
                    echo '  <td>'.$promotion['mallname'].'</td>';
                    echo '  <td>'.$promotion['storename'].'</td>';
                    echo '  <td>'.$promotion['amount'].'</td>';
                    echo '  <td>'.$promotion['period'].'</td>';
                    echo '  <td>'.$promotion['latitude'].'</td>';
                    echo '  <td>'.$promotion['longitude'].'</td>';
                    echo '  <td>'.$promotion['description'].'</td>';
                    echo '  <td>'.$promotion['contact'].'</td>';
                    echo '  <td><a href ="'.$promotion['link'].'">'.$promotion['link'].'</a></td>';
                    echo '  <td>';
                    echo '    <a href="'.getURLPrefix($language).'promotions/'.$promotion['id'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>';
                    echo '    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_dlg" onclick="deleteclicked('.$promotion['id'].')"><i class="fa fa-trash-o"></i> Delete </a>';
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
                    <p>Do you really want to remove this promotion?</p>
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
    location.href = "<?php echo getURLPrefix($language); ?>promotions/deletepromotion/"+currentid
  }
</script>
