<x-master title="اضافة مهمة">

    <form method="POST" class="add-task w-75 mx-auto" action={{route("task.store")}} >
        @csrf
        <label  class=" mb-3">اسم المهمة</label>
        <input class="form-control input-name " type="text" name="task" id="">
        @error('task')
        <div class="txt-red  mt-2">{{$message}}</div>
            
        @enderror
        <label class=" mb-3 mt-5">الوصف</label>
        <textarea class="form-control input-des " type="text" name="des" id=""></textarea>
        @error('des')
        <div class="txt-red  mt-2 ">{{$message}}</div>
            
        @enderror
        <label class=" mb-3 mt-5">اليوم</label>
        <input type="date" name="day" class="form-control w-50 input-day " id="">
        @error('day')
        <div class="txt-red  mt-2">{{$message}}</div>
            
        @enderror
        <button type="submit" class="form-control btn btn-add-task mt-5 mb-5">اضافة</button>
    </form>


</x-master>