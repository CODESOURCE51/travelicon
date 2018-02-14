<?php
 class base_model extends CI_Model {
   function __construct() {
        parent::__construct();
        
    }
    //new
     function category_update($table,$fields,$category)
    {
    
    $this->db->where('cat_id', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
    function why_update($table,$fields,$category)
    {
    
    $this->db->where('why_id', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
	 function fee_update($table,$fields,$category)
    {
    
    $this->db->where('fee_id', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
    //new end
    function form_post($table,$fields)
    {
        if($this->db->insert($table,$fields)){
		return true;
		}
		
    }
    function day_post($table,$fields)
    {
        if($this->db->insert_batch($table,$fields)){
        return true;
        }
        
    }
	 function form_update($table,$fields,$category)
    {
	
	$this->db->where('book_id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
		}
		
    }
     function form_update1($table,$fields,$category)
    {
    
    $this->db->where('cat_id', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
    function form_update2($table,$fields,$category)
    {
    
    $this->db->where('gid', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
	 function img_update($table,$fields,$category)
    {
    
    $this->db->where('img_id', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
	function faculty_update($table,$fields,$category)
    {
    
    $this->db->where('f_id', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
	 function file_upload2($img,$tmp)
    {
        $image_path = 'package/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
    function books_upload($img,$tmp)
    {
        $image_path = 'department/';
        if(move_uploaded_file($tmp,$image_path.$img))
        return true;
    }
	 function news_file_upload($img,$tmp)
    {
        $image_path = 'uploads/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
	 function image_file_upload($img,$tmp)
    {
        $image_path = 'uploads/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
	 function faculty_file_upload($img,$tmp)
    {
        $image_path = 'faculty/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
     function gnews_file_upload($img,$tmp)
    {
        $image_path = 'news/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
    function sponsor_file_upload($img,$tmp)
    {
        $image_path = 'sponsor/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
    function album_file_upload($img,$tmp)
    {
        $image_path = 'album/';
        if(move_uploaded_file($tmp,$image_path.$img))
        return true;
    }
    function album_image_upload($img,$tmp)
    {
        $image_path = 'album/images/';
        if(move_uploaded_file($tmp,$image_path.$img))
        return true;
    }
    function slider_file_upload($img,$tmp)
    {
        $image_path = 'slider/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
	function subcategory_file_upload($img,$tmp)
    {
        $image_path = 'subcategory/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
	 function show_data($table,$fields,$condition)
    {
       if(!empty($condition))
	   {
			$this->db->where($condition);
	   }
	   $this->db->select($fields);
	   $var = $this->db->get($table);
	   return $var;
		
    }
    
	
	function update_data($table,$fields,$field_name,$category)
    {
	
	$this->db->where($field_name, $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
		}
		
    }
	function file_upload($img,$tmp)
   {
       $image_path = 'img/';
   if(move_uploaded_file($tmp,$image_path.$img))
     return true;
   }
   function profile_update($table,$fields,$category)
   {
   
   $this->db->where('id', $category);
   if($this->db->update($table,$fields)){
       //if($this->db->insert($table,$fields)){
       return true;
       }
       
   }
   function client_update($table,$fields,$category)
   {

$this->db->where('client_id', $category);
if($this->db->update($table,$fields)){
       //if($this->db->insert($table,$fields)){
return true;
}

   }
    function service_update($table,$fields,$category)
   {
   
   $this->db->where('service_id', $category);
   if($this->db->update($table,$fields)){
       //if($this->db->insert($table,$fields)){
       return true;
       }
       
   }
    function project_update($table,$fields,$category)
   {
   
   $this->db->where('prj_id', $category);
   if($this->db->update($table,$fields)){
       //if($this->db->insert($table,$fields)){
       return true;
       }
       
   }

}

?>