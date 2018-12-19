@extends('layouts.menu')

@section('content')


<div class="col-md-8 col-md-offset-0" class="text-center" > 
{{-- <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="gallery-title text-center">Posiciones</h1> 
     </div>
	

	 --}}
<div class="gallery center col-md-10 col-md-offset-1">
    <div class="row">
		
    	    <h3 class="page-header">Posiciones</h3>
            <table class="table table-stripped table-bordered">
			      <thead>
			        <tr>
			          <th>#</th>
			          <th>A</th>
			          <th>B</th>
			          <th>C</th>
			          <th>D</th>
			         {{--  <th>E</th>
			          <th>F</th> --}}
			        </tr>
			      </thead>
			      <tbody>
					<tr>
				      <th class="row-header"> 1</th>
				     	<td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
				    </tr>
				     <tr>
				      <th class="row-header"> 2</th>
				     	<td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
				    </tr>

					<tr>
				      <th class="row-header"> 3</th>
				     	<td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
				    </tr>
				     <tr>
				      <th class="row-header"> 4</th>
				     	<td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
					    <td><button class="editbtn">Libre</button></td>
				    </tr>
			      </tbody>
    		</table>
			
	
	</div>

<script>	
$(document).ready(function(){
    $('.editbtn').click(function(){
        $(this).html($(this).html() == 'Libre' ? 'Ocupado' : 'Libre');
    });
});
       </script>

{{-- 
       <table class="table table-header-rotated">
  <thead>
    <tr>
      <!-- First column header is not rotated -->
      <th></th>
      <!-- Following headers are rotated -->
      <th class="rotate"><div><span> A</span></div></th>
        <th class="rotate"><div><span> B</span></div></th>
        <th class="rotate"><div><span> C</span></div></th>
        <th class="rotate"><div><span> D</span></div></th>
        <th class="rotate"><div><span>  E</span></div></th>
        <th class="rotate"><div><span>  F</span></div></th>
    </tr> 
  </thead>
  <tbody>
    <tr>
      <th class="row-header"> 1</th>
      <td><input checked="checked" name="column1[]" type="radio" value="row1-column1"></td>
      <td><input checked="checked" name="column2[]" type="radio" value="row1-column2"></td>
      <td><input name="column3[]" type="radio" value="row1-column3"></td>
      <td><input name="column4[]" type="radio" value="row1-column4"></td>
      <td><input name="column5[]" type="radio" value="row1-column5"></td>
      <td><input name="column6[]" type="radio" value="row1-column6"></td>
    </tr>
    <tr>
      <th class="row-header"> 2</th>
      <td><input name="column1[]" type="radio" value="row2-column1"></td>
      <td><input name="column2[]" type="radio" value="row2-column2"></td>
      <td><input checked="checked" name="column3[]" type="radio" value="row2-column3"></td>
      <td><input checked="checked" name="column4[]" type="radio" value="row2-column4"></td>
      <td><input name="column5[]" type="radio" value="row2-column5"></td>
      <td><input name="column6[]" type="radio" value="row2-column6"></td>
    </tr>
    <tr>
      <th class="row-header"> 3</th>
      <td><input name="column1[]" type="radio" value="row3-column1"></td>
      <td><input name="column2[]" type="radio" value="row3-column2"></td>
      <td><input name="column3[]" type="radio" value="row3-column3"></td>
      <td><input name="column4[]" type="radio" value="row3-column4"></td>
      <td><input checked="checked" name="column5[]" type="radio" value="row3-column5"></td>
      <td><input checked="checked" name="column6[]" type="radio" value="row3-column6"></td>
    </tr>
  </tbody>
</table> --}}
</div></div>
@endsection