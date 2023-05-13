<div id="short_label_form">
    <h1>Employee Search</h1>
           <br>
<form action="selectField" method="post">
Keyword:<br>
<input type="text" name="keyword" size="20" maxlength="40" value=""><br>
Field:<br>
<select name="field">
<option value="">Choose field:</option>
<option value="lastname">Last Name</option>
<option value="email">E-mail Address</option>
</select>
<input type="submit" value="Search" />
</form>
    </div>

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
