
<template>


<div id="styles">
      <transition-group tag="div" class="div-slider" :name="back ? 'slideback' : 'slide'" >   
      <div class="card" v-for="number in [currentImg]" v-bind:key="number" >
        <img :src="imgList[Math.abs(currentImg) % imgList.length]"/>
      </div>

      
      </transition-group>


  <a class="prev" @click="prev" >&#10094; <span>Previous</span></a>
    <a class="next" @click="next" >&#10095; Next</a>

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
    text:''

  
    };
  },
      mounted() {
       setInterval(() => {
        this.currentImg = this.currentImg + 1;
    }, 5000);
   
  },
  methods: {

    next() { 
       this.back = false;
      this.currentImg ++;
    },
    prev() {
      
       this.back = true;
      this.currentImg--;
    }
  },

    computed: {
    // a computed getter
    colored: function () {
      // `this` points to the vm instance
      return this.text.colored
    }
  }
};
</script>


<style >
#styles {
  overflow: hidden;
  color:blue;
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

}
a{
cursor: pointer;
font-size: 20px;
}



</style>