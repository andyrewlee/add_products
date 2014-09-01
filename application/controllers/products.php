<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
    public function index()
    {
        $product = new Product();
        $manufacturer = new Manufacturer();
        $products_array = $product->get()->all_to_array();
        $output = array();

        foreach($products_array as $key => $value)
        {
            $this_manufacturer = $manufacturer->where('id', $value['manufacturer_id'])->get()->all_to_array();
            $manufacturer_name = $this_manufacturer[0]['name'];
            $output[$key]['manufacturer_name'] = $manufacturer_name;
            $output[$key]['id'] = $value['id'];
            $output[$key]['name'] = $value['name'];
            $output[$key]['price'] = $value['price'];
            $output[$key]['created_at'] = $value['created_at'];
        }

        $products['products'] = $output;
        $this->load->view('products_index', $products);
    }
    public function add()
    {
        $post_data = $this->input->post();
      
        $manufacturer = new Manufacturer();
        $this_manufacturer = $manufacturer->where('name', $post_data["manufacturer"])->get()->all_to_array();
      
        $product = new Product();
        $product->manufacturer_id = $this_manufacturer[0]['id'];
        $product->name = $post_data['product_name'];
        $product->price = $post_data['price'];
        $product->description = $post_data['description'];
        $product->save();
        redirect('/products/index');
    }
    public function update($id)
    {
        $update_data = $this->input->post();

        $manufacturer = new Manufacturer();
        $this_manufacturer = $manufacturer->where('name', $update_data["manufacturer"])->get()->all_to_array();

        $product = new Product($id);
        $product->manufacturer_id = $this_manufacturer[0]['id'];
        $product->name = $update_data['product_name'];
        $product->price = $update_data['price'];
        $product->description = $update_data['description'];
        $product->save();
        redirect('/products/index');   
    }
    public function show($id)
    {
        $product = new Product($id);
        $manufacturer = new Manufacturer();
        $this_product = $product->all_to_array();
        
        $manufacturer_info = $manufacturer->where('id', $this_product[0]['manufacturer_id'])->get()->all_to_array();
        $this_manufacturer = $manufacturer_info[0];
        $show_product = $this_product[0];

        $output = array();
        $output['manufacturer'] = $this_manufacturer;
        $output['product'] = $show_product;
      
        $this->load->view('products_show', $output);
    }

    public function destroy($id)
    {
        $product = new Product($id);
        $product->delete();
        redirect('/products/index');
    }
}
