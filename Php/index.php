<?php include '../config.php'; ?>
<?php include '../header-projects.php'; ?>

<div class="react-page pb-5">
    <div class="mainheading">
        <h2>PHP</h2>
    </div>
<div class="container mt-5">
    
    <!-- Section 1 -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section1">Reverse a String ?</button>
            </h5>
        </div>
        <div id="section1" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                function reverseString($str) {
                    return strrev($str);
                }

                // Test the function
                $input = "Hello, World!";
                $output = reverseString($input);
                echo $output;  // Outputs: "!dlroW ,olleH"
                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 2 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section2">Find the Largest Number in an Array ?</button>
            </h5>
        </div>
        <div id="section2" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    function findLargestNumber($arr) {
                        return max($arr);
                    }

                    // Test the function
                    $numbers = [3, 8, 1, 6, 2, 9, 4];
                    $largestNumber = findLargestNumber($numbers);
                    echo $largestNumber;  // Outputs: 9
                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 3 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section3">Check if a String is Palindrome ?</button>
            </h5>
        </div>
        <div id="section3" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    function isPalindrome($str) {
                        $cleanStr = strtolower(preg_replace('/[^a-z0-9]/', '', $str));
                        return $cleanStr === strrev($cleanStr);
                    }

                    // Test the function
                    $input1 = "A man, a plan, a canal, Panama!";
                    $input2 = "Hello, World!";
                    echo isPalindrome($input1) ? "Palindrome" : "Not a Palindrome";  // Outputs: Palindrome
                    echo isPalindrome($input2) ? "Palindrome" : "Not a Palindrome";  // Outputs: Not a Palindrome

                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 4 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section4">Calculate Factorial of a Number ?</button>
            </h5>
        </div>
        <div id="section4" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    Method 1 :
                    function factorial($n) {
                        if ($n <= 1) {
                            return 1;
                        } else {
                            return $n * factorial($n - 1);
                        }
                    }

                    // Test the function
                    $number = 5;
                    $result = factorial($number);
                    echo $result;  // Outputs: 120 (because 5! = 5 * 4 * 3 * 2 * 1 = 120)

                    Method 2 :

                    function factorialIterative($n) {
                        $result = 1;
                        for ($i = 1; $i <= $n; $i++) {
                            $result *= $i;
                        }
                        return $result;
                    }

                    // Test the function
                    $number = 5;
                    $result = factorialIterative($number);
                    echo $result;  // Outputs: 120 (because 5! = 5 * 4 * 3 * 2 * 1 = 120)

                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 5 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section5">Check for Anagrams ?</button>
            </h5>
        </div>
        <div id="section5" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                
                    function areAnagrams($str1, $str2) {
                        $str1 = str_split(strtolower($str1));
                        $str2 = str_split(strtolower($str2));

                        $charCount1 = count($str1);
                        $charCount2 = count($str2);
                        
                        if($charCount1 != $charCount2){
                            return false;
                        }
                        
                        sort($str1);
                        sort($str2);
                        
                        for($i=0;$i<$charCount1;$i++){
                            if($str1[$i] != $str2[$i])
                            return false;
                        }
                        
                        return true;

                    }

                    // Test the function
                    $string1 = "Listen";
                    $string2 = "Silent";
                    echo areAnagrams($string1, $string2) ? "Anagrams" : "Not Anagrams";  // Outputs: Anagrams


                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 6 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section6">Remove Duplicates from an Array ?</button>
            </h5>
        </div>
        <div id="section6" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                Method 1 :
                    function removeDuplicates($arr) {
                        $uniqueArray = [];
                        foreach ($arr as $value) {
                            if (!in_array($value, $uniqueArray)) {
                                $uniqueArray[] = $value;
                            }
                        }
                        return $uniqueArray;
                    }

                    // Test the function
                    $numbers = [1, 2, 3, 4, 2, 3, 5, 6];
                    $result = removeDuplicates($numbers);
                    print_r($result);  // Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

                    Method 2 :

                    function removeDuplicates($arr) {
                        $uniqueArray = array_unique($arr);
                        return $uniqueArray;
                    }

                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 7 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section7">Find the Intersection of Two Arrays ?</button>
            </h5>
        </div>
        <div id="section7" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    function arrayIntersection($arr1, $arr2) {
                        return array_intersect($arr1, $arr2);
                    }

                    // Test the function
                    $array1 = [1, 2, 3, 4, 5];
                    $array2 = [3, 4, 5, 6, 7];
                    $result = arrayIntersection($array1, $array2);
                    print_r($result);  // Outputs: Array ( [0] => 3 [1] => 4 [2] => 5 )

                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 8 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section8">Find the Fibonacci Series ?</button>
            </h5>
        </div>
        <div id="section8" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    function fibonacci($n) {
                        $fibonacciSeries = [];
                        $fibonacciSeries[0] = 0;
                        $fibonacciSeries[1] = 1;

                        for ($i = 2; $i < $n; $i++) {
                            $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
                        }

                        return $fibonacciSeries;
                    }

                    // Test the function
                    $terms = 10;
                    $result = fibonacci($terms);
                    print_r($result);  // Outputs: Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 2 [4] => 3 [5] => 5 [6] => 8 [7] => 13 [8] => 21 [9] => 34 )

                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 9 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section9">Check if a Number is Prime ?</button>
            </h5>
        </div>
        <div id="section9" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    function isPrime($num) {
                        if ($num <= 1) {
                            return false;
                        }

                        for ($i = 2; $i <= sqrt($num); $i++) {
                            if ($num % $i == 0) {
                                return false;
                            }
                        }

                        return true;
                    }

                    // Test the function
                    $number1 = 7;
                    $number2 = 12;
                    echo isPrime($number1) ? "$number1 is Prime" : "$number1 is Not Prime";  // Outputs: 7 is Prime
                    echo isPrime($number2) ? "$number2 is Prime" : "$number2 is Not Prime";  // Outputs: 12 is Not Prime

                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 10 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section10">Reverse an Array ?</button>
            </h5>
        </div>
        <div id="section10" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    function reverseArray($arr) {
                        $reversedArray = [];
                        $length = count($arr);

                        for ($i = $length - 1; $i >= 0; $i--) {
                            $reversedArray[] = $arr[$i];
                        }

                        return $reversedArray;
                    }

                    // Test the function
                    $array = [1, 2, 3, 4, 5];
                    $result = reverseArray($array);
                    print_r($result);  // Outputs: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )


                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 11 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section11">Count the Number of Vowels in a String ?</button>
            </h5>
        </div>
        <div id="section11" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                        function countVowels($str) {
                            $vowels = ['a', 'e', 'i', 'o', 'u'];
                            $count = 0;
                            
                            foreach (str_split(strtolower($str)) as $char) {
                                if (in_array($char, $vowels)) {
                                    $count++;
                                }
                            }

                            return $count;
                        }

                        // Test the function
                        $string = "Hello, World!";
                        $result = countVowels($string);
                        echo $result;  // Outputs: 3

                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 12 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section12">Check for a Balanced Parentheses String ?</button>
            </h5>
        </div>
        <div id="section12" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    function isBalanced($str) {
                        $stack = [];
                        $matchingPairs = [
                            '(' => ')',
                            '[' => ']',
                            '{' => '}'
                        ];

                        foreach (str_split($str) as $char) {
                            if (in_array($char, array_keys($matchingPairs))) {
                                array_push($stack, $char);
                            } elseif (in_array($char, array_values($matchingPairs))) {
                                if (empty($stack) || $matchingPairs[array_pop($stack)] != $char) {
                                    return false;
                                }
                            }
                        }

                        return empty($stack);
                    }

                    // Test the function
                    $string1 = "({[()]})";
                    $string2 = "({[()})";
                    echo isBalanced($string1) ? "Balanced" : "Not Balanced";  // Outputs: Balanced
                    echo isBalanced($string2) ? "Balanced" : "Not Balanced";  // Outputs: Not Balanced

                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 13 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section13">Find the Sum of Digits in a Number ?</button>
            </h5>
        </div>
        <div id="section13" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    function sumOfDigits($num) {
                        $sum = 0;
                        while ($num != 0) {
                            $sum += $num % 10;
                            $num = (int)($num / 10);
                        }
                        return $sum;
                    }

                    // Test the function
                    $number = 12345;
                    $result = sumOfDigits($number);
                    echo $result;  // Outputs: 15 (because 1 + 2 + 3 + 4 + 5 = 15)


                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

     <!-- Section 14 -->
     <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section14">Remove Leading and Trailing Whitespaces ?</button>
            </h5>
        </div>
        <div id="section14" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    function trimWhitespace($str) {
                        return trim($str);
                    }

                    // Test the function
                    $string = "  Hello, World!  ";
                    $result = trimWhitespace($string);
                    echo $result;  // Outputs: "Hello, World!"
                 </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 15 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section15">Find the Longest Common Prefix ?</button>
            </h5>
        </div>
        <div id="section15" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                        function longestCommonPrefix($strs) {
                        if (empty($strs)) {
                            return "";
                        }

                        $prefix = $strs[0];
                        $count = count($strs);

                        for ($i = 1; $i < $count; $i++) {
                            while (strpos($strs[$i], $prefix) !== 0) {
                                $prefix = substr($prefix, 0, -1);
                                if (empty($prefix)) {
                                    return "";
                                }
                            }
                        }

                        return $prefix;
                    }

                    // Test the function
                    $array1 = ["flower", "flow", "flight"];
                    $array2 = ["dog", "racecar", "car"];
                    echo longestCommonPrefix($array1);  // Outputs: "fl"
                    echo longestCommonPrefix($array2);  // Outputs: ""

                 </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 16 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section16">Reverse Words in a String ?</button>
            </h5>
        </div>
        <div id="section16" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                        function reverseWords($str) {
                        return implode(' ', array_reverse(explode(' ', $str)));
                        }

                        // Test the function
                        $string = "Hello World!";
                        echo reverseWords($string);  // Outputs: "World! Hello"
                 </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->
                    <div class="pd-5 mt-5">
                    <center>
                        <h2>-- Interview Questions & Answers --</h2>
                    </center>
                    </div>

                    <!-- Q Section1 -->
    <div class="card mt-5">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection1">Interfaces ?</button>
            </h5>
        </div>
        <div id="qsection1" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                   > Interfaces defines a set of methods that a class must implement.

                   > Interfaces can only have abstract methods.

                   > A class can implement multiple interfaces, 
                     but it must provide implementations for all methods declared in those interfaces.


                    Ex : 
                                interface Greeting {
                                    public function sayHello();
                                }

                                class MyClass implements Greeting {
                                    public function sayHello() {
                                        echo "Hello, ";
                                    }
                                }

                                $obj = new MyClass();
                                $obj->sayHello();  // Outputs: "Hello, "
                 </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

      <!-- Q Section2 -->
      <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection2">Reference ?</button>
            </h5>
        </div>
        <div id="qsection2" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                   > Solid Principles <a target="_blank" href="https://dev.to/devlinaung/solid-principles-in-php-363j"><button class="btn mybtn" >Go to Website </button></a>

                 </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Q Section3 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection3">Inheritance ?</button>
            </h5>
        </div>
        <div id="qsection3" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                   Definition :
                  > A subclass can access public and protected properties and methods from the parent class.

                  Real Time Example :

                   Get Domain Details in each and every page of the application.

                   Parent Class :

                   class ModProjectrequestformHelper {      // default access modifier is public

                        $hostnameStr = $_SERVER['HTTP_HOST'];
                        $hostnameStr = str_replace("www.","",$hostnameStr);
                        $hostnameArr = explode(".",$hostnameStr);
                        $domain = $hostnameArr[0];
                        
                        mb_internal_encoding('UTF-8');
                        $content_params =JComponentHelper::getParams( 'com_userprofile' );
                        $url=$content_params->get( 'webservice' ).'/api/RegistrationAPI/GetDomainDetails?ActivationKey=123456789&DomainName='.$domain;
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
                        $result=curl_exec($ch);
                        
                        $res = json_decode($result);
                        return $res->Data;

                   }

                   // getting Domain Details from the API

                   // include the required file
                   require_once JPATH_ROOT.'/modules/mod_projectrequestform/helper.php';

                   Subclass :

                   class Controlbox extends ModProjectrequestformHelper {   // extend keyword

                        public function getCompanyId()
                        {
                            
                            $domainDetails = parent::getDomainDetails();    // parent keyword
                            $CompanyId = $domainDetails[0]->CompanyId;
                            return $CompanyId;
                        
                        }

                   }


                 </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Q Section4 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection4">Type Of Errors ?</button>
            </h5>
        </div>
        <div id="qsection4" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                   Warnings :
                   These errors will not stop the script execution.
                  > 

                  Real Time Example :

                  Warning: include(../implements/htmlimplements.php): failed to open stream: 
                  No such file or directory in D:\XAMPP\htdocs\myprojects\HTML\index.php on line 5

                  Fatal Errors :
                  These errors will stop the script execution.  

                  Real Time Example :

                  Fatal error: Uncaught Error: Class 'HTML' not found in D:\XAMPP\htdocs\myprojects\HTML\index.php:8 
                  Stack trace: #0 {main} thrown in D:\XAMPP\htdocs\myprojects\HTML\index.php on line 8


                 </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Q Section5 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection5">Abstract Classes ?</button>
            </h5>
        </div>
        <div id="qsection5" class="collapse">
            <div class="card-body">
            <pre>
                <code>

                    > An abstract class is a class that contains at least one abstract method. 
                      An abstract method is a method that is declared, but not implemented in the code.

                    > An abstract class or method is defined with the "abstract" keyword.

                    > abstract classes can not be instantiated like interfaces.

                    Real Time Example :

                        
                        abstract class employees {
                            abstract public function SetEmployeeId();           // instead of emp_id take Boxon wrhs as setBoxonWrhsID
                            public function EmployeeDetails(){
                                return "We will get the employee details<br>";   // instead of EmployeeDetails take shipment_details, invoice_details etc
                            }
                        }

                        class ItEmployees extends employees{
                            public function SetEmployeeId() {    
                                echo "IT_EmployeeID<br>";
                            }

                        }

                        class NonItEmployees extends employees{
                            public function SetEmployeeId() {
                                echo "NonIT_EmployeeID<br>";
                            }
                            
                        }

                        $ITemp = new ItEmployees();
                        echo $ITemp->EmployeeDetails();
                        echo $ITemp->SetEmployeeId();

                        $NonITemp = new NonItEmployees();
                        echo $NonITemp->EmployeeDetails();
                        echo $NonITemp->SetEmployeeId();


                 </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Q Section6 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection6">HTTP Status Codes ?</button>
            </h5>
        </div>
        <div id="qsection6" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    2XX  :
                    > 200 ok : The request has succeeded.

                    4XX :
                    > 400 Bad Request : The request could not be understood by the server. Request not following the rules.
                    > 401 Unauthorized : The request requires user authentication. Ex : Basic Authontication -> User need to pass Username and password.
                    > 403 Forbidden : the server understood the request from the client, but it refuses to authorize it due to some reasons.
                      Ex : Some resources are only accessable by premium users and restricted from free users. These restrictions are set by the server.
                    > 404 Not Found : The server has not found the Request URL. 
                    > 405 Method Not Allowed : The method specified in the Request-Line is not allowed for the resource.
                      Ex : The request URI made by using GET method but when we access it from POST methos this error will be generated.  

                    5XX :
                    > 500 Internal Server Error : 
                     Ex : These errors occur due to script errors,
                     Common script errors include syntax errors, database connection failures, or issues with file permissions. 
                     
                    > 503 Service Unavailable :
                     Ex : When user attemts to login more than the limit, the service is temporarily unavailable for that user.
                          After sometime the service will be available.
                    
                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Q Section7 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection7">Difference between GET and POST Methods ?</button>
            </h5>
        </div>
        <div id="qsection7" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    > Both GET and POST methods are used to transfer form data from client to server.

                    GET : 

                    > GET method sends the information through the request parameters appended in URL.
                    > We can send limited data.
                    > Less secure due to visibility in the URL.

                    POST :

                    > POST method sends the information via http header.
                    > We can send unlimited data.
                    > More secure.
                    
                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Q Section8 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection8">HTTP Methods ?</button>
            </h5>
        </div>
        <div id="qsection8" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    >   GET requests are used to retrieve resource data.
                    >   POST requests are used to create new resources.
                    >   PUT or PATCH requests are used to update existing resources.
                    >   DELETE requests are used to delete resources.
                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Q Section9 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection9">Php8 new features ?</button>
            </h5>
        </div>
        <div id="qsection9" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                >   Named Arguments : 
                    
                    PHP 8 introduced named arguments, allowing developers to pass arguments to functions based on parameter names, 
                    rather than their positions. This can make function calls more readable and less error-prone, 
                    especially for functions with many parameters.

                    Ex : 

                    function greet($name, $age, $city) {
                        echo "Hello $name! You are $age years old and from $city.";
                    }

                    // Using named arguments
                    greet( age: 30, city: 'New York', name: 'Johny');

                > Union types :

                  Functions allow parameters and return types to accept multiple types.

                  Ex: 

                    function square(int|float $num): float|int {
                        return $num * $num;
                    }

                    // Call the function with an integer
                    echo square(5); // Output: 25

                    // Call the function with a float
                    echo square(3.5); // Output: 12.25

                > Constructor Property Promotion :

                  Constructor Property Promotion is a feature introduced in PHP 8 that allows you to declare and initialize class properties 
                  directly in the constructor signature, reducing boilerplate code.

                Ex:

                class Person {
                    // Constructor property promotion
                    public function __construct(
                        public string $name,
                        public int $age,
                        public string $city = 'Unknown'
                    ) {}
                    
                    public function introduce(): string {
                        return "Hello, my name is {$this->name}, I am {$this->age} years old, and I live in {$this->city}.";
                    }
                }

                // Creating a new instance of the Person class
                $person = new Person(name: 'John', age: 30);

                // Outputting the introduction
                echo $person->introduce();

            > nullsafe operator (?->)
                
            The nullsafe operator (?->) was introduced in PHP 8 and provides a convenient way to access properties and methods of an object
            without worrying about null pointer exceptions. 

            Ex:

                class Address {
                    public function getCity(): ?string {
                        return "New York";
                    }
                }

                class Person {
                    public function getAddress(): ?Address {
                        return new Address();
                    }
                }

                // Create a new Person object
                $person = new Person();

                // Accessing city using nullsafe operator
                $city = $person?->getAddress()?->getCity();

                / Output the city
                echo "City: " . ($city ?? "Unknown");

            > Match Expression:

              The match expression, introduced in PHP 8, is similar to a switch statement but more concise and with stricter type checking. 

              Ex: 

                function getColorName($code) {
                    return match ($code) {
                        1 => "Red",
                        2 => "Green",
                        3 => "Blue",
                        default => "Unknown color",
                    };
                }



                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

     <!-- Q Section10 -->
     <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection10"> Php7 Features ?</button>
            </h5>
        </div>
        <div id="qsection10" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                Scalar Type Declarations: 

                PHP 7 introduced scalar type declarations, allowing developers to specify the expected data type (int, float, string, and bool)
                 for function parameters and return types.

                Return Type Declarations: 

                Similarly, PHP 7 added support for return type declarations, enabling developers to specify the data type of the value 
                returned by a function.

                Spaceship Operator (<=>): 

                PHP 7 introduced the spaceship operator (<=>), also known as the three-way comparison operator. 
                It returns 0 if both operands are equal, 1 if the left operand is greater, and -1 if the right operand is greater.
                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Q Section11 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection11"> Traits ?</button>
            </h5>
        </div>
        <div id="qsection11" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    > Trait contains set of methods that can be used in multiple classes. 
                    > Multiple inheritance can be achieved by using traits.
                    > "trait" keyword is used to declare a Trait.
                    > To use traits in classes we have to use "use" keyword.

                    Ex : 

                        trait message1 {
                            public function msg1() {
                                echo "OOP is fun! ";
                            }
                        }

                        class Welcome {
                            use message1;
                        }

                        $obj = new Welcome();
                        $obj->msg1();
                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Q Section12 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection12"> Caching  ?</button>
            </h5>
        </div>
        <div id="qsection12" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    
                    In PHP, caching can be achieved using various methods and techniques

                    > Using PHP's Built-in Caching Mechanisms:

                    Opcode Cache (OPcache): PHP has an inbuilt opcode cache like OPcache which caches compiled bytecode of PHP scripts in memory,
                    reducing the need to recompile the code on each request. OPcache is typically enabled and configured in your 
                    PHP configuration file (php.ini).

                    OPcache Configurations :

                        [opcache]
                        opcache.enable=1
                        opcache.memory_consumption=128
                        opcache.interned_strings_buffer=8
                        opcache.max_accelerated_files=4000
                        opcache.revalidate_freq=60
                        opcache.validate_timestamps=1

                    It increases the speed and performance of the application.

                    > Database Query Caching:

                    Some database systems, like MySQL, offer built-in query caching mechanisms. By enabling query caching,
                    you can cache the results of frequently executed database queries, reducing the load on the database server.

                    To enable Query Cache configure below settings in my.ini file

                    query_cache_type = ON;
                    query_cache_size = 64M;


                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Q Section13 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#qsection13"> header()  ?</button>
            </h5>
        </div>
        <div id="qsection13" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                    The header() function sends a raw HTTP header to a client.
                    It must be called before any actual output is sent to the browser.

                    Ex : 

                    > header('Content-Type: text/html'); -> setting the content type
                    > header('Location: https://example.com'); -> redirecting the browser
                    > header('Cache-Control: max-age=3600'); -> HTTP Caching Control
                    > header('Set-Cookie: user_id=12345; Expires=Wed, 21 Oct 2024 07:28:00 GMT;'); ->Setting Cookies

                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

</div>
</div>


<!-- Bootstrap JS and Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    var link=document.createElement("link");
    link.type="text/css";
    link.rel="stylesheet";
    link.href="css/style.css";  
    document.getElementsByTagName("head")[0].appendChild(link);
 </script>
</body>
</html>
