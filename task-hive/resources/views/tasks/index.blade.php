<x-master title="المهام المضافة">

    <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"> المهمة</th>
              <th scope="col">الحالة</th>
              <th scope="col">تعديل</th>
              <th scope="col">حذف</th>
            </tr>
          </thead>
          <tbody>

         
            
            @foreach ($tasks as $task)

            
            <tr>
              <td class="task-task "><a class="txt-black" href={{route("task.show",$task->id)}}>{{$task->task}}</a></td>
              <td>
                      
                      @if ($task->status == "1")
                      
                      <input class="btn-green" type="submit" value="منجز" >
                      @endif
                      @if ($task->status == "0")
                       <input class="btn-yellow" type="submit" value="غير منجز" >
                       @endif
                       @if ($task->status == "2")
                       <input class="btn-purple" type="submit" value="قيد الانجاز">
                       @endif
                       
                      
                 
                 

   
              </td>
              <td>
                  
                      
                      <a href={{route("task.edit",$task->id)}}>
                        <button class="btn-blue">
                          <i class="fa-regular fa-pen-to-square"></i>
                          تعديل
                        </button>
                      </a>


                  </form>

              </td>
              <td>
                  <form action={{route("task.destroy",$task->id)}} method="post">
                      @method("DELETE")
                      @csrf
                      <button class="btn-red">
                          <i class="fa-solid fa-trash"></i>
                          حذف
                        </button>

                  </form>

              </td>
            </tr>
            
          @endforeach

                
            
           
          </tbody>
        </table>
      </div>
      @if ($tasks->isEmpty())
  
      <h1 class="empty text-center" colspan="6">لا توجد بيانات</h1>
    
  @endif
      
  
</x-master>