
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