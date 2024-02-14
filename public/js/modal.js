document.addEventListener('DOMContentLoaded', function() {
const tombol_modal = document.querySelector(".tambah");
const bodi = document.querySelector("body");
const modaltambahuser = document.getElementById('tambahuser');
const hide = document.getElementById('hidemodal');
const close= document.querySelector('.close');

tombol_modal.addEventListener("click", function(e){
    modaltambahuser.classList.toggle("active");
    hide.classList.add("active");
})

hide.addEventListener("click", function(e){
    modaltambahuser.classList.remove("active");
    hide.classList.remove("active");
})

close.addEventListener("click" ,()=> {
    modaltambahuser.classList.remove("active");
    hide.classList.remove("active");
})
    
    // window.addEventListener('click', function(e){
    //     bodi.classList.remove("modal-on-active");
    //     // if(e.target !== tombol_modal){
    //     //     if(e.target !==DropdownProfile) {
    //     //         if(DropdownProfile.classList.contains('show')){
    //     //             DropdownProfile.classList.remove('show');
    //     //         }
    //     //     }
    //     // }
    // });



    // bodi.addEventListener("click", function(e){
    //     document.querySelector("body").classList.remove("modal-on-active");
    // })
});