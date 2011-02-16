<?php
/**
 * CodeIgniter Job's
 *
 * A Sample Application using CI 2.0.0
 *
 * @author James Louie Puro a.k.a 'CodeGenin'
 * @version 0.1
 */

//------------------------------------------------------------------------------/

/**
 * Job Details View File
 */

    $this->load->view('header');
?>

<?php
    if ($details) {
?>

<div class="grid_11">
    <h2><?php echo $details['title']; ?></h2>
    <p class="miscinfo">

    <?php
    if ($details['url']) { ?>
        <strong>Company:</strong> <a href="<?php echo $details['url']; ?>"><?php echo $details['company']; ?></a><br />
        <?php
    }
    else { ?>
        <strong>Company:</strong> <?php echo $details['company']; ?><br />
        <?php
    }
    ?>

    <strong>Location:</strong> <?php echo $details['location']; ?>
    <br />
    <strong>Type:</strong> <?php echo $details['type']; ?>
    </p>

    <div class="maininfo">
        <p><?php echo nl2br($details['body']); ?></p>
        <p>&nbsp;</p>
        <p>To apply, please contact us at <a href="mailto:<?php echo $details['email']; ?>"><?php echo $details['email']; ?></a>.</p>
    </div>

</div>

    <?php
}

else {

    echo '<p>Listing not found.</p>';

}


$this->load->view('sidebar');
$this->load->view('footer');

# End of file /views/details.php
?>