<?php
$urlprefix = getURLPrefix($language).$storetype;
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo $typename; ?> <small></small></h3>
      </div>
    </div>

    <div class="clearfix"></div>
      <div class="row">
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th><a href="<?php echo $urlprefix; ?>/new" type="submit" class="btn btn-success" style="margin-top:15px">+ Add New</a></th>
                </tr>
                <tr>
                  <th>No</th>
                  <th>Logo</th>
                  <th>Name</th>
                  <th>Mall</th>
                  <th>Metro</th>
                  <th>Contact</th>
                  <th>Facebook</th>
                  <th>Link</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $index = 1;
                  foreach($stores as $store):
                    echo '<tr>';
                    if(isset($store['featured']) && strcmp($store['featured'], "1")==0) {
                      echo '  <td><img src="'.base_url().'assets/img/featured_small.png'.'" alt="" style="width:50px;height:50px">'.$index.'</td>';
                    } else {
                      echo '  <td><img src="'.base_url().'assets/img/featured_small.png'.'" alt="" style="width:50px;height:50px;visibility:hidden">'.$index.'</td>';
                    }
                    echo '  <td><img src="'.$this->config->item('download_prefix_store').$store['imagename'].'" alt="" style="width:50px;height:50px"></td>';
                    echo '  <td>'.$store['name'].'</td>';
                    echo '  <td>'.$store['mallname'].'</td>';
                    echo '  <td>'.$store['metroname'].'</td>';
                    echo '  <td>'.$store['contact'].'</td>';
                    echo '  <td><a href="'.$store['facebook'].'">'.$store['facebook'].'</a></td>';
                    echo '  <td><a href="'.$store['link'].'">'.$store['link'].'</a></td>';
                    echo '  <td>';
                    echo '    <a href="'.$urlprefix.'/'.$store['id'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>';
                    echo '    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_dlg" onclick="deleteclicked('.$store['id'].')"><i class="fa fa-trash-o"></i> Delete </a>';
                    echo '  </td>';
                    echo '</tr>';
                    $index = $index + 1;
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
                    <p>Do you really want to remove this restaurant?</p>
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
    location.href = "<?php echo $urlprefix; ?>/deletestore/"+currentid
  }
</script>