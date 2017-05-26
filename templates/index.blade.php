<!-- se trae toda la estructura del app.blade y en yield inyecta la seccion -->
<!-- el @ permite sobreentender que el if van con las etiquetas <?php ?> -->

@extends('app') 

@section('content')
<h1>Slim</h1>
@if(isset($name))
        <h2>Hello {{htmlspecialchars($name)}}!</h2>
@else
	<p>Try <a href="http://www.slimframework.com">SlimFramework</a></p>
	{{$path}} 
@endif
@endsection