@extends('/subview/master')
@section('books', 'List of e-books')
@section('content') 
<h1>List Of Book</h1>
<br>
    <h1>Book Title: {{ $Title }} 
    <br>
     The ISBN :{{ $ISBN }}
     <br>
     The Book Category :{{ $Bookcategory }}
     <br>
     The Number of Pages: :{{ $Noofpages }}</h1>
     
     @endsection 
