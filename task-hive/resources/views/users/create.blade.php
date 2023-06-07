<x-master title="اضافة مستخدم">

    <form method="POST" class="add-task w-75 mx-auto" action={{route("user.store")}} >
        @csrf
        <label  class=" mb-3">اسم المستخدم</label>
        <input class="form-control input-name " type="text" name="name" id="">
        @error('name')
        <div class="txt-red  mt-2">{{$message}}</div>
            
        @enderror
        
        <div class="d-flex  flex-wrap justify-content-between">
            <div class="div-country w-40">
                <label class=" mb-3 mt-5">الدولة</label>
                <input class="form-control text input-country  " type="text" name="country" id="">
                @error('country')
                <div class="txt-red  mt-2 ">{{$message}}</div>
                    
                @enderror
    
            </div>
            <div class="div-email w-40">
                <label class=" mb-3 mt-5">البريد الالكتروني</label>
                <input class="form-control text input-email  " type="email" name="email" id="">
                @error('email')
                <div class="txt-red  mt-2 ">{{$message}}</div>
                    
                @enderror
    
            </div>
        </div>


        <label class=" mb-3 mt-5">كلمة السر</label>
        <input type="password" name="password" class="form-control  input-day " id="">
        @error('password')
        <div class="txt-red  mt-2 ">{{$message}}</div>
            
        @enderror
        <button type="submit" class="form-control btn btn-add-user mt-10 mb-5">اضفة مستخدم</button>
    </form>


</x-master>