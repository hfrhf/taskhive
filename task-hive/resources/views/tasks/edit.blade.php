<x-master title="تعديل المهمة">

    <form enctype="multipart/form-data" method="POST" class="edit-task w-75 mx-auto" action={{route("task.update",$task->id)}} >
        @method("PUT")
        @csrf
        <label  class=" mb-3">اسم المهمة</label>
        <input class="form-control input-name " type="text" name="task" id="" value="{{ old('task', $task->task) }}" >
        @error('task')
        <div class="txt-red  mt-2">{{$message}}</div>
            
        @enderror
        <label class=" mb-3 mt-5">الوصف</label>
        <textarea class="form-control input-des " type="text" name="des" id="" >{{old("des" ,$task->des) }}</textarea>
        @error('des')
        <div class="txt-red  mt-2 ">{{$message}}</div>
            
        @enderror
       
            <div>
                <label class=" mb-3 mt-5">اليوم</label>
                <input type="date" name="day" class="form-control w-50 input-day " id="" value="{{old("day" ,$task->day) }}">
                @error('day')
                <div class="txt-red  mt-2">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label class=" mb-3 mt-5">رفع الملف</label>
                <input type="file" name="file" class="form-control w-100 input-file " id="">
                @error('file')
                <div class="txt-red  mt-2">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label class=" mb-3 mt-5">الحالة</label>
                <br>
                <select class="form-control status" name="status" id="">
                    <option value="0" @if ($task->status == 0) selected @endif>غير منجز</option>
                    <option value="2" @if ($task->status == 2) selected @endif>قيد الانجاز</option>
                    <option value="1" @if ($task->status == 1) selected @endif>منجز</option>
                </select>
                
               
            </div>
            


        
       
            
        
        <button type="submit" class="form-control btn btn-edit-task mt-5 mb-5">تعديل</button>
    </form>


</x-master>