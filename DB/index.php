<?php include '../config.php'; ?>
<?php include '../header-projects.php'; ?>
    
   <div class="db-page pb-5">
        <div class="mainheading">
            <h2>List of Tables</h2>
        </div>
        <div class="container mt-5">
            <input type="text" id="searchInput" placeholder="Search for names..." onkeyup="searchTable()" />
            <table class="table table-bordered table-hover table-condensed" id="myTable">
                <thead>
                    <tr>
                        <th title="SNO">SNO</th>
                        <th title="Name">Table Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="right">1</td>
                        <td><a href="employees.php">Employees</a></td>
                    </tr>
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
