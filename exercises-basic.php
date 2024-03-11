<?php

// 1. Write a PHP script to get the PHP version and configuration information.

// Answering the question above - PHP version and configuration information.
echo "1 no. Answer is hide by commenting. <br /><br />";
// phpinfo();

/**
 * 2. Write a PHP script to display the following strings.
 * Sample String :
 * 'Tomorrow I \'ll learn PHP global variables.'
 * 'This is a bad command : del c:\\*.*'
 * Expected Output :
 * Tomorrow I 'll learn PHP global variables.
 * This is a bad command : del c:\*.* 
 */

// Answering the question above.
echo "<h4>2 no. Answer.</h4> <br />";
$a = 'Tomorrow I\'ll learn PHP global variables.';
$b = 'This is a bad command : del c: \\*.*';
echo $a . "<br />";
echo $b . "<br />";
echo "<br />"; // End of the answer.

/**
 * 3.  $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an * HTML document.
 *
 * Sample Output :
 * PHP Tutorial
 * PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. * It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web
 * development.
 * Go to the PHP Tutorial.
 */

// Answer to the question above.
echo "<br /> <h4>3 no. Answer.</h4> <br />";
$var = 'PHP Tutorial';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $var; ?></title>
</head>

<body>
    <div class="container">
        <h3><?php echo $var; ?></h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci illum magni aliquid sequi hic earum voluptatum minus deleniti obcaecati.</p>
        <p><a href="https://www.w3resource.com/php-exercises/php-basic-exercises.php"> Go To <?php echo $var; ?></a></p>
    </div>
</body>

</html>
<?php
echo "<br />"; // End of the answer.


/**
 * 4. Create a simple HTML form and accept the user name and display the name through PHP echo statement.
 * Sample output of the HTML form :
 * sample html form
 */

// Answer to the Question above.
echo "<br /><h4> 4 no. Answer. </h4><br />";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Basic PHP</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h3><label for="name_text">Please input your Name</label></h3>
            <input type="text" id="name_text" name="name_text">
            <input type="submit" value="Submit Name">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name_text'])) {
            $input_name = $_POST['name_text'];
        }
        ?>

        <p><?php echo "Hello $input_name"; ?></p>
    </div>

</body>

</html>
<?php

/**
 * 5. Write a PHP script to get the client IP address.
 */

// Answer to the Question above.
echo "<br /><h4> 5 no. Answer.</h4>";
// Check if IP is share internet.
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $server_ip = $_SERVER['HTTP_CLIENT_IP'];
}
// Check if IP is from Proxy server.
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $server_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
// If not from Shared internet or not from Proxy server, Consider it Remote Server.
else {
    $server_ip = $_SERVER['REMOTE_ADDR'];
}
// Display the determined IP address.
echo "IP address: " . $server_ip . "<br/>"; // Code is not working properly or .


// Stack overflow answer.
if (!empty(getenv('HTTP_CLIENT_IP'))) {
    $server_ip = getenv('HTTP_CLIENT_IP');
}
// Check if IP is from Proxy server.
elseif (!empty(getenv('HTTP_X_FORWARDED_FOR'))) {
    $server_ip = getenv('HTTP_X_FORWARDED_FOR');
}
// If not from Shared internet or not from Proxy server, Consider it Remote Server.
else {
    $server_ip = getenv('REMOTE_ADDR');
}
// Display the determined IP address.
echo "IP address: " . $server_ip . "<br/>"; // Return ::1.
// Google answer is (If you call your server using localhost, it will print out ::1)



/**
 * 6. Write a simple PHP browser detection script.
 * Sample Output : Your User-Agent is: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko)
 *  Chrome/35.0.1916.114 Safari/537.36
 */

// Answer to the Question above.
echo "<br /><h4> 6 no. Answer.</h4>";
// Display my string 'My User-Agent is: ' then user agent string from http request.
echo "My User-Agent is: " . getenv('HTTP_USER_AGENT');
echo "<br />";


/**
 * 7. Write a PHP script to get the current file name.
 */
// Answer to the Question above.
echo "<br /><h4> 7 no. Answer.</h4>";
$current_file_name = $_SERVER['PHP_SELF'];
echo "Current File Name: " . $current_file_name;
echo "<br />"; // end answer.


/**
 * 8. Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.
 * List of components : Scheme, Host, Path
 * Expected Output :
 * Scheme : http
 * Host : www.w3resource.com
 * Path : /php-exercises/php-basic-exercises.php
 */
// Answer to the Question above.
echo "<br /><h4> 8 no. Answer.</h4>";
// Defined the url to be parsed.
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';

// Parsed the url and store its components in $url variable.
$url = parse_url($url);

//Display the scheme (protocol) of the parsed url.
echo "Scheme : " . $url['scheme'] . "<br />";

// Display the host (domain) of the parsed url.
echo "Host : " . $url['host'] . "<br />";

// Display the path of the parsed url.
echo "Path : " . $url['path'] . "<br />";
echo "<br />"; // end answer.

/**
 * 9. . Write a PHP script, which changes the color of the first character of a word.
 * Sample string : PHP Tutorial
 * Expected Output :
 * PHP >Tutorial
 */
// Need to study about PHP expression & pattern matching.



/**
 * 10. Write a PHP script, to check whether the page is called from 'https' or 'http'.
 */
// Answer to the Question above.
echo "<br /><h4> 10 no. Answer.</h4>";
// Check if the HTTPS (secure) protocol is enabled in the server.
if (!empty($_SERVER['HTTPS'])) {
    // Display a message that https is enabled.
    echo "https is enabled.";
} else {
    // Display a message that http is enabled.
    echo "http is enabled.";
}
echo "<br />"; // end answer.
