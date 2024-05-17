<?php include '../config.php'; ?>
<?php include '../header-projects.php'; ?>

<div class="sql-page pb-5">
    <div class="mainheading">
        <h2>SQL</h2>
    </div>
<div class="container mt-5">
    <p>If you want to check Database please <a href="../DB/employees.php">click</a> here.</p>
    <!-- Section 1 -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section1">SQL ?</button>
            </h5>
        </div>
        <div id="section1" class="collapse">
            <div class="card-body">
                "Structured Query Language" -  used to communicate with Database.
                Fetching data from Db  and manipulating the data in Db (like update...)
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section2">Basic SQL Statements</button>
            </h5>
        </div>
        <div id="section2" class="collapse">
            <div class="card-body">
                <ul>
                    <li>select</li>
                    <li>insert</li>
                    <li>update</li>
                    <li>delete</li>
                    <li>drop</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section3"> Create Database ?</button>
            </h5>
        </div>
        <div id="section3" class="collapse">
            <div class="card-body">
                <pre>create DATABASE myprojects;</pre>
            </div>
        </div>
    </div>

    

    <!-- Section 4 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section4">Select DB and then Create a Table ? </button>
            </h5>
        </div>
        <div id="section4" class="collapse">
            <div class="card-body">
                 <pre>
                    use myprojects;
                    create table employees(
                        emp_id int PRIMARY KEY,
                        first_namme varchar(50),
                        last_name varchar(50),
                        email varchar(100),
                        salary int(10)
                        );
                 </pre>
            </div>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section5">Change table column constraints? </button>
            </h5>
        </div>
        <div id="section5" class="collapse">
            <div class="card-body">
                 <pre>
                    ALTER TABLE `employees` CHANGE `emp_id` `emp_id` INT(11) NOT NULL AUTO_INCREMENT;
                 </pre>
            </div>
        </div>
    </div>

    <!-- Section 6 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section6">Change Column Name ? </button>
            </h5>
        </div>
        <div id="section6" class="collapse">
            <div class="card-body">
                 <pre>
                    ALTER TABLE `employees` CHANGE `first_namme` `first_name` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;
                 </pre>
            </div>
        </div>
    </div>

    <!-- Section 7 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section7">Insert new record in `employees` table ? </button>
            </h5>
        </div>
        <div id="section7" class="collapse">
            <div class="card-body">
                 <pre>
                 insert into employees (first_name,last_name,email,salary) values ('srikanth','aare','srikanth.aare@gmail.com',10000);
                 </pre>
            </div>
        </div>
    </div>

     <!-- Section 8 -->
     <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section8">Insert multiple records in `employees` table ? </button>
            </h5>
        </div>
        <div id="section8" class="collapse">
            <div class="card-body">
                 <pre>
                 insert into employees (first_name,last_name,email,salary) values ('srinu','aare','srinu.aare@gmail.com',20000), 
                 ('ram','jakkula','ram.jakkula@gmail.com',30000);
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 9 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section9">Select records from `employees` table ? </button>
            </h5>
        </div>
        <div id="section9" class="collapse">
            <div class="card-body">
                 <pre>
                 select * from `employees`;
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 10 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section10">Update Ramprasad firstname as `ramprasad` in employees table ? </button>
            </h5>
        </div>
        <div id="section10" class="collapse">
            <div class="card-body">
                 <pre>
                     update `employees` set first_name = 'ramprasad' where first_name = 'ram';
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 11 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section11">Delete 'Aare Srikanth' record from employees table ? </button>
            </h5>
        </div>
        <div id="section11" class="collapse">
            <div class="card-body">
                 <pre>
                     delete from `employees` where first_name = 'srikanth' and last_name='aare';
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 12 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section12">Delete 'Employees' table ? </button>
            </h5>
        </div>
        <div id="section12" class="collapse">
            <div class="card-body">
                 <pre>
                     drop table `employees`;
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <div class="inner-heading">
        <h2> -- ADVANCED -- </h2>
    </div>

    <!-- Section 13 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section13">Select distinct first name from `employees` table ? </button>
            </h5>
        </div>
        <div id="section13" class="collapse">
            <div class="card-body">
                 <pre>
                     select distinct first_name from `employees`;
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 14 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section14"> Display 'email ID' and 'salary' of `aare srikanth` ? </button>
            </h5>
        </div>
        <div id="section14" class="collapse">
            <div class="card-body">
                 <pre>
                     select email,salary from `employees` where first_name='srikanth' and last_name='aare';
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 15 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section15"> Select first name, last name and salary of all employees whose fisrt name starts with "S" ? </button>
            </h5>
        </div>
        <div id="section15" class="collapse">
            <div class="card-body">
                 <pre>
                     select first_name,last_name,salary from `employees` where first_name like 's%';
                     <br>
                     <strong>Note :</strong><span>Here 'Like' is a Pattern Matching Operator</span>
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 16 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section16"> Aggregate Functions ? </button>
            </h5>
        </div>
        <div id="section16" class="collapse">
            <div class="card-body">
                 <pre>
                     Aggregate functions are used to perform calculation on a set of values and return a single value.
                     Here are some commonly used aggregate functions in SQL:
                     1. MIN 
                     2. MAX 
                     3. SUM 
                     4. AVG 
                     5. COUNT 
                     6. COUNT(*)
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 17 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section17"> Display max salary of an employee in `employees` table ? </button>
            </h5>
        </div>
        <div id="section17" class="collapse">
            <div class="card-body">
                 <pre>
                     select max(salary) from `employees`;
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 18 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section18"> Display avg salary of an employee in `employees` table ? </button>
            </h5>
        </div>
        <div id="section18" class="collapse">
            <div class="card-body">
                 <pre>
                     select avg(salary) from `employees`;
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 19 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section19"> Total number of rows in `employees` table ? </button>
            </h5>
        </div>
        <div id="section19" class="collapse">
            <div class="card-body">
                 <pre>
                     select count(*) from `employees`;
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 20 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section20"> Display the minimum salary of an employee whose name starts with "S" ? </button>
            </h5>
        </div>
        <div id="section20" class="collapse">
            <div class="card-body">
                 <pre>
                     select min(salary) from `employees` where first_name like 's%';
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 21 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section21"> "GROUP BY" clause ? </button>
            </h5>
        </div>
        <div id="section21" class="collapse">
            <div class="card-body">
                 <pre>
                 The GROUP BY clause will gather all of the rows together that contain data in the specified column(s)
                  and will allow aggregate functions to be performed on the one or more columns.
                 </pre>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section 22 -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#section22"> How to copy a row and insert in same table with a autoincrement field in MySQL? </button>
            </h5>
        </div>
        <div id="section22" class="collapse">
            <div class="card-body">
                 <pre>
                        insert into users (`name`, `email`, `password`) select `name`, `email`,`password` from users where id = 2;
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
