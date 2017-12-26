<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo '<a href="'.getURLPrefix($language).'servicesjobs">'; ?> <?php echo $typename; ?></a> / <small><?php if($service['id']>=0) echo "Update"; else echo "New";?></small> </h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form action="<?php echo getURLPrefix($language).$service['type']; ?>/servicedatasubmit" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <input name="id" type="text" value="<?php echo $service['id']; ?>" style="visibility:hidden">
              <input name="type" type="text" value="<?php echo $service['type']; ?>" style="visibility:hidden">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="service-name"> Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="name" type="text" id="service-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($service['name'])) echo $service['name']; ?>">
                </div>
              </div>
              <!-- <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="service-type"> Type <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="type" class="select2_single form-control" required="required" tabindex="-1">
                    <?php
                      if (isset($service['type'])) {
                        echo '<option></option>';
                      } else {
                        echo '<option selected></option>';
                      }
                      foreach($servicetypes as $servicetype):
                        if (strcasecmp($servicetype, $service['type']) == 0)
                          echo '<option selected value="'.$servicetype.'">'.$servicetype.'</option>';
                        else
                          echo '<option value="'.$servicetype.'">'.$servicetype.'</option>';
                      endforeach;
                    ?>
                  </select>
                </div>
              </div> -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="service-contact">Contact <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="contact" type="text" id="service-contact" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($service['contact'])) echo $service['contact']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="service-link">Link <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="link" type="text" id="service-link" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($service['link'])) echo $service['link']; ?>">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <a class="btn btn-primary" type="button" href="<?php echo getURLPrefix($language); ?>servicesjobs">Cancel</a>
		              <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>