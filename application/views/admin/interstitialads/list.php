
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> <?php echo '<a href="'.getURLPrefix($language).'interstitialads">'; ?> Interstitial Ads </a> <small></small> </h3>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <form action="<?php echo getURLPrefix($language); ?>interstitialads/screendatasubmit" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
        <div class="caption" >
          <a class="btn btn-success" style="margin-top:15px" data-toggle="modal" data-target="#add_dlg">Add New</a>
          <button type="submit" class="btn btn-success" style="margin-top:15px">Save</button>
        </div>
        <div class="col-md-12">
          <div id="content">
            <?php
              echo '<input name="count" type="text" value="'.count($interstitialads).'" style="visibility:hidden;width:0px;height:0px">';
              $index = 0;
              foreach($interstitialads as $screen):
                echo '<input name="id'.$index.'" type="text" value="'.$screen['id'].'" style="visibility:hidden;width:0px;height:0px">';
                echo '<input name="screenname'.$index.'" type="text" value="'.$screen['screenname'].'" style="visibility:hidden;width:0px;height:0px"/>';
                echo '<div class="">';
                echo '  <label>';
                echo '  <a id="deleteicon" data-toggle="modal" data-target="#delete_dlg"><i class="fa fa-trash-o" onclick="ondeleteclicked(\''.$screen['id'].'\')"></i></a>';
                echo '  <span>        </span>';
                if($screen['value'])
                  echo $screen["screenname"].'  <input name="value'.$index.'" type="checkbox" class="js-switch" checked />';
                else
                  echo $screen["screenname"].'  <input name="value'.$index.'" type="checkbox" class="js-switch" />';
                echo '  </label>';
                echo '</div>';
                $index = $index + 1;
              endforeach;
            ?>
          </div>
          <div id="delete_dlg" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Alert</h4>
                </div>
                <div class="modal-body">
                  <p>Do you really want to remove this screen?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal" onclick="onyesclicked()">Yes</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br/>
      </form>
        <div id="add_dlg" class="modal fade bs-example-modal-lg" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Picture</h4>
              </div>
              <form action="<?php echo getURLPrefix($language); ?>interstitialads/new" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <div class="modal-body">
                  <input name="screenname" type="text" value="" placeholder="Screen Name" class="form-control ">
                  <br/>
                  Show Interstitial Ads : <input name="value" type="checkbox" class="js-switch" checked />
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-default">Save</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>
</div>


<script>
  var currentid
  function ondeleteclicked(id) {
    console.log(currentid)
    currentid = id
  }
  function onyesclicked() {
    location.href = "<?php echo getURLPrefix($language); ?>interstitialads/deletescreen/"+currentid
  }
</script>