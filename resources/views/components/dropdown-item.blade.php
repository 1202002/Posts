    
    @props(['active' => false])
    

    @php

     $clasess = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focuse:bg-gray-300 hover:text-white ';
      if($active) $clasess ='bg-blue-500 text-white' ;

     @endphp


    <a {{ $attributes(['class'=> $clasess ])}} >
    
          {{$slot}}
    </a>