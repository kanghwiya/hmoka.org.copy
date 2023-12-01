
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


// 보드 좋아요 기능 (수정 필요)
function favorite() {
    const boardId = document.getElementById('boardId').value;
    const userId = document.getElementById('userId').value;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/userfavorite',
        data: JSON.stringify({ boardId: boardId, userId: userId }),
        dataType: 'json',
        success: function(response) {
            console.log(response);
        },
        error: function(error) {
            console.log(error);
        }
    });
}


function presentexhibition() {
    const exhibition = document.getElementById('exhibitionShow').value;
    const exhibitionob = JSON.parse(exhibition);

    let today = new Date();
    let year = today.getFullYear();
    let month = ('0' + (today.getMonth() + 1)).slice(-2);
    let day = ('0' + today.getDate()).slice(-2);
    let dateString = year + '-' + month  + '-' + day;
    // let currentexhibition

    if(exhibitionob){
        console.log(exhibitionob);
        // const [star, setStar] = useState("");

        // useEffect(() => {
        //     fetch(exhibitionob)
        //     .then(res => res.json())
        //     .then(data => setStar(data.exhibitionob.exhibition_end));
        // }, []);
        // console.log(star);


        let noData = document.getElementById('exhibitionCategory');
        let noDataTag = document.getElementById("h3");
        noDataTag.innerHTML = "";
        noDataTag.innerHTML = "if문 작동함";
        noData.appendChild(noDataTag);  // noData를 noDataTag의 자식으로 추가

    } else {
        let noData = document.getElementById('exhibitionCategory');
        let noDataTag = document.getElementById("h3");
        noDataTag.innerHTML = "";
        noDataTag.innerHTML = "현재 진행중인 전시가 없습니다.";
        noData.appendChild(noDataTag);  // noData를 noDataTag의 자식으로 추가
    }

}