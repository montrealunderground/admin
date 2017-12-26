<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo '<a href="'.getURLPrefix($language).'shopping_malls">'; ?> Shopping Malls</a> / <small><?php if($shopping_mall['id']>=0) echo "Update"; else echo "New";?></small></h3>
      </div>
    </div>
    
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <form action="<?php echo getURLPrefix($language); ?>shopping_malls/shoppingmalldatasubmit" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            <input name="id" type="text" value="<?php echo $shopping_mall['id']; ?>" style="width:0px;height:0px;visibility:hidden">
            <input name="coverphoto_imagename" type="text" value="<?php if(isset($shopping_mall['coverphoto_filename'])) echo $shopping_mall['coverphoto_filename']; ?>" style="visibility:hidden">
            <input name="logophoto_imagename" type="text" value="<?php if(isset($shopping_mall['logophoto_filename'])) echo $shopping_mall['logophoto_filename']; ?>" style="visibility:hidden">
            <div class="x_content">
              <div class="col-md-12 col-sm-12 cols-xs-12">
                <div class="fileinput fileinput-new" data-provides="fileinput" style="width: 100%; height: 200px;">
                  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height: 100%;">
                    <?php
                    if (isset($shopping_mall['coverphoto_filename'])) {
                      echo '<img style="width:100%" src="'.$this->config->item('download_prefix_coverphoto').$shopping_mall['coverphoto_filename'].'"/>';
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

              <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                <div class="fileinput fileinput-new" data-provides="fileinput" style="width: 100%; height: 60px;">
                  <div class="fileinput-preview thumbnail logo" data-trigger="fileinput" style="width: 100%; height: 100%;">
                  <?php
                    if (isset($shopping_mall['logophoto_filename'])) {
                      echo '<img style="width:100%" src="'.$this->config->item('download_prefix_logo').$shopping_mall['logophoto_filename'].'"/>';
                    } else {
                      echo '<h4>Upload Logo</h4>';
                    }
                    ?>
                  </div>
                  <div style="visibility: hidden">
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="logophoto_imagename"></span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>
                <h6>Name:</h6>
                <h3 id="h3shoppingmall_name"><?php if(isset($shopping_mall['name'])) echo $shopping_mall['name']; ?><a style="float:right" data-toggle="modal" data-target="#shoppingmall_named_dlg"><i class="fa fa-edit"></i></a></h3>
                <input name="name" id="inputshoppingmall_name" type="text" class="form-control input-lg" value="<?php if(isset($shopping_mall['name'])) echo $shopping_mall['name']; ?>" style="visibility:hidden">
                <!-- Modal -->
                <div id="shoppingmall_named_dlg" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit name of shopping mall.</h4>
                      </div>
                      <form>
                      <div class="modal-body">
                        
                          <div class="form-group">
                            <label for="shoppingmall-name" class="form-control-label">Name:</label>
                            <input type="text" class="form-control" id="dlgshoppingmall-name" value="<?php if(isset($shopping_mall['name'])) echo $shopping_mall['name']; ?>">
                          </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="onNameChanged()">Save</button>
                        <script>
                          function onNameChanged() {
                            var newname = document.getElementById("dlgshoppingmall-name").value;
                            document.getElementById("h3shoppingmall_name").innerHTML = newname+'<a style="float:right" data-toggle="modal" data-target="#shoppingmall_named_dlg"><i class="fa fa-edit"></i></a>';
                            document.getElementById("inputshoppingmall_name").value = newname;
                          }
                        </script>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                      </form>
                    </div>

                  </div>
                </div>
                <!-- End of Modal -->
              </div>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Info</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Working Hours</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Contact</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">About Us</a>
                    </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                      <div class="row">
                        <div id="infopanel">
                          <?php
                            $index = 0;
                            if (isset($shopping_mall['info'])) {
                              $info = json_decode($shopping_mall['info']);
                              if ( count($info) > 0 ) {
                                foreach($info as $key => $val):
                                  echo '<div id="info'.$index.'" class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">';
                                  echo '  <div class="tile-stats" style="height:110px">';
                                  echo '    <div class="row">';
                                  echo '      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">';
                                  //echo '        <div class="count"><label id="keylabel'.$index.'" style="text-align:center;width:100%">'.$key.'</label></div>';
                                  echo '        <h1 id="keylabel'.$index.'" style="text-align:center;width:100%">'.$key.'</h1>';
                                  echo '        <h3><label id="vallabel'.$index.'" style="text-align:center;width:100%">'.$val.'</label></h3>';
                                  // echo '        <p></p>';
                                  echo '      </div>';
                                  echo '      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">';
                                  echo '        <h2><a id="editicon'.$index.'" data-toggle="modal" data-target="#editinfo_dlg"><i class="fa fa-edit" onclick="onclicked(\''.$index.'\')"></i></a></h2>';
                                  echo '        <br/>';
                                  echo '        <h2><a id="deleteicon'.$index.'" data-toggle="modal" data-target="#delete_dlg"><i class="fa fa-trash-o"  onclick="ondeleteclicked(\''.$index.'\')"></i></a></h2>';
                                  echo '        <input name="key'.$index.'" id="keyinput'.$index.'" type="text" value="'.$key.'" style="width:0px;height:0px;visibility:hidden">';
                                  echo '        <input name="val'.$index.'" id="valinput'.$index.'" type="text" value="'.$val.'" style="width:0px;height:0px;visibility:hidden">';
                                  echo '      </div>';
                                  echo '    </div>';
                                  echo '  </div>';
                                  echo '</div>';
                                  $index=$index+1;
                                endforeach;
                              }
                            }
                          ?>
                        </div>
                        <script>
                          var prevkey="", prevval="", deleteindex=-1;
                          function onclicked(index) {
                            previndex = index
                            prevkey = document.getElementById("keylabel"+index).innerHTML
                            prevval = document.getElementById("vallabel"+index).innerHTML
                            document.getElementById("new-event-key").value = prevkey
                            document.getElementById("new-event-val").value = prevval
                          }
                          function ondeleteclicked(index) {
                            deleteindex = index
                          }
                        </script>
                        <!-- Add New Button -->
                        <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <div class="tile-stats" style="height:110px">
                            <div class="row">
                              <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                              <br/>
                                <div class="count"><label style="text-align:center;width:100%"><a data-toggle="modal" data-target="#editinfo_dlg"><i class="fa fa-plus" onclick="onnewclicked()"></i></a></label></div>
                                <p></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <input name="infocount" id="count" style="visibility: hidden;width:0px;height:0px" value ="<?php echo $index; ?>">
                        <script>
                          function onnewclicked() {
                            previndex = -1
                            prevkey = ""
                            prevval = ""
                            document.getElementById("new-event-key").value = prevkey
                            document.getElementById("new-event-val").value = prevval
                          }
                        </script>
                        <!-- Modal -->
                        <div id="editinfo_dlg" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit event.</h4>
                              </div>
                              <form>
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="event-name" class="form-control-label">Event Name:</label>
                                    <input type="text" class="form-control" id="new-event-key">
                                  </div>
                                  <div class="form-group">
                                    <label for="event-info" class="form-control-label">Event Info:</label>
                                    <input type="text" class="form-control" id="new-event-val">
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="onSaveclicked()">Save</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
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
                                <p>Do you really want to remove this info?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="onyesclicked()">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- Modal -->

                        <script>
                          function onSaveclicked() {
                            var newkey = document.getElementById("new-event-key").value
                            var newval = document.getElementById("new-event-val").value
                            if (previndex == -1) {
                              content = document.getElementById("infopanel").innerHTML
                              count = document.getElementById("count").value
                              content += 
                              '<div id="info'+count+'" class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12"> <div class="tile-stats" style="height:110px"><div class="row"> <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"> <div class="count"><label id="keylabel'+count+'" style="text-align:center;width:100%">'+newkey+'</label></div><h3><label id="vallabel'+count+'" style="text-align:center;width:100%">'+newval+'</label></h3></div><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><h2><a id="editicon'+count+'" data-toggle="modal" data-target="#editinfo_dlg"><i class="fa fa-edit" onclick="onclicked(\''+count+'\')"></i></a></h2><br/><h2><a id="deleteicon'+count+'" data-toggle="modal" data-target="#delete_dlg"><i class="fa fa-trash-o" onclick="ondeleteclicked(\''+count+'\')"></i></a></h2><input name="key'+count+'" id="keyinput'+count+'" type="text" value="'+newkey+'" style="width:0px;height:0px;visibility:hidden"><input name="val'+count+'" id="valinput'+count+'" type="text" value="'+newval+'" style="width:0px;height:0px;visibility:hidden"></div></div></div></div>'
                              document.getElementById("infopanel").innerHTML = content
                              document.getElementById("count").value = parseInt(count)+1
                            } else {
                              document.getElementById("keyinput"+previndex).value = newkey
                              document.getElementById("valinput"+previndex).value = newval

                              document.getElementById("keylabel"+previndex).innerHTML = newkey
                              document.getElementById("vallabel"+previndex).innerHTML = newval
                            }
                          }

                          function onyesclicked() {
                            count = document.getElementById("count").value
                            if (deleteindex == -1 || count <= 0)
                              return
                            parent = document.getElementById("infopanel")
                            parent.removeChild(document.getElementById("info"+deleteindex))
                            document.getElementById("count").value = parseInt(count)-1
                            if (deleteindex < count-1) {
                              lastinfo = document.getElementById("info"+(count-1))
                              document.getElementById("keylabel"+(count-1)).id="keylabel"+deleteindex
                              document.getElementById("vallabel"+(count-1)).id="vallabel"+deleteindex

                              document.getElementById('editicon'+(count-1)).innerHTML = '<i class="fa fa-edit" onclick="onclicked(\''+deleteindex+'\')"></i>'
                              document.getElementById('editicon'+(count-1)).id="editicon"+deleteindex
                              document.getElementById('deleteicon'+(count-1)).innerHTML = '<i class="fa fa-trash-o" onclick="ondeleteclicked(\''+deleteindex+'\')"></i>'
                              document.getElementById('deleteicon'+(count-1)).id="deleteicon"+deleteindex

                              document.getElementById('keyinput'+(count-1)).name='key'+deleteindex
                              document.getElementById('keyinput'+(count-1)).id='keyinput'+deleteindex

                              document.getElementById('valinput'+(count-1)).name='val'+deleteindex
                              document.getElementById('valinput'+(count-1)).id='valinput'+deleteindex
                              lastinfo.id = "info"+deleteindex
                            }
                          }
                        </script>
                        <!-- End of Modal -->
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                      <div class="form-group">
                        <label class="control-label">Working Hours <span class="required">*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <textarea name="workinghours" class="form-control" rows="10" placeholder='Working Hours'><?php if(isset($shopping_mall['workinghours'])) echo $shopping_mall['workinghours']; ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <label class="control-label">Latitude <span class="required">*</span>
                          </label>
                          <input name="latitude" type="text" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($shopping_mall['latitude'])) echo $shopping_mall['latitude']; ?>">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <label class="control-label">Longitude <span class="required">*</span>
                          </label>
                          <input name="longitude" type="text" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($shopping_mall['longitude'])) echo $shopping_mall['longitude']; ?>">
                        </div>

                        <br/>

                        <label class="control-label">Map Position <span class="required">*</span>
                          </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <select name="mapposition" class="select2_single form-control" required="required" tabindex="-1">
                            <?php
                              if (isset($shopping_mall['mapposition'])) {
                                echo '<option></option>';
                              } else {
                                echo '<option selected></option>';
                              }
                              foreach($mappositions as $mapposition):
                                if (strcmp($mapposition, $shopping_mall['mapposition']) == 0)
                                  echo '<option selected value="'.$mapposition.'">'.$mapposition.'</option>';
                                else
                                  echo '<option value="'.$mapposition.'">'.$mapposition.'</option>';
                              endforeach;
                            ?>
                          </select>
                        </div>

                        <br/>
                        <label class="control-label">Contact <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input name="contact" type="text" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($shopping_mall['contact'])) echo $shopping_mall['contact']; ?>">
                        </div>
                        <br/>
                        <label class="control-label">Link <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input name="link" type="text" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($shopping_mall['link'])) echo $shopping_mall['link']; ?>">
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                      <div class="form-group">
                        <label class="control-label">About Us <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <textarea name="aboutus" class="form-control" rows="10" placeholder='About Us'><?php if(isset($shopping_mall['aboutus'])) echo $shopping_mall['aboutus']; ?></textarea>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <a class="btn btn-primary" style="margin-top:15px" type="button" href="<?php echo getURLPrefix($language); ?>shopping_malls">Cancel</a>
                    <button type="reset" class="btn btn-primary" style="margin-top:15px">Reset</button>
                    <button type="submit" class="btn btn-success" style="margin-top:15px">Save</button>
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