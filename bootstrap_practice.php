<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Web & Internet of 5AF</title>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" style="background-color: red;">
            <p>We are in red region</p>
        </div>
        <div class="col-md-6" style="">
            <div class="card">
                <div class="card-head bg-primary">
                    <h3 class="text-center">Registration Form</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <td>Student Name</td>
                            <td>
                                <input type="text" id="studentName" name="studentName" placeholder="Student Name"
                                       class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Roll
                            </td>
                            <td>
                                <input placeholder="Roll" type="text" id="roll" name="roll" class="form-control ">
                            </td>
                        </tr>
                        <tr>
                            <td>Department</td>
                            <td>
                                <select class="form-control" name="department" id="deparment">
                                    <option>Select Department</option>
                                    <option>CSE</option>
                                    <option>CE</option>
                                    <option>ME</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submitButton" class="btn btn-primary" >
                            </td>
                        </tr>

                    </table>
                </div>

            </div>


        </div>

        <div class="col-md-3" style="height: 200px;">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDepartmentModal">
               Add Department
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <input type="text" name="department" placeholder="Department">
                                <input type="text" class="datepicker ">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>