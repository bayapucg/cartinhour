<div class="right_col" role="main">

      <div class="">

        <div class="page-title">

          <div class="title_right pull-right">

            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

              <div class="input-group">

                <input type="text" class="form-control" placeholder="Search for...">

                <span class="input-group-btn">

                <button class="btn btn-default" type="button">Go!</button>

                </span>

                </div>

            </div>

          </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">

            <div class="x_panel">

              <div class="x_title">

                <h2>Users</h2>

                

                <!--<ul class="nav navbar-right panel_toolbox">

                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>

                  <li><a class="close-link"><i class="fa fa-close"></i></a> </li>

                </ul>-->

                <div class="clearfix"></div>

              </div>

              <div class="x_content table-responsive">

                <table class="table table-bordered">

                  <thead>

                    <tr>

                      <th>S.NO</th>

                      <th>User Name</th>

                      <th>Email</th>

                      <th>Mobile</th>

                     

                      <th>Delete</th>

                    </tr>

                  </thead>

                  <tbody>

                  <?php $i=1;

                   foreach($usersdata as $users_data){?>

                    <tr>

                      <td><?=$i;?></td>

                      <td><?php  echo $users_data->user_name; ?></td>

                      <td><?php  echo $users_data->user_email; ?></td>

                      <td><?php  echo $users_data->user_mobile; ?></td>

                     <!-- <td><a href="#"><i class="fa fa-eye" style="font-size:18px"></i></a></td>-->

                      <td><a href="<?php echo base_url(); ?>admin/users/delete/<?php  echo $users_data->user_id; ?>" onclick="return checkDelete('<?php  echo $users_data->user_name; ?>')"><i class="fa fa-trash" style="font-size:18px"></i></a></td>

                    </tr>

                     <?php $i++; } ?>

                  

                  </tbody>

                </table>

              </div>

            </div>

          </div>

          <div class="clearfix"></div>

        </div>

      </div>

    </div>

<script language="JavaScript" type="text/javascript">

function checkDelete(id)

{

  

return confirm('Are you sure want to delete "'+id +'" user?');

}

</script>