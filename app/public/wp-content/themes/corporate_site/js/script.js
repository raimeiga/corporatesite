/* <span id="span_news">ニュース</span>
<span id="span_press">プレスリリース</span> */

これらのイベント処理は、htmlファイルにのみ可能な操作だろ。phpファイルを対象にはできない気がする。

const spanNews = document.getElementById('span_news');
const spanPress = document.getElementById('span_press');

const wrapperNews = document.getElementById('wrapper_News');
const wrapperPress = document.getElementById('wrapper_Press');

spanNews.addEventListener('click',()=>{
    wrapperPress.style.display = 'none';
    wrapperNews.style.display = 'block';
});

spanPress.addEventListener('click',()=>{
    wrapperNews.style.display = 'none';
    wrapperPress.style.display = 'block';
});



