const search_bar = document.querySelector('#search_bar')  
        search_bar.addEventListener('change', (e) => {  
            if (e.target.value == ""){
                document.querySelector('#filter_bar').style.display = "flex";
                document.querySelector('#all_result').style.display = "none";
                document.querySelector('#all_result').style.height = "calc(100vh - 294px)";
            }
            else{
                document.querySelector('#filter_bar').style.display = "none";
                document.querySelector('#all_result').style.display = "flex";
                document.querySelector('#all_result').style.height = "calc(100vh - 244px)";
            }
        });