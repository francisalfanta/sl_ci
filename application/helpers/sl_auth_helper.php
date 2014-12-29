<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

    /**
     * Softline - Codeigniter Authentication
     *
     * This is a helper function. To prevent malicious users
     * from trying to exploit parent menu links not permitted
     * 
     * Extended to allow: 
     *      - '.' (dot), 
     *      - '[' (open bracket),
     *      - ']' (close bracket)
     * 
     * @access  private
     * @param   $parent_lists      object  
     * @param   $username          object
     * @param   $permitted_lists   object
     * @return  $permitted_child   array 
     */
    function permitted_parent_menu($parent_lists, $username, $permitted_lists){ 
        // for parent menu
        $permitted_parent = array();          
        if(gettype($parent_lists)=='object'){
            foreach($permitted_lists as $perm){
                // loop to existing parent menu
                foreach($parent_lists as $row){
                    if($row->id==$perm['accessable_table_id']){
                        if(count($permitted_parent)==0){
                            $permitted_parent = array($perm['accessable_table_id']);
                        } else {
                            array_push($permitted_parent, $perm['accessable_table_id']);    
                        }                    
                    }
                }
            }    
        }
        return $permitted_parent;
    }
    /**
     * Softline - Codeigniter Authentication
     *
     * This is a helper function. To prevent malicious users
     * from trying to exploit child menu links not permitted
     * 
     * Extended to allow: 
     *      - '.' (dot), 
     *      - '[' (open bracket),
     *      - ']' (close bracket)
     * 
     * @access  private 
     * @param   $children_lists    object
     * @param   $username          object
     * @param   $permitted_lists   object
     * @return  $permitted_child   array 
     */

    function permitted_child_menu($children_lists, $username, $permitted_lists){  
        // for child menu
        $permitted_child = array();        
        if(gettype($children_lists)=='object'){
            foreach($permitted_lists as $perm){
                // loop to existing child menu
                foreach($children_lists as $row){
                    if($row->id==$perm['accessable_table_id']){
                        array_push($permitted_child, $perm['accessable_table_id']);
                    }
                }
            }      
        } 
        return $permitted_child;
    }


// /?/> /* Should never close php file - if you have a space after can mess your life up */