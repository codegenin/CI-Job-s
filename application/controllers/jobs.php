<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
 * Jobs Application Controller Class
 */

class Jobs extends CI_Controller {

    /**
     * Constructor
     *
     * Sets the main title and enable the use of category variables globally.
     */
    function __construct()
    {
        parent::__construct();

        $data['title'] = 'Welcome to CodeIgniter Job\'s';

        // The categories is located at the sidebar section of the template
        // because of this, the categories should be called in the constructor function
        // to be accessible site wide.
        $data['categories'] = $this->categories_model->get_categories();

        //Let's load all our data variables.
        $this->load->vars($data);
    }

    function index()
    {
        // Redirect to listings function since we currently don't have
        // a main page yet ;-).
        $this->listings();
    }

    /**
     * Job Listings
     *
     * Get all jobs or jobs by category.
     *
     * @access public
     */
    function listings()
    {
        // Get all job listing using the jobs_model.php function get_listings.
        $data['listings'] = $this->jobs_model->get_listings($this->uri->segment(3));
        
        // Get the category job listings using categories_model.php function get_category.
        $data['category'] = $this->categories_model->get_category($this->uri->segment(3));

        // Load data variables in our view file.
        $this->load->view('listings', $data);
    }

    function category()
    {
        // Get all job listing using the jobs_model.php function get_listings.
        $data['listings'] = $this->jobs_model->get_listings($this->uri->segment(3));
        
        // Get the category job listings using categories_model.php function get_category.
        $data['category'] = $this->categories_model->get_category($this->uri->segment(3));

        $this->load->view('listings', $data);
    }

    /**
     * Details
     *
     * Get the details of each job.
     *
     * @access public
     */
    function details()
    {
        $data['details'] = $this->jobs_model->get_details($this->uri->segment(3));

        // Set page title using job listing title.
        $data['title'] = $data['details']['title'];
        
        $this->load->view('details', $data);
    }

    /**
     * Add New Job
     *
     * Load the add view template for adding new jobs.
     *
     * @access public
     */
    function add()
    {
        $this->load->view('add');
    }

    /**
     * Submit new job
     *
     * Performs job submission.
     *
     * @access public
     */
    function submit()
    {
        $this->jobs_model->submit_listing();
    }

}
/* End of file job.php */
/* Location: ./application/controllers/job.php */
?>