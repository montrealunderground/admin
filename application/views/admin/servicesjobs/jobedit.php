<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo '<a href="'.getURLPrefix($language).'servicesjobs">'; ?> Services & Jobs</a> / <small><?php if($job['id']>=0) echo "Update"; else echo "New";?></small> </h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form action="<?php echo getURLPrefix($language); ?>jobs/jobdatasubmit" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <input name="id" type="text" value="<?php echo $job['id']; ?>" style="visibility:hidden">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Job title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="title" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($job['title'])) echo $job['title']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="company">Company <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="company" type="text" id="company" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($job['company'])) echo $job['company']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Type <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="type" class="select2_single form-control" required="required" tabindex="-1">
                    <?php
                      if (isset($job['type'])) {
                        echo '<option></option>';
                      } else {
                        echo '<option selected></option>';
                      }
                      foreach($jobtypes as $jobtype):
                        if (strcasecmp($jobtype, $job['type']) == 0)
                          echo '<option selected value="'.$jobtype.'">'.$jobtype.'</option>';
                        else
                          echo '<option value="'.$jobtype.'">'.$jobtype.'</option>';
                      endforeach;
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-description">Job Description <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea name="description" id="job-description" required="required" class="form-control col-md-7 col-xs-12" rows="5"><?php if(isset($job['description'])) echo $job['description']; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-contact">Contact <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="contact" type="text" id="job-contact" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($job['contact'])) echo $job['contact']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-link">Link <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="link" type="text" id="job-link" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($job['link'])) echo $job['link']; ?>">
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