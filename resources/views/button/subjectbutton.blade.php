<button type="button" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off">
    <a href="{{ 'subject-view/'.$subject->id }}" class="link-light" style="text-decoration: none">View</a>
  
</button>
</br>
</br>
<button type="button" class="btn btn-danger" data-toggle="button" aria-pressed="false" autocomplete="off">
    <a href={{"subject-retrieve/".$subject->id  }} class="link-light" style="text-decoration: none">Update</a>
</button>
</br>
</br>
<button type="button" class="btn btn-dark" data-toggle="button" aria-pressed="false" autocomplete="off">
    <a href="{{ 'subject-delete/'.$subject->id }}" class="link-light" style="text-decoration: none">  Delete</a>
  
</button>