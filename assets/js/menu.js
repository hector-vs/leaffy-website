window.addEventListener("scroll", function(){
    let header = document.getElementById('nav')
    header.classList.toggle('rolagem', window.scrollY > 380)
})