function delete_alert(e){
    if(!window.confirm('本当に削除しますか？')){
       window.alert('キャンセルされました'); 
       return false;
    }
    document.deleteform.submit();
 };


var btn = document.getElementsByClassName('open-btn')[0];
var modal = document.getElementsByClassName('answer-modal')[0];
var closebtn = document.getElementsByClassName('close-btn')[0]; 

btn.addEventListener('click', function() {
    modal.style.display = 'block';
    closebtn.style.display = 'block';
    btn.style.display = 'none';
});

closebtn.addEventListener('click', function() {
    modal.style.display = 'none';
    closebtn.style.display = 'none';
    btn.style.display = 'block';
});
