<div class="container_main">
    <div class="jumbotron"></div>

    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($fumetti as $index => $elements)
            <div class="dBox">
                <div class="margine">
                    <img src="{{$elements['thumb']}}">
                    <h4>{{$elements['title']}}</h4>
                </div>
            </div>
        @endforeach
    </div>
    
   

</div>