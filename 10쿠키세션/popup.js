//팝업쿠기 생성함수(쿠키이름을 받는다)
function createCookie(name) {

    //쿠키만료기간
    var date = new Date();
    date.setDate( date.getDate() + 1 ); //1일
    //쿠키구문
    var cookie = "";
    cookie += name + "=true;";
    cookie += "expires=" + date.toUTCString() + ";";
    //쿠키생성
    document.cookie = cookie;

}

//쿠키확인함수
function getCookie(name) {

    var cookies = document.cookie.split("; ");
    for( var i = 0; i < cookies.length; i++ ) {

        if( cookies[i].indexOf(name) != -1 ) {
            return true; //존재여부를 true반환
        }

    }

}