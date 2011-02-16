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
 * Job Listings View File
 */
    $this->load->view('header');

    // Check if there are job listings
    if ($listings) {
?>

    <div class="grid_11">
    <?php
        // Show number of jobs available converted in words in a category.
        if ($category) {
                echo '<h2>'  .$this->numbertowords->convert_number(count($listings)). ' Job\'s available in ' . $category['name'] . '</h2>';
        }
        // Show total number of jobs available converted in word.
        else {
                echo '<h2>There are ' .$this->numbertowords->convert_number(count($listings)). ' Job\'s Available</h2>';
        }
    ?>
<ol>

    <?php
        $counter = 0;
        foreach ($listings as $row) {
            $counter++;
    ?>

    <li<?php if ($counter == 2) { echo ' class="alt"'; $counter = 0; } ?>>
        <?php $segments = array('jobs', 'details', $row['slug']); ?>
        <a href="<?php echo site_url($segments); ?>">
           <span class="title"><?php echo $row['title']; ?></span>
         - <strong><?php echo $row['type']; ?> </strong>
        </a>
        
        <p><?php echo word_limiter($row['body'], 50)?></p>
        <?php
        $posted = $row['posted'];
        $current = time();
        ?>

       <span class="meta">
            <em>at <?php echo $row['company']; ?></em>
            | <em><?php echo $row['location']; ?></em>
            | <em><?php echo $this->timeinword->convert($posted, $current)?></em>
        </span>
    </li>
    <br />

    <?php 
        }
    ?>

</ol>
</div>

<?php
}

// There are no job listins available.
else {
?>
<div class="grid_11">
    <h2>No Job Listings Available.</h2>
    <p>There are currently no active listings available</p>
</div>
<?php    
}

// Load the sidebar and footer views.
$this->load->view('sidebar');
$this->load->view('footer');

/* End of file listings.php */
/* Location: ./application/views/listings.php */
?>
