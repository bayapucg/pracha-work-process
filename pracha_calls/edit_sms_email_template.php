<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Templates</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>SMS - Email Template</li>
                    <li>Edit</li>
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
                        <a href="sms_email_template_list.php" class="btn btn-sm btn-info">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <strong class="card-title">Edit Message Template</strong>
                    </div>
                    <div class="card-body">
                        <form method="" action="" id="edit_se_template">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label" style="margin-right:10px;">
                                                <input type="radio" id="inline-radio1" name="inline-radios" class="form-check-input" checked>SMS
                                            </label>
                                            <label for="inline-radio2" class="form-check-label ">
                                                <input type="radio" id="inline-radio2" name="inline-radios" class="form-check-input">Email
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" id="e_set_name" name="e_set_name" placeholder="Enter name" class="form-control" value="xxxxxxxxxx">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="e_set_message" name="e_set_message" placeholder="Enter here..." class="form-control">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<?php include('footer.php'); ?>

<script>
    $(document).ready(function() {
    $('#edit_se_template').bootstrapValidator({

        fields: {
            e_em_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter name'
                    }
                }
            },
            e_em_message: {
                validators: {
                    notEmpty: {
                        message: 'Please enter message'
                    }
                }
            }
            }
        })

    });
</script>