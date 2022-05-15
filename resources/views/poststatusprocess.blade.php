{{-- TODO --}}
@extends('layouts.main')

@section('container')
    @include('partials.nav')
    <section class="contact-clean">
        <div class="container">
            <form style="max-width: 600px;">
                <h2 class="text-center">Post Status Information</h2>
                <div class="mb-3">
                    @php
                    function createTableIfNotExist()
                    {
                        require "settings.php";

                        // Create connection
                        $conn = new mysqli($host, $user, $pswd, $dbnm);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection Failed: " . $conn->connect_error);
                        }

                        // Sql to create table If Not Exists
                        $sql = "CREATE TABLE IF NOT EXISTS post (
                    status_code VARCHAR(5) NOT NULL PRIMARY KEY,
                    status_content VARCHAR(255) NOT NULL,
                    share VARCHAR(20),
                    input_date VARCHAR(20) NOT NULL,
                    permission VARCHAR(200))
                    ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";

                        if ($conn->query($sql) === true) {
                            // echo "Table post created successfully";
                            // echo "<br>";
                        } else {
                            echo "Error creating table: " . $conn->error;
                            echo "<br>";
                        }

                        $conn->close();
                    }

                    // Call the function
                    createTableIfNotExist();

                    function addPost()
                    {
                        include "settings.php";

                        // Create connection
                        $conn = new mysqli($host, $user, $pswd, $dbnm);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection Failed: " . $conn->connect_error);
                        }

                        // GET ACCOUNT INFORMATION FROM FORM AND ASSIGN VARIABLES
                        $status_code = $_POST["statusCode"];
                        $status_content = $_POST["status"];
                        $share = $_POST["gridRadios"];
                        $input_date = $_POST["date"];

                        // Array Permission Type
                        $permissionList = [];
                        foreach ($_POST["permissionCheckBox"] as $check) {
                            array_push($permissionList, $check);
                        }
                        $_permissionTypeList = implode(", ", $permissionList);


                        /* ### Data Validations Start ### */

                        $sql = "SELECT status_code FROM post WHERE status_code ='$status_code'";
                        ($result = $conn->query($sql)) or
                            die("unable to execute");

                        $numRows = mysqli_num_rows($result);
                        $statusCodeLength = strlen($status_code);
                        $firstCharacter = substr($status_code, 0, 1);
                        $restCharacter = substr(
                            $status_code,
                            1,
                            $statusCodeLength
                        );

                        // Create bool variable for validation check from the input data
                        $passRule = true;

                        // Variable string to return the error message
                        $error_Message = "";

                        /* Data Validation For Status Code */

                        // Check status code whether or not is unique
                        if ($numRows > 1) {
                            $error_Message =
                                $error_Message .
                                "<p>(Status Code Duplicate Error) The status code already exists. Please try another one!</p>";
                            $passRule = false;
                        }

                        // If the user inputs a status code in a wrong format
                        if (
                            $statusCodeLength != 5 ||
                            $statusCodeLength == 0
                        ) {
                            $error_Message =
                                $error_Message .
                                "<p>(Status Code Format Error) Wrong format! The status code must start with an “S” followed by four digits, like “S0001.</p>";
                            $passRule = false;
                        } else {

                            // Check first status code is starts with uppercase 'S'
                            if (strcmp($firstCharacter, "S")) {
                                $error_Message =
                                    $error_Message .
                                    "<p>(Status Code Format Error) First Character must start with uppercase S!</p>";
                                $passRule = false;
                            } else {

                                // Check rest of status code's character is a number
                                if (ctype_digit($restCharacter) != 1) {
                                    $error_Message =
                                        $error_Message .
                                        "<p>(Status Code Format Error) Second Character to last Character must be a number!</p>";
                                    $passRule = false;
                                }
                            }
                        }

                        /* Data Validation For Status Content */

                        // Declare Variable
                        $status_Length = strlen($status_content);
                        $pattern = '/^[A-Za-z0-9 ,.!?]*$/'; // Regex

                        // Check status input is null
                        if ($status_Length == 0) {
                            $error_Message = $error_Message .  "<p>(Status Content) Input is required cannot be empty!</p>";
                            $passRule = FALSE;
                        } else {
                            // Using pattern, The status can only contain alphanumeric and spaces, comma, period, exclamation point and question mark
                            if (!preg_match($pattern, $status_content)) {
                                $error_Message = $error_Message .  "<p>(Status Content) Your status
                                is in a wrong format! The status can only contain alphanumeric and spaces, comma, period,
                                exclamation point and question mark and cannot be blank!</p>";
                                $passRule = FALSE;
                            }
                        }

                        /* Data Validation For Date */

                        // Validation check if the date is a real date (get a substring of each two date digits)
                        $day = substr($input_date, 0, 2);
                        $month = substr($input_date, 3, 2);
                        $year = substr($input_date, 6, 2);

                        // Returns a boolean value after validation of date
                        $valid_date = checkdate($month, $day, $year);

                        // If date is not a valid date
                        if (!$valid_date) {
                            $error_Message =
                                $error_Message .
                                "<p>(Date Format Error) This Date Is Not Valid!</p>";
                            $passRule = false;
                        }

                        /* ### Data Validations END ### */

                        // Check If All the data input is valid
                        if ($passRule) {
                            $sql = "INSERT INTO post (status_code, status_content, share, input_date, permission)
                    VALUES ('$status_code', '$status_content', '$share', '$input_date', '$_permissionTypeList')";

                            if ($conn->query($sql) === true) {
                                echo '<div class="container text-center">';
                                echo '<div class="row">';
                                echo '<div class="col">';
                                echo '<img src="./assets/img/happy.gif" alt="Happy Animation" width="200" height="200"> <br>';
                                echo "New Record Created Successfully.";
                                echo "<br>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "<br>";
                            } else {
                                echo '<h1 class="text-center">Error!</h1>';
                                echo "Error Inserting Table: " .
                                    $sql .
                                    "<br>" .
                                    $conn->error .
                                    "<br>";
                                echo "The status code already exists. Please try another one!<br>";
                                echo "Please Re-Check Your Data<br>";
                            }
                        } else {
                            echo '<h1 class="text-center">Error!</h1>';

                            echo '<div class="alert alert-danger" role="alert"';
                            echo '' . $error_Message . '';
                            echo '</div>';
                        }
                        $conn->close();
                    }

                    addPost();
                    @endphp

                </div>
                <div class="d-grid gap-2 d-md-block">
                    <a class="btn btn-success" role="button" href="/poststatusform">Return</a>
                    <a class="btn btn-primary float-end" role="button" href="/searchstatusform">Search Post</a>
                </div>
                <div class="d-flex d-xxl-flex justify-content-xxl-center mb-3">
                    <a class="btn btn-primary flex-fill" role="button" href="/" style="margin-left: 5px;">Return home</a>
                </div>
            </form>
        </div>
    </section>
@endsection
