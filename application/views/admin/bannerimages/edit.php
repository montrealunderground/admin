<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo '<a href="'.getURLPrefix($language).'bannerimages">'; ?> Banner Images</a> / <small><?php if($bannerimage['id']>=0) echo "Update"; else echo "New";?></small></h3>
      </div>
    </div>
    
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form action="<?php echo getURLPrefix($language); ?>bannerimages/bannerimagedatasubmit" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                <div class="fileinput fileinput-new" data-provides="fileinput" style="width: 300px; height: 300px;">
                  <div class="fileinput-preview thumbnail logo" data-trigger="fileinput" style="width: 100%; height: 100%;">
                    <?php
                    if (isset($bannerimage['imagename'])) {
                      echo '<img style="width:100%" src="'.$this->config->item('download_prefix_bannerimage').$bannerimage['imagename'].'"/>';
                    } else {
                      echo '<h4>Upload Banner Image Picture</h4>';
                    }
                    ?>
                  </div>
                  <div style="visibility: hidden">
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input name="bannerimagefile" type="file"></span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <br />
                    <input name="id" type="text" value="<?php echo $bannerimage['id']; ?>" style="visibility:hidden">
                    <input name="imagename" type="text" value="<?php if(isset($bannerimage['imagename'])) echo $bannerimage['imagename']; ?>" style="visibility:hidden">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bannerimage-name">Title <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="title" type="text" id="bannerimage-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($bannerimage['title'])) echo $bannerimage['title']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Link <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="link" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($bannerimage['link'])) echo $bannerimage['link']; ?>">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class="btn btn-primary" type="button" href="<?php echo getURLPrefix($language); ?>bannerimages">Cancel</a>
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