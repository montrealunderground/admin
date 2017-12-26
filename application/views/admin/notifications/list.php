<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Promotions<small></small></h3>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form action="<?php echo getURLPrefix($language); ?>notifications/sendnotification" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Notification Count : </label>
                      <div class="col-md-1 col-sm-1 col-xs-1">
                        <label class="control-label col-md-1 col-sm-1 col-xs-11"> <?php echo $devicecount; ?> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job-title">Notification : </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="message" type="text" id="job-title" required="required" class="form-control col-md-7 col-xs-12" value="">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button class="btn btn-success" type="submit">Send to All Devices</button>
                        <!-- <input type="submit" class="btn btn-success" text="Send to All Devices"> -->
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
  function onyesclicked() {

  }
</script>