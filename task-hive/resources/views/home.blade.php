<x-master  title="الصفحة الرئيسية">
    <div class="row pt-20 text-center boxs">
        <div class="col-xl-6 col-lg-12 col-md-12 d-flex justify-content-center align-items-center">
            <div class="box-home text-center">
                <div class="img-home mb-5">
                    <img src="imgs/add-task-home.png" alt="">
                </div>
                <a href={{route("task.create")}} class="d-flex justify-content-center align-items-center">

                        <div class="icon-home">
                            <img  src="imgs/plus-green.png" alt="">

                        </div>
                        
                        <span>اضف مهامك</span>

                    

                </a>

            </div>

        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 d-flex justify-content-center align-items-center">
            <div class="box-home text-center">
                <div class="img-home mb-5">
                    <img src="imgs/manage-task-home.png" alt="">
                </div>
                <a href={{route("task.index")}} class="d-flex justify-content-center align-items-center">
                         <div class="icon-home">
                            <img  src="imgs/profile.png" alt="">

                         </div>
                        
                        <span>ادارة مهامك</span>

                    

                </a>

            </div>
        </div>
    </div>



</x-master>