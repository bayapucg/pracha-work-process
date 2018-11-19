<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1></h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Edit Profile</li>
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
                        <a href="profile.php" class="btn btn-sm btn-info">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <strong class="card-title">Edit Profile</strong>
                    </div>
                    <div class="card-body">
                        <form method="" action="" id="edit_profile">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Name</label>
                                        <input type="text" id="ep_name" name="ep_name" value="John Deo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Email Id</label>
                                        <input type="email" id="ep_email" name="ep_email" value="Johndeo@gmail.com" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Phone Number</label>
                                        <input type="text" id="ep_number" name="ep_number" value="98xxxxxx56" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Location</label>
                                        <input type="text" id="ep_location" name="ep_location" value="Delhi" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Profile Pic</label>
                                        <input type="file" id="ep_profile_pic" name="ep_profile_pic" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
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
    $('#edit_profile').bootstrapValidator({

        fields: {
            ep_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter name'
                    }
                }
            },
            ep_email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter email'
                    }
                }
            },
            ep_number: {
                validators: {
                    notEmpty: {
                        message: 'Please enter number'
                    }
                }
            }
            }
        })

    });
</script>