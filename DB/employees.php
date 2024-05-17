<?php 
    include '../config.php'; 
    include '../header-projects.php'; 
    include 'dbconfig.php';

    $sql = "select * from employees";
    $result = $conn->query($sql);

?>

<div class="db-page pb-5">
        <div class="mainheading">
            <h2>Employees Table</h2>
        </div>
        <div class="container mt-5">
            <input type="text" id="searchInput" placeholder="Search for names..." onkeyup="searchTable()" />
            <table class="table table-bordered table-hover table-condensed" id="myTable">
                <thead>
                    <tr>
                        <th>Employee ID (emp_id)</th>
                        <th>First Name (first_name)</th>
                        <th>Last Name (last_name)</th>
                        <th>Email (email)</th>
                        <th>Salary (slary)</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        // Fetch and print results
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr><td align="right" ><?=$row['emp_id']?></td>
                        <td><?=$row['first_name']?></td>
                        <td><?=$row['last_name']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['salary']?></td>
                        </tr>
                    <?php } }  ?>   

                </tbody>
            </table>
        </div>
</div>

<script>
    function searchTable() {
        let input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
<script>
    var link=document.createElement("link");
    link.type="text/css";
    link.rel="stylesheet";
    link.href="css/style.css";  
    document.getElementsByTagName("head")[0].appendChild(link);
 </script>
</body>
</html>
