<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes in PHP</title>
</head>

<body>

    <?php
    // PHP Scopes Explained

    echo "### PHP Scopes Tutorial ###\n\n";

    /*
1. Global Scope
- Variables declared outside of a function are in the global scope.
- They are accessible everywhere except inside functions (unless explicitly accessed using the 'global' keyword or $GLOBALS array).
*/

    $globalVar = "I am a global variable";

    function testGlobalScope()
    {
        // Uncommenting the next line will cause an error
        // echo $globalVar;

        echo "Inside function: Cannot access globalVar directly.\n";

        // Accessing global variables using 'global' keyword
        global $globalVar;
        echo "Inside function using 'global': $globalVar\n";

        // Accessing global variables using $GLOBALS
        echo "Inside function using \$GLOBALS: " . $GLOBALS['globalVar'] . "\n";
    }

    testGlobalScope();
    echo "Outside function: $globalVar\n\n";

    /*
2. Local Scope
- Variables declared inside a function are in the local scope.
- They are only accessible within the function.
*/

    function testLocalScope()
    {
        $localVar = "I am a local variable";
        echo "Inside function: $localVar\n";
    }

    testLocalScope();

    // Uncommenting the next line will cause an error
    // echo "Outside function: $localVar\n";

    /*
3. Static Scope
- Variables declared as 'static' inside a function retain their value between function calls.
*/

    function testStaticScope()
    {
        static $staticVar = 0; // Retains its value
        $staticVar++;
        echo "Static variable value: $staticVar\n";
    }

    testStaticScope();
    testStaticScope();
    testStaticScope();

    /*
4. Function Parameters (Argument Scope)
- Function arguments are variables passed to a function.
- They are local to the function and do not affect variables in the global scope unless passed by reference.
*/

    function testArgumentScope($argVar)
    {
        echo "Argument received: $argVar\n";
        $argVar = "Modified inside function";
        echo "Modified argument inside function: $argVar\n";
    }

    $argumentVar = "Original Value";
    testArgumentScope($argumentVar);
    echo "Outside function: $argumentVar\n"; // No change in value

    // Pass by reference
    function testReferenceScope(&$argVar)
    {
        $argVar = "Modified by reference";
        echo "Modified argument by reference: $argVar\n";
    }

    testReferenceScope($argumentVar);
    echo "Outside function after reference modification: $argumentVar\n\n";

    /*
5. Superglobal Scope
- Superglobals are built-in variables that are always accessible, regardless of scope.
- Examples: $_GET, $_POST, $_SESSION, $_COOKIE, $_SERVER, $GLOBALS
*/

    echo "Superglobals:\n";
    echo "Server information: " . $_SERVER['SERVER_NAME'] . "\n";
    echo "Accessing globalVar using \$GLOBALS: " . $GLOBALS['globalVar'] . "\n";

    ?>


</body>

</html>