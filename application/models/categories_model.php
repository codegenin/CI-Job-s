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
 * Categories Model Class
 */
class Categories_model extends CI_Model {

    /**
     * Constructor
     */
    function  __construct()
    {
        parent::__construct();
    }

    /**
     * Get Categories
     *
     * Retrived all categories in the DB.
     *
     * @return string
     */
    function get_categories()
    {
        $data = array();

        $this->db->order_by('id', 'asc');
        $query = $this->db->get('categories');

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
            $data[] = $row;
            }
        }


        $query->free_result();

        return $data;
    }

    /**
     * Get Category
     *
     * Use to get the category details.
     *
     * @param int $id
     * @return string
     */
    function get_category($id) {
        $data = array();

	$options = array('id' => $id);
	$query = $this->db->get_where('categories', $options, 1);

	if ($query->num_rows() > 0) {
		foreach ($query->result_array() as $row) {
			$data = $row;
		}
	}

        // Free temporary result in memory.
	$query->free_result();

	return $data;
    }

}
/* End of file categories_model.php */
/* Location: ./application/models/categories_model.php */
?>
