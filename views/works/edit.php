<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>EST Test</title>
</head>
<body>

<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css"/>
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="assets/css/style.css">

<div id="myDIV" class="header">
    <h2 style="margin:5px">My To Do List</h2>
</div>

<div class="bootstrap-iso">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <form action="index.php?controller=works&action=edit" class="form-horizontal" method="post">
                    <input type="hidden" name="id" value="<?= $work->id ?>">
                    <div class="form-group">
                        <label class="control-label col-sm-2 requiredField" for="date">
                            Work name
                            <span class="asteriskField">*</span>
                        </label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input class="form-control" name="work_name" type="text" value="<?= $work->work_name ?>"
                                       required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-sm-2 requiredField" for="date">
                            Starting date
                            <span class="asteriskField">*</span>
                        </label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar">
                                    </i>
                                </div>
                                <input class="form-control" id="starting_date" name="starting_date"
                                       placeholder="YYYY/MM/DD"
                                       type="text" value="<?= $work->starting_date ?>" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-sm-2 requiredField" for="date">
                            Ending date
                            <span class="asteriskField">*</span>
                        </label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar">
                                    </i>
                                </div>
                                <input class="form-control" id="ending_date" name="ending_date" placeholder="YYYY/MM/DD"
                                       type="text" value="<?= $work->ending_date ?>" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button class="btn btn-primary " type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function () {
        var starting_date = $('input[name="starting_date"]');
        var ending_date = $('input[name="ending_date"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";

        starting_date.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });

        ending_date.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
    })
</script>

</body>

</html>