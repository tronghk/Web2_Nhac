let selectMenu = document.getElementById("#filler");
console.log(selectMenu);
let song = document.querySelector("#right h2");
console.log(song);
let container = document.querySelector(".product-wrapper");

if(selectMenu){
    selectMenu.addEventListener("onchange", function(){
        let namesong = this.value;
        song.innerHTML = this[this.selectedIndex].text;  
        console.log(namesong);
        let http = new XMLHttpRequest();
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                let response = JSON.parse(this.responseText);
                // let response = this.responseText;
                let out = "";
                for(let item of response){
                    out += `
                <div class="col-6 col-sm-4 col-lg-2">
                            <div class="album">
                                <div class="album__cover">
                                    <img src="${item.artistimage}" alt="">
                                    <a href="release.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
                                        </svg></a>
                                    <span class="album__stat">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" />
                                            </svg>10</span>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z" />
                                            </svg> 19 503</span>
                                    </span>
                                </div>
                                <div class="album__title">
                                    <h3><a href="release.php">${item.albumname}</a></h3>
                                    <span><a href="artist.php">${item.artistname}</a></span>
                                </div>
                            </div>
                        </div>
                    `;
                }
                container.innerHTML = out;
            };
        }	
        http.open('POST', "./script.php", true);
        http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        http.send("song="+namesong);
    });
}