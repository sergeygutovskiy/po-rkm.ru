
  <div id='info-1' class='popup-window'>
    <div class='info-box'>
        <div class="inside-box">
        <h2>Оставить заявку</h2>
        <p>Мы вам перезвоним</p>
        <form>
            <p><input placeholder="Имя"></p>
            <p><input placeholder="Почта"></p>
            <p><input placeholder="Телефон"></p>
            <p><textarea placeholder="Примечания"></textarea></p>
            <button>Отправить</button>
        </form>
        </div>
    </div>
</div>



<style>
    .popup-window{
    display: none;
    overflow:auto;
    position: fixed;
    z-index: 99997;
    width: 100vw;
    height: 100vh;
    text-align:center;
    background: rgba(0,0,0,0.7);
    top:0;
    bottom:0;
    left:0;
    right:0;
}
.info-box{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 99998; 
    width: 95%;
    max-width: 500px;
    min-width: 320px;
   
    text-align:left;
    
    padding: 20px;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    -webkit-animation: info-top 0.35s ease-in-out;
    animation: info-top 0.35s ease-in-out;
    overflow: visible;
}
.inside-box{
    max-width: 320px;
    margin: auto;
}
.info-box form input{
   border: none;
   border-bottom: 1px solid #797979;
    
} 
.info-box button{
    width: 248px;
height: 50px;
background: #F3F4F6;
border-radius: 2px;
font-family: Montserrat;
font-style: normal;
font-weight: 300;
font-size: 18px;
line-height: 22px;
border: none;
cursor: pointer;
}
</style>

<script>

function box_info(id,value){
    var $target = $("#info-"+id);    	
	if(value == 'close'){
	    $target.hide();
	    
	} else {
            $target.show();
	    
        }

};
$('.popup-window').on('click', function(e){
    if(!$(e.target).hasClass('info-box') && !$(e.target).parents('.info-box').length){
        $(this).hide();
       
    }
});
</script>
