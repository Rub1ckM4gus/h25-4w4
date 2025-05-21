<?php
@param string $parent_slug

function categorires_liste($parent_slug):void{
    $parent_category = get_category_by_slug($parent_slug);

    if($parent_category){
        $parent_id = $parent_category->term_id;
    }else{
        echo
    }
}
?>


    