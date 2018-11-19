<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Campaign</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Start Campaign</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Start Campaign</strong>
                    </div>
                    <div class="card-body">

                        <form method="" action="" id="start_campaign">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Select Group</label>
                                        <select class="form-control" name="sc_sgroup">
                                            <option disabled selected>Select</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                            <option value="">Option 4</option>
                                        </select>
                                    </div>
                                    <button type="button" id="sc_connect" class="btn btn-sm btn-primary">Connect</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            Select
                                        </th>
                                        <th>Group Name</th>
                                        <th>Info</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>xxxxxxxxx</td>
                                        <td>98xxxxxx20</td>
                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-primary">
                                                    Email
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    SMS
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    SMS
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>xxxxxxxxx</td>
                                        <td>98xxxxxx20</td>
                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-primary">
                                                    Email
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    SMS
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    SMS
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>xxxxxxxxx</td>
                                        <td>98xxxxxx20</td>
                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-primary">
                                                    Email
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    SMS
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-sm social btn-danger">
                                                    SMS
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<script>
    $(document).ready(function() {
    $('#start_campaign').bootstrapValidator({

        fields: {
            sc_sgroup: {
                validators: {
                    notEmpty: {
                        message: 'Please select group'
                    }
                }
            }
            }
        })

    });
</script>

<?php include('footer.php'); ?>

<script>
$(document).ready(function(){
    $(".table-responsive").hide();
    $("#sc_connect").click(function(){
        $(".table-responsive").show();
    });
});
</script>
