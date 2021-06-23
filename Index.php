<h2>You have entered: <?php
                        echo $checkPassword;
                        ?>
</h2>
<h3><?php
    function read_text($text)
    {
        $invalid_passwords = array("12345678", "password", "picture1", "iloveyou", "qqww1122", "unknowns", "sunshine", "aaaaaaaa", "55555555", "superman", "samantha");
        //CARRIES GLOBAL VARIABLE TO THE FUNCTION
        global $error;
        if (strlen($text) < 8) {
            $error = "1";
            echo "<script>alert('Password must be 8 characters or more.');</script>";
        }

        foreach ($invalid_passwords as $item) {
            //lowercase the entered password so there are no variations from array item.
            $lowerCasePassword = strtolower($text);
            if ($item === $lowerCasePassword) {
                $error = "1";
                echo "<script>alert('Password not allowed as it has been blacklisted.');</script>";
            }
        }
    }

    function is_error($error)
    {
        global $error;
        if ($error === "1") {
            echo "Password check failed. Please enter another password.";
        } elseif ($error === "0") {
            echo "<h1>Password check passed!</h1>";
        }
    }


    echo read_text($checkPassword);
    is_error($error);
    ?></h3>