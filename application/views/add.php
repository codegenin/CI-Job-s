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
 * Add New Job View File
 */

    // Load the header view file.
    $this->load->view('header');
?>

<div class="grid_11">
    <h2>Add A New Job Listing</h2>
    
<?php
    $category_options = array();

    foreach ($categories as $row) {
        $category_options[$row['id']] = $row['name'];
    }

    // For the dropdown box selection.
    $type_options = array(
        'Full Time' => 'Full Time',
        'Part Time' => 'Part Time',
        'Freelance' => 'Freelance'
    );

    echo form_open('jobs/submit');
?>

    <?php echo form_error('title', '<p class="error">','</p>');?>
    <p>Title: <input type="text" name="title" size="50" value="<?php echo set_value('title'); ?>" /></p>
    <p>Category: <?php echo form_dropdown('category', $category_options); ?></p>
    <?php echo form_error('body', '<p class="error">','</p>');?>
    <p>Job Description:<br /><textarea name="body" rows="15" cols="75"><?php echo set_value('body'); ?></textarea></p>
    <p>Type: <?php echo form_dropdown('type', $type_options); ?></p>
    <?php echo form_error('location', '<p class="error">','</p>');?>
    <p>Location: <input type="text" name="location" size="50" value="<?php echo set_value('location'); ?>" /></p>


    <?php echo form_error('company', '<p class="error">','</p>');?>
    <p>Your/Company Name: <input type="text" name="company" size="50" value="<?php echo set_value('company'); ?>" /></p>
    <?php echo form_error('url', '<p class="error">','</p>');?>
    <p>URL: <input type="text" name="url" size="50" value="<?php echo set_value('url'); ?>" /></p>
    <?php echo form_error('email', '<p class="error">','</p>');?>
    <p>Email: <input type="text" name="email" size="50" value="<?php echo set_value('email'); ?>" /></p>


<input type="submit" value="Submit Listing" />

</form>
</div>

<?php
    $this->load->view('sidebar');
    $this->load->view('footer');

# End of file /views/add.php
?>