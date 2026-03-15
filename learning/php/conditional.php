<?php
// IF STATEMENT
$age = 20;

if ($age >= 18) {
    echo "You are an adult<br>";
}

// IF-ELSE STATEMENT
$age = 15;

if ($age >= 18) {
    echo "You are an adult<br>";
} else {
    echo "You are a minor<br>";
}

// IF-ELSEIF-ELSE STATEMENT
$score = 85;

if ($score >= 90) {
    echo "Grade: A<br>";
} elseif ($score >= 80) {
    echo "Grade: B<br>";
} elseif ($score >= 70) {
    echo "Grade: C<br>";
} elseif ($score >= 60) {
    echo "Grade: D<br>";
} else {
    echo "Grade: F<br>";
}

// MULTIPLE CONDITIONS (&&, ||, AND, OR)
$age = 25;
$hasLicense = true;

if ($age >= 18 && $hasLicense) {
    echo "You can drive<br>";
}

$isWeekend = true;
$isHoliday = false;

if ($isWeekend || $isHoliday) {
    echo "No work today!<br>";
}

// NESTED IF STATEMENTS
$username = "john";
$password = "secret";
$isActive = true;

if ($username == "john") {
    if ($password == "secret") {
        if ($isActive) {
            echo "Login successful<br>";
        } else {
            echo "Account is inactive<br>";
        }
    } else {
        echo "Wrong password<br>";
    }
} else {
    echo "Username not found<br>";
}

// TERNARY OPERATOR (short if-else)
$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status . "<br>";

// Nested ternary
$score = 75;
$grade = ($score >= 90) ? "A" : (($score >= 80) ? "B" : (($score >= 70) ? "C" : "F"));
echo "Grade: $grade<br>";

// NULL COALESCING OPERATOR (??)
$name = $_GET['name'] ?? 'Guest';
echo "Hello, $name<br>";

// NULL COALESCING ASSIGNMENT OPERATOR (??=)
$username = null;
$username ??= 'Anonymous';
echo "Username: $username<br>";

// SPACESHIP OPERATOR WITH IF
$a = 5;
$b = 10;

$result = $a <=> $b;
if ($result === -1) {
    echo "$a is less than $b<br>";
} elseif ($result === 0) {
    echo "$a is equal to $b<br>";
} elseif ($result === 1) {
    echo "$a is greater than $b<br>";
}

// IF WITH FUNCTIONS
function isEven($num) {
    return $num % 2 == 0;
}

$number = 7;
if (isEven($number)) {
    echo "$number is even<br>";
} else {
    echo "$number is odd<br>";
}

// IF WITH ARRAY
$fruits = ["apple", "banana", "orange"];

if (in_array("banana", $fruits)) {
    echo "Banana is in the array<br>";
}

if (count($fruits) > 0) {
    echo "Array has " . count($fruits) . " fruits<br>";
}

// IF WITH STRING FUNCTIONS
$str = "Hello World";

if (strlen($str) > 5) {
    echo "String is longer than 5 characters<br>";
}

if (str_contains($str, "World")) {
    echo "String contains 'World'<br>";
}

if (str_starts_with($str, "Hello")) {
    echo "String starts with 'Hello'<br>";
}

if (str_ends_with($str, "World")) {
    echo "String ends with 'World'<br>";
}

// IF WITH EMPTY() AND ISSET()
$var1 = "";
$var2 = null;
$var3 = 0;
$var4 = "hello";
$var5 = [];

if (empty($var1)) {
    echo "var1 is empty<br>";
}

if (is_null($var2)) {
    echo "var2 is null<br>";
}

if (isset($var4)) {
    echo "var4 is set<br>";
}

if (!isset($var6)) {
    echo "var6 is not set<br>";
}

if (empty($var5)) {
    echo "var5 is empty array<br>";
}

// IF WITH TYPE CHECKING
$value1 = 42;
$value2 = "42";
$value3 = 3.14;
$value4 = "hello";

if (is_int($value1)) {
    echo "value1 is integer<br>";
}

if (is_string($value2)) {
    echo "value2 is string<br>";
}

if (is_float($value3)) {
    echo "value3 is float<br>";
}

if (is_numeric($value2)) {
    echo "value2 is numeric<br>";
}

if ($value1 === $value2) {
    echo "value1 and value2 are identical<br>";
} else {
    echo "value1 and value2 are not identical<br>";
}

// IF WITH MULTIPLE CONDITIONS COMBINED
$username = "admin";
$password = "12345";
$ip = "192.168.1.1";
$isBlocked = false;

if (($username == "admin" || $username == "root") && $password == "12345" && !$isBlocked) {
    echo "Access granted<br>";
} else {
    echo "Access denied<br>";
}

// SWITCH STATEMENT (alternative to multiple if-elseif)
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of work week<br>";
        break;
    case "Friday":
        echo "Almost weekend<br>";
        break;
    case "Saturday":
    case "Sunday":
        echo "Weekend!<br>";
        break;
    default:
        echo "Midweek day<br>";
}

// MATCH EXPRESSION (PHP 8+ - alternative to switch)
$statusCode = 404;

$message = match ($statusCode) {
    200, 201 => "Success",
    400, 404 => "Client error",
    500, 503 => "Server error",
    default => "Unknown status"
};
echo "Message: $message<br>";

// IF WITH LOGICAL OPERATORS EXAMPLES
$temperature = 25;
$sunny = true;
$windy = false;

// AND (&&)
if ($temperature > 20 && $sunny) {
    echo "Good weather for swimming<br>";
}

// OR (||)
if ($temperature < 10 || $windy) {
    echo "Wear a jacket<br>";
}

// NOT (!)
if (!$windy) {
    echo "It's not windy<br>";
}

// XOR (exclusive or)
if ($sunny xor $windy) {
    echo "Either sunny or windy, but not both<br>";
}

// Combined
if (($temperature > 15 && $sunny) || ($temperature > 25 && !$windy)) {
    echo "Pleasant weather<br>";
}

// IF WITH TERNARY IN ECHO
$isLoggedIn = true;
echo "Welcome " . ($isLoggedIn ? "back" : "guest") . "<br>";

$score = 65;
echo "You " . ($score >= 60 ? "passed" : "failed") . " the exam<br>";

// ALTERNATIVE SYNTAX (for templates)
$isAdmin = true;
$username = "John";

?>

<?php if ($isAdmin): ?>
    <div>Welcome Admin <?php echo $username; ?></div>
<?php elseif ($username == "John"): ?>
    <div>Welcome John (regular user)</div>
<?php else: ?>
    <div>Welcome Guest</div>
<?php endif; ?>
