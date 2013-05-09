<?php include('header.php'); ?>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> MUSHD</h2>
            <div class="box-icon">
            <!--     <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>

        <div class="box-content">
        <!--Table Content -->
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                      <tr>
                          <th>Username</th>
                          <th>Date </th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Actions</th>
                          <th>Username</th>
                          <th>Date </th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                </thead>   
                <tbody>
                    <tr>
                        <td>David R</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center"> </td>
                        <td class="center"> </td>
                        <td>David R</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center"> </td>
                        <td class="center"> </td>
                    </tr>
                </tbody>
            </table>            
        <!--\Table Content -->
        </div>
    </div><!--/span-->
</div><!--/row-->

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <!-- <h2><i class="icon-user"></i> Members</h2> -->
            <div class="box-icon">
            <!--     <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>

        <div class="box-content">
        <!--Table Content -->
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                      <tr>
                          <th>Username</th>
                          <th>Date </th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Actions</th>
                          <th>Username</th>
                          <th>Date </th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                </thead>   
                <tbody>
                    <tr>
                        <td>David R</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center"> </td>
                        <td class="center"> </td>
                        <td>David R</td>
                        <td class="center">2012/01/01</td>
                        <td class="center">Member</td>
                        <td class="center"> </td>
                        <td class="center"> </td>
                    </tr>
                    <tr>
                        <td>David R</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Member</td>
                        <td class="center"> </td>
                        <td class="center"> </td>
                        <td>David R</td>
                        <td class="center">2012/02/01</td>
                        <td class="center">Member</td>
                        <td class="center"> </td>
                        <td class="center"> </td>
                    </tr>
                </tbody>
            </table>            
        <!--\Table Content -->
        </div>
    </div><!--/span-->

</div><!--/row-->
<!--Starts graph-->
<div class="box">
    <div class="box-header well">
        <h2><i class="icon-list-alt"></i> Chart with points</h2>
        <div class="box-icon">
            <!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <div id="sincos"  class="center" style="height:300px" ></div>
        <p id="hoverdata">Mouse position at (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>
    </div>
</div>
<!--\Ends Graph -->

<?php include('footer.php'); ?>
