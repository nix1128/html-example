
<template>


<div id="styles">
      <transition-group tag="div" class="div-slider" :name="back  ? 'slideback' : 'slide'"
     >  <div  @mouseover="stop()" @click.right="next" class="card" v-for="number in [currentImg]" :key="number" >
            <img :src="imgList[Math.abs(currentImg) % imgList.length]"> 
  <a href="#" class="icon" >
    <i class="fa fa-search-plus"></i></a>
      </div>
      </transition-group>
  <a  @mouseover="prev" >&#10094; </a>
  .....
    <a  @mouseover="next" >&#10095;&#10095; </a>
</div>    
</template>
<script>

export default {
 
  data() {
    return {
        imgList: [
       "https://cdn.pixabay.com/photo/2015/12/12/15/24/amsterdam-1089646_1280.jpg",
      "https://cdn.pixabay.com/photo/2016/02/17/23/03/usa-1206240_1280.jpg",
      "https://cdn.pixabay.com/photo/2015/05/15/14/27/eiffel-tower-768501_1280.jpg"

      //  "/images/home/home-slide1.png",
      //   "/images/home/home-slide2.png",
      //   "/images/home/home-slide3.png",
      //   "/images/home/home-slide4.png",
      //   "/images/home/home-slide5.png",
    ],
    currentImg: 0,
    back:false,

    };
  },
      mounted() {
        this.interval = setInterval(() => {
        this.currentImg = this.currentImg + 1;
    }, 4000);

  },
  methods: {
    next() { 
       this.back = false;
       this.currentImg ++;
    },
    prev() {     
       this.back = true;
      this.currentImg--;
    },
    stop(){
      clearInterval(this.interval);  
    },
  },
};
</script>
<style >

#styles {
  overflow: hidden;
  color:cadetblue;
}

.slide-leave-active,
.slide-enter-active {
  transition: 1s;
}
.slide-enter {
  transform: translate(100%, 0);
}
.slide-leave-to {
  transform: translate(-100%, 0);
}

.slideback-leave-active,
.slideback-enter-active {
  transition: 1s;
}
.slideback-enter {
  transform: translate(-100%, 0);
}
.slideback-leave-to {
  transform: translate(100%, 0);
}

.div-slider{
  overflow: hidden;
  position: relative;
  height: 100%;
  width: 100%;
}

.div-slider .card {
  position: absolute;
  height: 100px;
  width: 100%;
  padding: 0%;

}

a{
cursor: pointer;
font-size: 20px;
}

.icon {
  color: white;
  font-size: 50px;
  position: absolute;
  top: 150%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
   opacity: 0.6;
  transition: 0.4s;
}

.fa-search-plus:hover {
  opacity: 2 
}


</style>