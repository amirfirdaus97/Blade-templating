<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookcontroller extends Controller
{
  
    public function index() {
        $Title = 'Thor';
        $ISBN = '9783161484100';
        $Bookcategory = 'Action';
        $Noofpages = '234';
        
        return view('subview/list', compact('Title', 'ISBN','Bookcategory','Noofpages'));

    }
    
    public function indexs() {
        $Title = 'An eBook is an electronic version of a traditional print book
         that can be read by using a personal computer or by using an eBook reader.Users can purchase an eBook on diskette or CD,
          but the most popular method of getting an eBook is to purchase a downloadable file of the eBook
          from a Web site such as Barnes and Noble to be read from the user computer or reading device.
        Generally, an eBook can be downloaded in five minutes or less.';
        
        
        return view('subview/about', compact('Title'));

    }
}
