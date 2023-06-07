<x-master title="تعديل المستخدم">

    <form method="post" class="edit-user w-75 mx-auto" action={{route("user.update",$user->id)}} >
        @csrf
        @method("PUT")
        <label  class=" mb-3">اسم المستخدم</label>
        <input class="form-control input-name " type="text" name="name" id="" value="{{old("name" ,$user->name) }}">
        @error('name')
        <div class="txt-red  mt-2">{{$message}}</div>
            
        @enderror
        
        <div class="d-flex  flex-wrap justify-content-between">
            <div class="div-country w-40">
                <label class=" mb-3 mt-5">الدولة</label>
                <input class="form-control text input-country  " type="text" name="country" id="" value="{{old("country" ,$user->country) }}">
                @error('country')
                <div class="txt-red  mt-2 ">{{$message}}</div>
                    
                @enderror
    
            </div>
            <div class="div-email w-40">
                <label class=" mb-3 mt-5">البريد الالكتروني</label>
                <input class="form-control text input-email  " type="email" name="email" id="" value="{{old("email" ,$user->email) }}">
                @error('email')
                <div class="txt-red  mt-2 ">{{$message}}</div>
                    
                @enderror
    
            </div>
        </div>


        <label class=" mb-3 mt-5">كلمة السر</label>
        <input type="password" name="password" class="form-control  input-day " id="" >
        @error('password')
        <div class="txt-red  mt-2 ">{{$message}}</div>
            
        @enderror
        <button type="submit" class="form-control btn btn-edit-user mt-10 mb-5">تعديل مستخدم</button>
    </form>


</x-master>