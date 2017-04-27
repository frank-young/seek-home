<template>
  <div class="image-grid">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6" v-for="d in data">
          <div class="image-grid-wrap">
            <img :src="'/storage/' + d.img_path" alt="">
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
