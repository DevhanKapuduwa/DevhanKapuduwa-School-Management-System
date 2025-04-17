<button type="button" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off">
    <a href="{{ 'student-view/'.$student->id }}" class="link-light" style="text-decoration: none">View</a>
  
</button>
</br>
</br>
<button type="button" class="btn btn-danger" data-toggle="button" aria-pressed="false" autocomplete="off">
    <a href={{"student-retrieve/".$student->id  }} class="link-light" style="text-decoration: none">Update</a>
</button>
</br>
</br>
<button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" autocomplete="off">
    <a href="{{ 'student-delete/'.$student->id }}" class="link-light" style="text-decoration: none">  Delete</a>
  
</button>