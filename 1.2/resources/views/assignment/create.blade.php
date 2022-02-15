<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <title>Create new Assignment</title>
    <link href="/css/taskmanage.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <?php
    include 'sideav.blade.php';
    ?>
    <div id="main">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <div class="fadeIn first">
                    <h1 style="font-family: 'Courier New', Courier, monospace; color: cornflowerblue; padding-top: 1ch;">New Assignment</h1>
                </div>
                @if (\Session::has('message'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('message') !!}</li>
                    </ul>
                </div>
                @endif
                <!-- Login Form -->
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" id="assignmentfile" class="fadeIn second" name="assignmentfile" required>
                    <input type="text" id="description" class="fadeIn second" name="description" placeholder="Description" required>
                    <input type="datetime-local" id="deadline" class="fadeIn second" name="deadline" required>
                    <input type="submit" class="fadeIn fourth" value="Add" id="regbtn">
                </form>

            </div>
        </div>
    </div>
</body>

</html>