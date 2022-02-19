<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <title>Web & Internet of 5AF</title>
</head>
<style>
    .student-table {
        border-collapse: collapse;
    }
</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" style="background-color: red;">
            <p>We are in red region</p>
        </div>
        <div class="col-md-6" style="">
            <div class="card">
                <div class="card-header">
                    <h3>Registration Form</h3>
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

        <div class="col-md-3" style="background-color: black;height: 200px;">
            <p>In black Region</p>
        </div>

    </div>

</div>


<div style="background-color: red;width: 50%;float: left"
     id="container-id" class="container">
    <h1>Hello world</h1>
    <p>International Islamic University of Chittagong</p>
    <img width="200" height="200" src="images/1.jpg">
    <table id="" class="student-table" border="1">
        <tr>
            <td>#</td>
            <td>Department</td>
        </tr>
        <tr>
            <td>1</td>
            <td>CSE</td>
        </tr>
        <tr>
            <td>2</td>
            <td>EEE</td>
        </tr>
    </table>
</div>
<!-- Top right bottom left--!>
<div style="background-color: blue;width: 40%;float: left;margin: 0 5px 0 5px;"
     id="container-id" class="container container-left-div ">
    <h1 style="padding-left: 10px">Hello world</h1>
    <p style="padding-left: 10px">International Islamic University of Chittagong</p>
    <img width="200" height="200" src="images/1.jpg">
    <table border="1" style="border-collapse: collapse;margin-left: 10px;">
        <tr>
            <td>#</td>
            <td style="padding-left: 20px">Department</td>
        </tr>
        <tr>
            <td>1</td>
            <td>CSE</td>
        </tr>
        <tr>
            <td>2</td>
            <td>EEE</td>
        </tr>
    </table>
</div>
</body>
</html>