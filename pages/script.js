
    // const searchBox = document.querySelector(".searchBox");
    // const searchBtn = document.querySelector(".search-btn");
    // const search = document.querySelector(".search");
    // const closeBtn = document.querySelector(".close-btn");

    // searchBtn.addEventListener('click',function(){
    //     console.log(search.classList.contains('active'))
    //     if(search.classList.contains('active')){
    //         search.value=''
    //     }
    //     else{
    //         search.classList.add('active');
    //         searchBox.focus();
    //     }
    //     closeBtn.addEventListener('click',function(){
    //         search.classList.remove('active');
    //         searchBox.value='';
    //     })
    // })

    const searchBox = document.querySelector(".search-box");
const searchBtn = document.querySelector(".search-btn");
const search = document.querySelector(".books-header-searchBar");
const closeBtn = document.querySelector(".close-btn");

searchBtn.addEventListener('click', function() {
    console.log(search.classList.contains('active'));
    if (search.classList.contains('active')) {
        searchBox.value = '';
    } else {
        search.classList.add('active');
        searchBox.focus();
    }
});

closeBtn.addEventListener('click', function() {
    search.classList.remove('active');
    searchBox.value = '';
});
