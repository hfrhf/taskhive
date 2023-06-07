<div class="sidebar text-center">
    
   <a href=""><img class="sidebar-avatar" src={{asset("imgs/avatar.png")}} alt=""></a> 
    <ul class="sidebar-ul pt-5 w-100">
        <li class="mb-5">
            <a href={{route("home")}}>
                <i class="fa-solid fa-house-chimney"></i>
                <span>الرئيسية</span>
            </a>
        </li>
        @if (auth()->user()->role === "admin")
        <li class="mb-5">
            <a href={{route("user.index")}} >
                <i class="fa-solid fa-users"></i>
                <span>المستخدمين</span>
            </a>
        </li>
            
        @endif
 
        <li class="mb-5">
            <a href={{route("task.create")}}>
                <i class="fa-solid fa-plus"></i>
                <span>اضافة مهمة</span>
            </a>
        </li>
        <li class="mb-5">
            <a href={{route("task.index")}} >
                <i class="fa-solid fa-list-check"></i>
                <span> المهام المضافة</span>
            </a>
        </li>
        <li class="mb-5">
            <a href={{route("login.logout")}} >
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>  تسجيل الخروج</span>
            </a>
        </li>

 
    </ul>


</div>