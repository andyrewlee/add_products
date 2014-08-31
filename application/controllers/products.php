<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
    public function index()
    {		
    		$product = new Product;
    		$products['products'] = $product->get()->all_to_array();
 
        $this->load->view('products_index', $products);
    }

    public function add()
    {
    	$post_data = $this->input->post();
    	
    	$product = new Product();
    	$product->name = $post_data['product_name'];
    	$product->price = $post_data['price'];
    	$product->description = $post_data['description'];
    	$product->created_at = date("Y-m-d H:i:s");
    	$product->updated_at = date("Y-m-d H:i:s");
    	$product->save();
    	redirect('/products/index');

    }

    public function destroy($id)
    {
    	$product = new Product($id);
    	$product->delete();
    	redirect('/products/index');
    }
}
