Hello : {{ $name. ' '. $last_name }}
Hello : {{ '<p>' .  $name. ' '. $last_name . '</p>' }}
Hello : {!! '<p>' .  $name. ' '. $last_name . '</p>' !!}

@if($name=='siam')
    yes
@else
    no
@endif

<?php
    if($name=='siam'){
        echo 'true';
    }
    else{
        echo 'false';
    }
?>

<hr/>
@foreach($people as $person)
    {{ $person }}<br/>
@endfor