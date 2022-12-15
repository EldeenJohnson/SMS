<?php 
    $title = 'View Records';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php'; 
    require_once 'db/conn.php';
    $results=$crud->getRegistrants();

    //gets all Registrants
    ?>
    <br>
    <br>

    <table class="table table-striped">
        <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
        </thead>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $r['registrant_id']?></td>
                <td><?php echo $r['firstname']?></td>
                <td><?php echo $r['lastname']?></td>                
                <td><?php echo $r['name']?></td> <!--Gender type-->
                <td>
                    <a href = "view.php?id=<?php echo $r['registrant_id'] ?>" class = "btn btn-primary"> view </a>
                    <a href = "edit.php?id=<?php echo $r['registrant_id'] ?>" class = "btn btn-warning"> edit </a>
                    <a onclick="return confirm('Please Confirm Deletion, A deleted record cannot be recovered! ');"
                    href = "delete.php?id=<?php echo $r['registrant_id'] ?>" class = "btn btn-danger"> delete </a>
                </td>
            </tr>
        <?php } ?>
    </table>

<?php require_once 'includes/footer.php'; ?>