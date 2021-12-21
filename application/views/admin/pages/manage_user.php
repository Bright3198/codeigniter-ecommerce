<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="<?php echo base_url('manage/user')?>">Manage User</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Manage User</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>

            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>

            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=0;
                        foreach($all_user as $single_user){
                            $i++;
                        ?>
                        <tr>
                            <td class="center"><?php echo $single_user->user_name;?></td>
                            <td class="center"><?php echo $single_user->user_email;?></td>
                            <td class="center"><?php echo $single_user->role_name;?></td>
                          <td>  <a class="btn btn-info" href="<?php //echo base_url('details/delete_user/'. $single_user->user_id); ?>">
                                <i class="halflings-icon white edit"></i>
                            </a></td>

                        </tr>
                        <?php }?>

                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->



</div><!--/.fluid-container-->

<!-- end: Content -->
