
<template>
  <div id="styles">
    <transition-group
      tag="div"
      class="div-slider"
      :name="back ? 'slideback' : 'slide'"
    >
      <div
  
       @mouseover="stop"
        @mouseleave="start"
        class="card"
        v-for="number in [currentImg]"
        :key="number"
      >
        <img :src="imgList[Math.abs(currentImg) % imgList.length]" />
        <a href="#" class="icon">
          <i class="fa fa-search-plus"></i>
        </a>
     
        <a class="previous" @click="prev">&#10094; </a>
        <a class="next" @click="next">&#10095; </a>
      </div>
    </transition-group>
  </div>
</template>
<script>
export default {

  data() {
    return {
      imgList: [
        "https://cdn.pixabay.com/photo/2015/12/12/15/24/amsterdam-1089646_1280.jpg",
        "https://cdn.pixabay.com/photo/2016/02/17/23/03/usa-1206240_1280.jpg",
        "https://cdn.pixabay.com/photo/2015/05/15/14/27/eiffel-tower-768501_1280.jpg",

        //  "/images/home/home-slide1.png",
        //   "/images/home/home-slide2.png",
        //   "/images/home/home-slide3.png",
        //   "/images/home/home-slide4.png",
        //   "/images/home/home-slide5.png",
      ],
      currentImg: 0,
      back: false,
      

    };
  },
  mounted() {
   
  },

  created(){
       this.interval = setInterval(() => {
        this.currentImg = this.currentImg + 1;
    }, 2000);
  },
  methods: {
    next() {
      this.back = false;
      this.currentImg++;
    },
    prev() {
      this.back = true;
      this.currentImg--;
    },
    stop() {
      clearInterval(this.interval);
    },

       start(){
       this.interval = setInterval(() => {
        this.currentImg = this.currentImg + 1;
    }, 2000);
}
   


   },
  };
</script>
<style >
#styles {
  overflow: hidden;
  color: white;
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

.div-slider {
  overflow: hidden;
  position: relative;
  height: 100%;
  width: 100%;
}

.div-slider .card {
  position: absolute;
  height: 100px;
  width: 100%;
  
}

a {
  cursor: pointer;
  font-size: 30px;
}

.icon {
  color: white;
  font-size: 50px;
  position: absolute;
  top: 150%;
  left: 50%;
  /* transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);*/
  text-align: center;
  opacity: 0.6;
  transition: 0.4s;
  
  
  
}

.fa-search-plus:hover {
  opacity: 2;
}

.next {
  color: white;
  font-size: 70px;
  position: absolute;
  top: 300%;
  left: 90%;
  /* transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%); */
  width: auto;
  opacity: 5;
  transition: 0.4s;
  z-index:100;
  

  
}
.next:hover {
  opacity: 0.1;
}

.previous {
  color: white;
  font-size: 70px;
  position: absolute;
  width: auto;
  top: 300%;
  right: 90%;
  opacity: 5;
  transition: 0.4s;
  z-index:100;
}
.previous:hover {
   opacity: 0.1;
}



</style>