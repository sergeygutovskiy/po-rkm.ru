
  <div id='info-1' class='popup-window'>
    <div class='info-box'>
        <div class="inside-box">
        <i class="fal fa-times"></i>
        <h2>Оставить заявку</h2>
        <span>Мы вам перезвоним</span>
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
    max-width: 440px;
    min-width: 320px;
    min-height: 500px;
    text-align:left;
    padding: 64px;
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
.fa-times{
    position: absolute;
    right: 15px;
    top: 15px;
    font-size: 25px;
}
.info-box h2{
    margin-top: 0px;
    margin-bottom: 6px;
}
.info-box form{
    margin-top: 30px;
}
.info-box p{
    margin-top:-8px;
}
.info-box span{
    font-size: 18px;
line-height: 22px;
/* identical to box height */

letter-spacing: 0.05em;
font-weight: 300;
color: #A6A6A6;

}
.info-box form input{
   
    border: none; 
    width: 100%;
    height: 40px;
    background-color: #F9FAFC;
    padding-left: 12px;
    outline: none;
    color: #797979;
    font-weight: 300;
    font-size: 16px;
    line-height: 20px;
    color: #797979;
} 
.info-box form textarea{
    display:block;
    width:100%;
    min-height: 70px;
    margin:0 auto;
    resize:vertical;
    outline:none;
    border:none;
    border-radius:2px;
    font-size:16px;
    font-weight: 300;
    line-height: 20px;
    padding-left: 12px;
    background-color: #F9FAFC;
    color: #797979;
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
@media only screen and (max-width: 600px){
    .info-box{
        padding: 20px;
        
    }
    .inside-box{
        margin-top: 25px;
    }
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
