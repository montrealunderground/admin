<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo '<a href="'.getURLPrefix($language).'events">'; ?> Events</a> / <small><?php if($event['id']>=0) echo "Update"; else echo "New";?></small></h3>
      </div>
    </div>
    
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form action="<?php echo getURLPrefix($language); ?>events/eventdatasubmit" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                <div class="fileinput fileinput-new" data-provides="fileinput" style="width: 300px; height: 300px;">
                  <div class="fileinput-preview thumbnail logo" data-trigger="fileinput" style="width: 100%; height: 100%;">
                    <?php
                    if (isset($event['imagename'])) {
                      echo '<img style="width:100%" src="'.$this->config->item('download_prefix_event').$event['imagename'].'"/>';
                    } else {
                      echo '<h4>Upload Event Picture</h4>';
                    }
                    ?>
                  </div>
                  <div style="visibility: hidden">
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input name="eventimagefile" type="file"></span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>
                <?php if (isset($event['expired']) && !$event['expired']) { ?>
                  <img id="expiredimg" style="width:100%;visibility:hidden" src="<?php echo base_url(); ?>assets/img/expired.png" />
                <?php } else { ?>
                  <img id="expiredimg" style="width:100%" src="<?php echo base_url(); ?>assets/img/expired.png" />
                <?php } ?>
              </div>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <br />
                    <input name="id" type="text" value="<?php echo $event['id']; ?>" style="visibility:hidden">
                    <input name="imagename" type="text" value="<?php if(isset($event['imagename'])) echo $event['imagename']; ?>" style="visibility:hidden">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="event-name">Title <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="title" type="text" id="event-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($event['title'])) echo $event['title']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Subtitle <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="subtitle" type="text" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($event['subtitle'])) echo $event['subtitle']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Type <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="type" type="text" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($event['type'])) echo $event['type']; ?>">
                      </div>
                    </div>
                    <!-- <?php if(isset($event['expiredate'])) echo $event['expiredate']; ?> -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Expire Date <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="input-prepend input-group">
                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                        <input type="text" name="expiredate" id="reservation-time" class="form-control" value="<?php if(isset($event['expiredate'])) echo $event['expiredate']; ?>" />
                      </div>
                    </div>

<div class="row">
  <div class="col-md-9 docs-buttons">
  <!-- Show the cropped image in modal -->
    <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.png">Download</a>
          </div>
        </div>
      </div>
    </div><!-- /.modal -->
  </div>
</div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Description <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="description" id="job-title" required="required" class="form-control col-md-7 col-xs-12" rows="5"><?php if(isset($event['description'])) echo $event['description']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Contact <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="contact" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($event['contact'])) echo $event['contact']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Link <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="link" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($event['link'])) echo $event['link']; ?>">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class="btn btn-primary" type="button" href="<?php echo getURLPrefix($language); ?>events">Cancel</a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>