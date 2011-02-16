<div class="grid_5">

    <div class="box">
        <h2>Post A Job</h2>
        <div class="utils"><a href="<?php echo site_url('jobs/add'); ?>">Add New</a></div>
    </div>

    <div class="box">
	<h2>Categories</h2>
        <div class="utils"><a href="<?php echo site_url('jobs/listings'); ?>">View All</a></div>
    </div>

    <ul>
    <?php
        // List all categories
        if ($categories) {
            foreach ($categories as $row) {
            $segments = array('jobs', 'category', $row['id']);
    ?>
        
        <li><a href="<?php echo site_url($segments); ?>"><span>&raquo;</span> <?php echo $row['name']; ?></a></li>

    <?php
        }
    }
    ?>
    </ul>

</div>
</div>