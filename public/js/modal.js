document.addEventListener('DOMContentLoaded', function() {
const tombol_modal = document.querySelector(".tambah");
const bodi = document.querySelector("body");

tombol_modal.addEventListener("click", function(e){
    const modaltambahuser = document.getElementById('tambahuser');
    modaltambahuser.classList.toggle("show");
    bodi.classList.add("modal-on-active");
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
})

// const bodi = document.querySelector("body");
    // bodi.addEventListener("click", function(e){
    //     document.querySelector("body").classList.remove("modal-on-active");
    // })
});