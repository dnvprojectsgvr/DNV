<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="col-md-5">
      <div class="panel panel-primary">
        <div class="panel-heading">

          <span class="glyphicon glyphicon-list"></span>  <?php $title = "To-Do List"; echo $title; ?>


          <div class="pull-right action-buttons">
            <div class="btn-group pull-right">
             <!--  <a type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" href="<?php // echo site_url('faculty/todo/add'); ?>"> -->
               <a type="button" class="btn btn-default btn-xs" href="<?php echo site_url('faculty/todo/add'); ?>">
                <span class="glyphicon glyphicon-plus" style="margin-right: 0px;"> Add</span>
              </a>
              <!-- <ul class="dropdown-menu slidedown">
                <li><a href="#"><span class="glyphicon glyphicon-pencil"></span>Edit</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-trash"></span>Delete</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-flag"></span>Flag</a></li>
              </ul> -->
            </div>
          </div>
        </div>
        <div class="panel-body">
           <?php for($i=0; $i<count($todos); $i++) { ?>
          <ul class="list-group">   
            <li class="list-group-item">
              <div class="checkbox">
                <input type="checkbox" id="checkbox" />
                <label for="checkbox">
                 <?php echo $todos[$i]['name']; ?>
                </label>
              </div>
              <div class="pull-right action-buttons">
                <a href="<?php echo site_url('faculty/todo/edit/'.$todos[$i]['id']); ?>" title="Edit" >
                    <i class="glyphicon glyphicon-pencil"></i>
                  </a></a>
                <a href="<?php echo site_url('faculty/todo/delete/'.$todos[$i]['id']); ?>" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                <a href="<?php echo site_url('faculty/todo/priority/'.$todos[$i]['id']); ?>" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
              </div>
            </li>
           
          </ul>
            <?php } ?>
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6">
              <h6 style="color: black;">
                <td colspan="3">Showing <span class="label label-info"> <?php echo $from_result; ?> to <?php echo $to_result; ?> of <?php echo $num_rows; ?> entries</td> </span></h6>
              </div>
              <tfoot style=" color: black;">
              <tr>
               
                <td colspan="4">
                  <?php echo $this->pagination->create_links(); ?>
                </td>
              </tr>
            </tfoot>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">

  .trash { color:rgb(209, 91, 71); }
  .flag { color:rgb(248, 148, 6); }
  .panel-body { padding:0px; }
  .panel-footer .pagination { margin: 0; }
  .panel .glyphicon,.list-group-item .glyphicon { margin-right:5px; }
  .panel-body .radio, .checkbox { display:inline-block;margin:0px; color: black; }
  .panel-body input[type=checkbox]:checked + label { text-decoration: line-through;color: rgb(128, 144, 160); }
  .list-group-item:hover, a.list-group-item:focus {text-decoration: none;background-color: rgb(245, 245, 245);}
  .list-group { margin-bottom:0px; }
</style>