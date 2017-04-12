
@extends('layouts.master')

@section('title', 'Page Title')

@section('navigation')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>

    <script type="text/javascript">
    	
$(document).ready(function(){         
	console.log({'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')});
    $.ajax({
      url: 'test2',
      type: 'post',
      headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
      data: {'email': 'ehays@usc.edu', 'name': 'eddie', 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},//$('input[name=email]').val(), '_token': $('input[name=_token]').val()},
      success: function(data){
        alert(data);
      }
	});      
});

    </script>
@endsection