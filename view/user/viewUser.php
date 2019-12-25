<?php
    include "dashboard/dasboard.php";
?>
&nbsp;
<div class="container">
    <a href="index.php?action=view"><img src="view/user/img/back1.png" alt="" style="width:50px; height:50px;" class="mt-3 "></a>
    <a href="index2.php?action=add_form"><img src="view/user/img/user.png" alt="" style="width:50px; height:50px;" class="mt-3 float-right"></a>
    <h2 class="text-center text-primary">List Of Members</h2>
    <div class="row">
        <div class="col-12">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>User Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Height</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Club Id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                $id = 1;
                if (isset($data['viewUser'])) {
                    foreach ($data['viewUser'] as $result) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $result['username']; ?></td>
                                <td><?php echo $result['age']; ?></td>
                                <td><?php echo $result['gender']; ?></td>
                                <td><?php echo $result['height']; ?></td>
                                <td><?php echo $result['role']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['clubID']; ?></td>
                                <td>
                                    <a href="index2.php?action=editUser&id=<?php echo $result['userID']; ?>"><i class="material-icons text-success">edit</i></a>
                                    <a href="index2.php?action=delete&id=<?php echo $result['userID']; ?>" onclick="return confirm('Are you sure to delete it??')"><i class="material-icons text-danger">delete</i></a>
                                </td>
                            </tr>
                        </tbody>
                <?php
                        $id++;
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>