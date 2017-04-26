<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4" v-for="d in data">
        <div class="thumbnail">
          <div class="img-box">
            <img :src="'http://localhost:8080/seek-home/storage/app/' + d.img_path" alt="">
          </div>
          <div class="caption">
            <h3>{{d.title}}</h3>
            <p>{{d.description}}</p>
            <p>
              <a :href="'./example/' + d.id" class="btn btn-primary" role="button">详情</a>
            </p>
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
    border: 0;
    border-radius: 5px;
    box-shadow: 5px 5px 20px #ddd;
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
      font-weight: 300;
    }
    p {
      font-weight: 300;
      line-height: 1.75em;
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
