
  <div class="rotate container">
        <div id="carousel1">
            <figure><img src="http://lorempixel.com/186/116/nature/1" alt=""></figure>
            <figure><img src="http://lorempixel.com/186/116/nature/2" alt=""></figure>
            <figure><img src="http://lorempixel.com/186/116/nature/3" alt=""></figure>
            <figure><img src="http://lorempixel.com/186/116/nature/4" alt=""></figure>
            <figure><img src="http://lorempixel.com/186/116/nature/5" alt=""></figure>
            
        </div>
    </div>
<style>

.rotate{
    margin: 4% auto;
    width: 210px;
    height: 140px;
    position: relative;
    perspective: 1000px;
}
#carousel1{
    width: 100%;
    height: 100%;
    position: absolute;
    transform-style: preserve-3d;
    animation: rotation 15s infinite linear;
}
#carousel1:hover{
    animation-play-state: paused;
}
#carousel1 figure{
    display: block;
    position: absolute;
    width: 186px;
    height: 116px;
    left: 10px;
    top: 10px;
    background: transparent;
    overflow: hidden;
    border: solid 2px #096d96;
}
 
#carousel1 figure:nth-child(1){transform: rotateY(0deg) translateZ(240px);}
#carousel1 figure:nth-child(2) { transform: rotateY(70deg) translateZ(240px);}
#carousel1 figure:nth-child(3) { transform: rotateY(140deg) translateZ(240px);}
#carousel1 figure:nth-child(4) { transform: rotateY(210deg) translateZ(240px);}
#carousel1 figure:nth-child(5) { transform: rotateY(280deg) translateZ(240px);}



#carousel1>figure>img{
    -webkit-filter: grayscale(1);
    cursor: pointer;
    transition: all .5s ease;
}
#carousel1>figure>img:hover{
    -webkit-filter: grayscale(0);
  transform: scale(1.2,1.2);
}

@keyframes rotation{
    from{
        transform: rotateY(0deg);
    }
    to{
        transform: rotateY(360deg);
    }
}
</style>








