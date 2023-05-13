 <main>
          <li><a href="search2.php">Search by Keyword</a></li>
     <br /><br />
     
    <h1>Employee Search</h1>
           <form action="index.php" method="post" id="short_label_form" onsubmit="return verify">
               <input type="hidden" name="action" value="run_search" />

               <label>Last Name:</label>
               <input type="text" name="last_name" required />

               <input type="submit" value="Search" />
           </form>

    <h1>Results</h1>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
          
        </tr>
        <?php foreach ($employees as $employee): ?>
        <tr>
            <td><?php echo $employee['id'] ; ?></td>
            <td><?php echo $employee['firstname'] ." ". $employee['lastname']; ?></td>
            <td><?php echo $employee['email']; ?></td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="select_employee" >
                    <input type="hidden" name="lastname"
                        value="<?php echo $employee['name']; ?>" />
                    <input type="submit" value="Select">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
        </main>