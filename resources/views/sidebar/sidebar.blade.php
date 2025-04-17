<div class="d-flex flex-column flex-shrink-0 p-3 bg-light border-end" style=" height: 100vh">
  <div class="border-bottom pb-3 mb-3">
    <span class="fs-4 fw-semibold">Tables</span>
  </div>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      
      <a href="/classes" class="nav-link link-dark @if (\Request::is('classes')) active @endif" >
        Classrooms
      </a>
    </li>
    <li>
      <a href="/students" class="nav-link link-dark @if (\Request::is('students')) active @endif">
        Students
      </a>
    </li>
    <li>
      <a href="/subjects" class="nav-link link-dark @if (\Request::is('subjects')) active @endif">
        Subjects
      </a>
    </li>

    <li>
      <a href="/sports" class="nav-link link-dark @if (\Request::is('sports')) active @endif">
        Sports
      </a>
    </li>
  </ul>
  <div class="mt-auto border-top pt-3">
   
  </div>
</div>
