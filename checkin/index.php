<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate email.
    $email = $_POST['email'];

    $email = strtolower($email);
    // Remove @mit.edu part.
    if (preg_match("/mit.edu/",$email)) {
        $email = substr($email, 0, strlen($email) - strlen('@mit.edu'));
    }
	  // exec("ldapsearch -h ldap.mit.edu -p 389 -u -b 'dc=mit,dc=edu' -x '(uid=".$email.")' cn mitDirStudentYear ou", $output_arr);
    $dir = dirname(__FILE__);
    // echo "$dir/ldaps $email mitDirStudentYear cn ou";
    exec("$dir/ldaps $email mitDirStudentYear cn ou", $output_arr);
    $name = "";
    $year = "";
    $course = "";
    foreach ($output_arr as $line) {
        $name_prefix = "cn: ";
        $year_prefix = "mitDirStudentYear: ";
        $course_prefix = "ou: ";
        if (substr($line, 0, strlen($name_prefix)) == $name_prefix) {
            $name = substr($line, strlen($name_prefix));
        }
        if (substr($line, 0, strlen($year_prefix)) == $year_prefix) {
            $year = substr($line, strlen($year_prefix));
        }
        if (substr($line, 0, strlen($course_prefix)) == $course_prefix) {
            $course = substr($line, strlen($course_prefix));
        }
    }
    if (strlen($name) > 0) {
        echo "{";
        echo '"name": "', $name, '",';
        echo '"year": "', $year, '",';
        echo '"course": "', $course, '"';
        echo "}";
        return;
        $mysqli = new mysqli('sql.mit.edu','techfair','02139techfair','techfair+dayof');
        if (mysqli_connect_errno()) { 
            printf("Connect failed: %s\n", mysqli_connect_error()); 
            exit(); 
        }
        $stmt = $mysqli->prepare("INSERT INTO registration2013 (email, name) VALUES (?,?)");
        $stmt->bind_param('ss', $_POST['email'], $name);
        $stmt->execute();
        $stmt->close();
        $mysqli->close();
    } else {
        header('HTTP/1.0 400 Invalid Athena', true, 400);
    }
    return;
}
?>
<!DOCTYPE html>
<html>
<head>
  <script src="dymo.latest.js"></script>
  <script src="jquery-1.9.0.min.js"></script>
  <script src="athenas.js"></script>
  <script src="script.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div id="loading" class="hide"><div>
    <div class="div0"></div>
    <div class="div1"></div>
    <div class="div2"></div>
    <div class="div3"></div>
  </div></div>
  <div id="cool-textbox"></div>
  <form class="fade-out">
    <p>Make any necessary changes and hit enter:</p>
    <input type="text" id="form-name" />
    <input type="text" id="form-year" />
    <input type="text" id="form-course" />
  </form>
</body>
</html>
