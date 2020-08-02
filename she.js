add_filter( 'menu_image_default_sizes', function($sizes){
  
    // remove the default 36x36 size
    unset($sizes['menu-36x36']);
    
    // add a new size
    $sizes['menu-50x50'] = array(50,50);
    
    // return $sizes (required)
    return $sizes;
    
  });