document.addEventListener('DOMContentLoaded', function() {
  
    // Tempatkan kode Anda di sini
    const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');
    const sidebar = document.getElementById('sidebar');

    allDropdown.forEach(item => {
        const a = item.parentElement.querySelector('a:first-child');
        a.addEventListener('click', function (e) {
            e.preventDefault();

            if(!this.classList.contains('active')){
                allDropdown.forEach(i=>{
                    const aLink = i.parentElement.querySelector('a:first-child');
                    aLink.classList.remove('active');
            i.classList.remove('show');
                })
            }

            this.classList.toggle('active');
            item.classList.toggle('show');
        });
    });
});