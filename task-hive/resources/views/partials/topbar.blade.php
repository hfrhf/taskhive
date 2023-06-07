@props(['title'])
<div class="topbar p-1 p-lg-5">
    <h1 class="title">{{$title}} </h1>
        <div class="topbar-imgs">
           <a href={{route("task.create")}}><i class="fa-solid fa-circle-plus"></i></a> 
           <img class="topbar-img" src={{asset("imgs/avatar.png")}} alt="">

        </div>
        

    
    
</div>