<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo '<a href="'.getURLPrefix($language).'metros">'; ?> Metros</a> / <small><?php if($metro['id']>=0) echo "Update"; else echo "New";?></small> </h3>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form action="<?php echo getURLPrefix($language); ?>metros/metrodatasubmit" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <input name="id" type="text" value="<?php echo $metro['id']; ?>" style="visibility:hidden">
              <input name="type" type="text" value="metro" style="visibility:hidden">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="metro-name">Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="name" type="text" id="metro-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($metro['name'])) echo $metro['name']; ?>">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <a class="btn btn-primary" type="button" href="<?php echo getURLPrefix($language); ?>metros">Cancel</a>
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