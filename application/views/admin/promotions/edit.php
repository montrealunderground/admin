<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo '<a href="'.getURLPrefix($language).'promotions">'; ?> Promotions</a> / <small><?php if($promotion['id']>=0) echo "Update"; else echo "New";?></small></h3>
      </div>
    </div>
    
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form action="<?php echo getURLPrefix($language); ?>promotions/promotiondatasubmit" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                <div class="fileinput fileinput-new" data-provides="fileinput" style="width: 300px; height: 300px;">
                  <div class="fileinput-preview thumbnail logo" data-trigger="fileinput" style="width: 100%; height: 100%;">
                    <?php
                    if (isset($promotion['imagename'])) {
                      echo '<img style="width:100%" src="'.$this->config->item('download_prefix_promotion').$promotion['imagename'].'"/>';
                    } else {
                      echo '<h4>Upload Promotion Picture</h4>';
                    }
                    ?>
                  </div>
                  <div style="visibility: hidden">
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input name="promotionimagefile" type="file"></span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <br />
                    <input name="id" type="text" value="<?php echo $promotion['id']; ?>" style="visibility:hidden">
                    <input name="imagename" type="text" value="<?php if(isset($promotion['imagename'])) echo $promotion['imagename']; ?>" style="visibility:hidden">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mall-name">Mall Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="mallname" class="select2_single form-control" required="required" tabindex="-1">
                          <?php
                            if (isset($promotion['mallname'])) {
                              echo '<option></option>';
                            } else {
                              echo '<option selected></option>';
                            }
                            foreach($malls as $mall):
                              if (strcmp($mall, $promotion['mallname']) == 0)
                                echo '<option selected value="'.$mall.'">'.$mall.'</option>';
                              else
                                echo '<option value="'.$mall.'">'.$mall.'</option>';
                            endforeach;
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store-name">Store Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="storename" class="select2_single form-control" required="required" tabindex="-1">
                          <?php
                            if (isset($promotion['storename'])) {
                              echo '<option></option>';
                            } else {
                              echo '<option selected></option>';
                            }
                            foreach($stores as $store):
                              if (strcmp($store, $promotion['storename']) == 0)
                                echo '<option selected value="'.$store.'">'.$store.'</option>';
                              else
                                echo '<option value="'.$store.'">'.$store.'</option>';
                            endforeach;
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Amount <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="amount" type="text" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($promotion['amount'])) echo $promotion['amount']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">AR Description <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="period" type="text" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($promotion['period'])) echo $promotion['period']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Latitude <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="latitude" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($promotion['latitude'])) echo $promotion['latitude']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Longitude <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="longitude" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($promotion['longitude'])) echo $promotion['longitude']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Description <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="description" id="job-title" required="required" class="form-control col-md-7 col-xs-12" rows="5"><?php if(isset($promotion['description'])) echo $promotion['description']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Contact <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="contact" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($promotion['contact'])) echo $promotion['contact']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Link <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="link" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($promotion['link'])) echo $promotion['link']; ?>">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class="btn btn-primary" type="button" href="<?php echo getURLPrefix($language); ?>promotions">Cancel</a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <input type="submit" class="btn btn-success">
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
