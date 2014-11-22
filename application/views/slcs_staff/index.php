<?php foreach ($staffs as $staff): ?>

    <h2><?php echo $staff['username'] ?></h2>
    <div class="main">
        <?php echo $staff['tfname'] ?>
    </div>
    <p><a href="slcs_staff/view/<?php echo $staff['username'] ?>">View Staff Profile</a></p>

<?php endforeach ?>