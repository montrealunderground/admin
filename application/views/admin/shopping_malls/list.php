<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> <?php echo '<a href="'.getURLPrefix($language).'shopping_malls">'; ?> Shopping Malls </a> <small></small> </h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <?php
            foreach($shopping_malls as $mall) :
              echo '<div class="col-md-55">';
              echo '  <div class="thumbnail">';
              echo '    <a href="'.getURLPrefix($language).'shopping_malls/'.$mall['id'].'">';
              echo '      <div class="image view view-first">';
              //echo '        <img style="width: 100%; display: block" src="'.base_url().'assets/uploaded/shoppingmalls/logo/'.$mall['logophoto_filename'].'" alt="image" />'; 
              echo '        <img style="width: 100%; display: block" src="'.$this->config->item('download_prefix_logo').$mall['logophoto_filename'].'" alt="image" />'; 
              echo '        <div class="mask">';
              echo '          <p>'.$mall['name'].'</p>';
              echo '        </div>';
              echo '       </div>';
              echo '    </a>';
              echo '    <div class="caption">';
              echo '      <a href="'.getURLPrefix($language).'shopping_malls/'.$mall['id'].'" style="margin-left:8px">'.$mall['name'].'</a>';
              echo '      <a class="close-link" style="float:right" data-toggle="modal" data-target="#delete_dlg" onclick="deleteclicked('.$mall['id'].')"><i class="fa fa-trash-o"></i></a>';
              echo '    </div>';
              echo '  </div>';
              echo '</div>';           
            endforeach;
          ?>
          <div class="col-md-55">
            <div class="thumbnail" style="position: relative">
              <?php echo '<a href="'.getURLPrefix($language).'shopping_malls/new">'; ?>
                <h1 style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);"><i class="fa fa-plus" ></i>New</h1>
              </a>
            </div>
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
                  <p>Do you really want to remove this shopping mall?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal" onclick="onyesclicked()">Yes</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
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
  function deleteclicked(id) {
    currentid = id
  }
  function onyesclicked() {
    location.href = "<?php echo getURLPrefix($language); ?>shopping_malls/deleteShoppingmall/"+currentid
  }
</script>