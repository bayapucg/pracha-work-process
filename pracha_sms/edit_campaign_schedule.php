<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Campaign Scheduling</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Campaign Scheduling</li>
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
                        <a href="campaign_list.php" class="btn btn-sm btn-info">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <strong class="card-title">Edit Schedule</strong>
                    </div>
                    <div class="card-body">
                        <form method="" action="" id="add_schedule">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control" name="es_type" id="es_type">
                                            <option value="" disabled selected>Select</option>
                                            <option value="">xxxxx</option>
                                            <option value="">xxxxx</option>
                                            <option value="">xxxxx</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>SMS's / Day</label>
                                        <input type="text" id="es_sms_day" name="es_sms_day" placeholder="Enter no.of sms's per day" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Time</label>
                                        <input type="time" id="es_time" name="es_time" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Start Date</label>
                                        <input type="date" id="es_sdate" name="es_sdate" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">End Date</label>
                                        <input type="date" id="es_edate" name="es_edate" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" name="" id="">
                                        <label class="form-control-label">Select Group</label>
                                        <select class="form-control" name="" id="">
                                            <option value="" disabled selected>Select</option>
                                            <option value="">xxxxx</option>
                                            <option value="">xxxxx</option>
                                            <option value="">xxxxx</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" name="" id="">
                                        <label class="form-control-label">Group</label>
                                        <input type="text" id="" name="" placeholder="Enter group name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" name="" id="">
                                        <label class="form-control-label">Select Message</label>
                                        <select class="form-control" name="" id="">
                                            <option value="" disabled selected>Select</option>
                                            <option value="">xxxxx</option>
                                            <option value="">xxxxx</option>
                                            <option value="">xxxxx</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" name="" id="">
                                        <label class="form-control-label">Message</label>
                                        <textarea id="" name="" placeholder="Enter message here..." class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
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
    $('#edit_schedule').bootstrapValidator({

        fields: {
            es_type: {
                validators: {
                    notEmpty: {
                        message: 'Type is required'
                    }
                }
            },
            es_sms_day: {
                validators: {
                    notEmpty: {
                        message: 'SMS/day is required'
                    }
                }
            },
            es_time: {
                validators: {
                    notEmpty: {
                        message: 'Time is required'
                    }
                }
            },
            es_sdate: {
                validators: {
                    notEmpty: {
                        message: 'Start date is required'
                    }
                }
            },
            es_edate: {
                validators: {
                    notEmpty: {
                        message: 'End date is required'
                    }
                }
            },
            }
        })

    });
</script>