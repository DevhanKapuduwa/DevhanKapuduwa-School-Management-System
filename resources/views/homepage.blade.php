<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('/header/header')
    
    {{-- css header of bootstrap file --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> --}}

    <link rel="stylesheet" href="/CSS/font-awesome.min.css">


</head>
<body>
    <div class="row">
        <div class="col-3">
            @include('/sidebar/sidebar')
        </div>
        
  @isset($classes)
  @include('/table/classroomtable')
  @endisset ()

  @isset($subjects)
  @include('/table/subjecttable')
  @endisset ()

  
  @isset($students)
  @include('/table/studenttable')
  @endisset ()

  @isset($sports)
  @include('/table/sportstable')
  @endisset ()
      
 

 
        </div>
    </div>
    

    {{-- js header of bootstrap fille --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>    
</body>
</html>