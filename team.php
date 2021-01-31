<?php
define( 'TITLE', "TEAM | Franklin's Fine Dining" );
include( './assets/includes/header.php' );
?>

<div id = 'team-members' class = 'cf'>
<h1>Our Team at Franklin</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
nostrud exercitation ullamco: <strong>The best food you've ever had. Ever </strong>
    </p>
    <hr>   

    <?php
        foreach ($teamMembers as $member) {
     ?>

        <div class="member">
         <img src="./assets/img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
         <h2><?php echo $member['name']; ?></h2>
         <p><?php echo $member['bio']; ?></p>
        </div><!--  end member -->

    <?php
        }
    ?>

</div> <!--  end team members -->

<hr>

<?php
include('./assets/includes/footer.php' );
?>