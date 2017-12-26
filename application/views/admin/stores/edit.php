<?php
$urlprefix = getURLPrefix($language).$storetype;
?>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>
        <?php 
          echo '<a href="'.$urlprefix.'">'; echo $typename; ?>s </a> / <small><?php if($store['id']>=0) echo "Update"; else echo "New";?></small> 
        </h3>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form action="<?php echo $urlprefix; ?>/storedatasubmit" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="col-md-12 col-sm-12 cols-xs-12">
                <div class="fileinput fileinput-new" data-provides="fileinput" style="width: 100%; height: 200px;">
                  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height: 100%;">
                    <?php
                    if (isset($store['coverphoto_filename'])) {
                      echo '<img style="width:100%" src="'.$this->config->item('download_prefix_store_coverphoto').$store['coverphoto_filename'].'"/>';
                    } else {
                      echo '<h4>Upload Cover Photo</h4>';
                    }
                    ?>
                  </div>
                  <div style="visibility: hidden">
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="coverphoto_imagename"></span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>  
              </div>

              <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                <div class="fileinput fileinput-new" data-provides="fileinput" style="width: 200px; height: 200px;">
                  <div class="fileinput-preview thumbnail logo" data-trigger="fileinput" style="width: 100%; height: 100%;">
                    <?php
                    if (isset($store['imagename'])) {
                      echo '<img style="width:100%" src="'.$this->config->item('download_prefix_store').$store['imagename'].'"/>';
                    } else {
                      echo '<h4>Upload '.$typename.' Logo</h4>';
                    }
                    ?>
                  </div>
                  <div style="visibility: hidden">
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input name="storeimagefile" type="file"></span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>
                <?php if (isset($store['featured']) && strcmp($store['featured'], "1")==0) { ?>
                  <img id="featuredimg" style="width:100%" src="<?php echo base_url(); ?>assets/img/featured.png" />
                <?php } else { ?>
                  <img id="featuredimg" style="width:100%;visibility:hidden" src="<?php echo base_url(); ?>assets/img/featured.png" />
                <?php } ?>
              </div>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input name="id" type="text" value="<?php echo $store['id']; ?>" style="visibility:hidden">
                    <input name="imagename" type="text" value="<?php if(isset($store['imagename'])) echo $store['imagename']; ?>" style="visibility:hidden">
                    <input name="coverphoto_filename" type="text" value="<?php if(isset($store['coverphoto_filename'])) echo $store['coverphoto_filename']; ?>" style="visibility:hidden">
                    <input id="featuredhiddenvalue" name="featured" type="text" value="<?php if(isset($store['featured'])) echo $store['featured']; ?>" style="visibility:hidden">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="restaurant-name">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="name" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($store['name'])) echo $store['name']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Mall<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="mallname" class="select2_single form-control" required="required" tabindex="-1">
                          <?php
                            if (isset($store['mallname'])) {
                              echo '<option></option>';
                            } else {
                              echo '<option selected></option>';
                            }
                            foreach($malls as $mall):
                              if (strcmp($mall, $store['mallname']) == 0)
                                echo '<option selected value="'.$mall.'">'.$mall.'</option>';
                              else
                                echo '<option value="'.$mall.'">'.$mall.'</option>';
                            endforeach;
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Metro<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="metroname" class="select2_single form-control" required="required" tabindex="-1">
                          <?php
                            if (isset($store['metroname'])) {
                              echo '<option></option>';
                            } else {
                              echo '<option selected></option>';
                            }
                            foreach($metros as $metro):
                              if (strcmp($metro, $store['metroname']) == 0)
                                echo '<option selected value="'.$metro.'">'.$metro.'</option>';
                              else
                                echo '<option value="'.$metro.'">'.$metro.'</option>';
                            endforeach;
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">About Us <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="aboutus" class="form-control" rows="10" placeholder='About Us'><?php if(isset($store['aboutus'])) echo $store['aboutus']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Contact <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="contact" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($store['contact'])) echo $store['contact']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Facebook <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="facebook" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($store['facebook'])) echo $store['facebook']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Link <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="link" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($store['link'])) echo $store['link']; ?>">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class="btn btn-primary" type="button" href="<?php echo $urlprefix; ?>">Cancel</a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button id='featurebtn' class="btn btn-danger" type="button" onclick="onfeatureclicked()">
                        <?php if(isset($store['featured']) && strcmp($store['featured'], "1")==0) echo 'DisEmphasize'; 
                        else echo 'Feature'; 
                        ?>
                        </button>
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
<script>
function onfeatureclicked() {
  var element = document.getElementById("featurebtn")
  if (element.innerHTML.localeCompare("Feature") == 0) {
    element.innerHTML = "DisEmphasize";
    document.getElementById("featuredhiddenvalue").value = "1";
    document.getElementById("featuredimg").style = "width:100%;";
  } else {
    element.innerHTML = "Feature";
    document.getElementById("featuredhiddenvalue").value = "0";
    document.getElementById("featuredimg").style = "width:100%;visibility:hidden";
  }
}
</script>