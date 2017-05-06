<template>
  <div class="carousel">
    <div id="carousel-image-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-image-generic" :data-slide-to="i" :class="{ active: i===0 }" v-for="(d,i) in data"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item" v-for="(d,i) in data" :class="{ active: i===0 }">
          <img :src="'/storage/' + d.img_path" alt="">
          <!-- <div class="carousel-caption">
            <h2>西可（天津）品牌设计有限公司</h2>
          </div> -->
        </div>

      </div>

      <a class="left carousel-control" href="#carousel-image-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-image-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
  </div>
</template>

<script>
    export default {
      props: {
        data: {
          type: Array
        }
      },
      data() {
        return {
        }
      }
    }
</script>

<style lang="less">
  .carousel {
    .carousel-control.left,
    .carousel-control.right {
        // background-image: none;
    }
    .carousel-caption {
      top: 0;
      left: 0;
      z-index: 2;
      right: auto;
      bottom: auto;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.5);
      text-shadow: none;
    }
    .carousel-indicators {
      li {
        margin-right: 10px;
      }
    }
  }

</style>
