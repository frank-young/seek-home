<template>
  <div class="image-grid">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="image-grid-wrap">
            <img src="./img/beichen.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="image-grid-wrap">
            <img src="./img/wuqing.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="image-grid-wrap">
            <img src="./img/seekcafe.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="image-grid-wrap">
            <img src="./img/shanxi.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="image-grid-wrap">
            <img src="./img/binli.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="image-grid-wrap">
            <img src="./img/aiersen.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="image-grid-wrap">
            <img src="./img/aogang.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="image-grid-wrap">
            <img src="./img/boli.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="image-grid-wrap">
            <img src="./img/renda.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="image-grid-wrap">
            <img src="./img/huitong.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
    export default {
      props: {
        data: {
          type: Array
        }
      }
    }
</script>

<style lang="less">
  .image-grid {
    margin-bottom: 50px;
    .image-grid-wrap {
      padding: 40px 0;
      cursor: pointer;
      &:hover {
        img {
          -webkit-filter: grayscale(0);
          filter: grayscale(0);
          cursor: pointer;
        }
      }
      img {
        width: 100%;
        -webkit-filter: grayscale(1);
        filter: grayscale(1);
        -webkit-transition: all .3s;
        transition: all .3s;
        cursor: pointer;
      }
    }
  }
</style>
