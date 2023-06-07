<x-master title="المستخدمين">
    

    <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"> المهمة</th>
              <th scope="col">البريد الالكتروني</th>
              <th scope="col">تعديل</th>
              <th scope="col">حذف</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td class="user-task "><a class="txt-black" href={{route("user.show",$user->id)}}>{{$user->name}}</a></td>
                <td>
                    <h1 class="h1-user">{{$user->email}} </h1>
     
                </td>
                <td>
                    
                        
                        <a href={{route("user.edit",$user->id)}}>
                          <button class="btn-blue">
                            <i class="fa-regular fa-pen-to-square"></i>
                            تعديل
                          </button>
                        </a>


                    </form>
 
                </td>
                <td>
                    <form action={{route("user.destroy",$user->id)}} method="post">
                        @method("DELETE")
                        @csrf
                       @if ($user->id !== auth()->user()->id)
                       <button class="btn-red">
                        <i class="fa-solid fa-trash"></i>
                        حذف
                      </button>
                           
                       @endif

                            
                       
                       

                    </form>

                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      

    
    <div class="add-user-new mt-5">
       <a class="c-black" href={{route("user.create")}}><button class="btn form-control btn-add-user mt-5">اضافة مستخدم </button></a> 
    </div>


    </x-master>