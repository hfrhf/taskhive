<x-master :title="$titleTask">
    <div class="img-task-name text-center">
        <img src={{asset("imgs/task.png")}} alt="">

    </div>
    <div class="description">
        <h1 class="title-descr">الوصف:</h1>
        <p class="p-descr">{{$task->des}}</p>
    </div>
    <div class="date-task d-flex gap-2 justify-content-center align-items-center">
        <div class="date-task-box1">
            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $task->day)->format('d') }}
        </div>
        <div class="date-task-box2">
            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $task->day)->format('m') }}
        </div>
        <div class="date-task-box3">
            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $task->day)->format('Y') }}
        </div>
    </div>
    @if(!empty($task->file))
    <div class="download text-center mt-5 mb-5">
     
        <a href="{{asset('storage/'.$task->file)}}" >
            <button class="btn btn-download">
                <i class="fa-solid fa-down-long"></i>
                تحميل الملف 
            </button>

        </a>

    </div>   
    @endif
        
 
   
    
   
    



</x-master>