<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4" v-for="d in data">
        <a :href="'./example/' + d.id" class="thumbnail">
          <div class="img-box">
            <img :src="'/storage/' + d.img_path" alt="">
          </div>
          <div class="caption">
            <h3>{{d.title}}</h3>
            <p>{{d.description}}</p>
          </div>
        </a>
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
      },
      data() {
        return {
        }
      }
    }
</script>

<style lang="less">
  .thumbnail {
    padding: 0;
    margin: 30px 0;
    border: 0;
    border-radius: 5px;
    box-shadow: 0 0 10px 1px #eee;
    text-decoration: none;
    -webkit-transition: all .3s;
    transition: all .3s;
    &:hover {
      text-decoration: none;
      box-shadow: 5px 5px 20px #ddd;
    }
    .img-box {
      height: 225px;
      overflow: hidden;
    }
    .caption {
      // padding: 0;
    }
    h3 {
      overflow: hidden;
      text-overflow: ellipsis;
      font-weight: 400;
    }
    p {
      height: 56px;
      font-weight: 400;
      font-size: 16px;
      line-height: 1.75em;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    img {
      width: 100%;
      border-radius: 5px 5px 0 0;
    }
    .btn {
      border-radius: 0;
      padding: 6px 20px;
    }
  }
</style>
