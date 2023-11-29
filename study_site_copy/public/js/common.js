
const SNSMODALCLASS= document.getElementById('modal');
const SNSMODALOPEN = document.getElementById('sns_open_btn');
const SNSMODALCLOSE = document.getElementById('sns_close_btn');

SNSMODALOPEN.addEventListener('click', () => {
    SNSMODALCLASS.style.display = 'block';
    document.body.style.overflow = 'hidden'; // 스크롤바 제거
});

SNSMODALCLOSE.addEventListener('click', () => {
    SNSMODALCLASS.style.display = 'none';
    document.body.style.overflow = 'auto'; // 스크롤바 보이기
});

function loginpopup() {
    let options = "toolbar=no,scrollbars=no,resizable=yes,status=no,menubar=no,width=700, height=800, top=0,left=0";

    window.open("http://127.0.0.1:8000/login","_blank", options);
}

function registpopup() {
    let options = "toolbar=no,scrollbars=no,resizable=yes,status=no,menubar=no,width=700, height=800, top=0,left=0";

    window.open("http://127.0.0.1:8000/regist","_blank", options);
}

let scrollTopBtn = document.getElementById('go-top-btn');
scrollTopBtn.addEventListener('click', function() {
    window.scrollTo(0, 0);
});
