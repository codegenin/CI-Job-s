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
 * Jobs Model Class
 */
class Jobs_model extends CI_Model {

    /**
     * Constructor
     */
    function  __construct()
    {
        parent::__construct();
    }

    /**
     * Get Listings
     *
     * Get the job listing either all or by category.
     * 
     * @param string $category
     * @param int $num
     * @return string
     */
    function get_listings($category)
    {
        $data = array();

        // Check what jobs to be loaded.
        // is it by category?
        if ($category) {
            $options = array('category' => $category);
            $this->db->order_by('id', 'desc');
            $query = $this->db->get_where('jobs', $options);

        // or just load all jobs available.
        } else {
            $this->db->order_by('id', 'desc');
            $query = $this->db->get('jobs');
        }

        // Load jobs listings.
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }

        // Free temporary result in memory.
        $query->free_result();

        return $data;
    }

    /**
     * Get Details
     *
     * Get the job listing details depending on job id.
     *
     * @param int $id
     * @return string
     */
    function get_details($id)
    {
        $data = array();

        $options = array('id' => $id);
        $query = $this->db->get_where('jobs', $options, 1);

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
            $data = $row;
            }
        }

        // Free up temporary memory.
        $query->free_result();
    
        return $data;
    }

    /**
     * Submimt Listings
     *
     * Performs form validation and submits the job listing if there are no errors.
     *
     * @access public
     */
    function submit_listing()
    {
        $this->form_validation->set_rules('title', 'Title', 'required|max_length[250]|htmlspecialchars');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('body', 'Job Description', 'required|htmlspecialchars');
        $this->form_validation->set_rules('type', 'Job Type', 'required|max_length[30]');
        $this->form_validation->set_rules('location', 'Location', 'required|max_length[100]');
        $this->form_validation->set_rules('company', 'Your/Company Name', 'required|max_length[100]');
        $this->form_validation->set_rules('url', 'URL', 'max_length[100]|prep_url');
        $this->form_validation->set_rules('email', 'Email', 'required|max_length[100]|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('add');
        } else {
            $data = array(
                'title'     =>  $this->input->post('title'),
                'category'  =>  $this->input->post('category'),
                'body'      =>  $this->input->post('body'),
                'type'      =>  $this->input->post('type'),
                'location'  =>  $this->input->post('location'),
                'company'   =>  $this->input->post('company'),
                'url'       =>  $this->input->post('url'),
                'email'     =>  $this->input->post('email'),
                'ipaddress' =>  $this->input->ip_address(),
                'posted'    =>  time()
            );

            // Insert data into DB.
            $this->db->insert('jobs', $data);

            // And back to job listings page.
            redirect('jobs/listings');
        }
    }

}
/* End of file jobs_model.php */
/* Location: ./application/models/jobs_model.php */
?>
