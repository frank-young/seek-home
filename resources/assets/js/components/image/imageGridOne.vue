<template>
  <div class="image-grid-one">
      <div class="image-grid-items-wrap">
          <div class="image-grid-item">
              <a class="image-box-sm" href="#">
                  <div class="img">
                      <img :src="'/storage/' + data[0].img_path" alt="">
                  </div>
                  <div class="txt">
                      <h4>{{data[0].title}}</h4>
                  </div>
                  <div class="hover-box">
                      <h4>{{data[0].title}}</h4>
                      <p>{{data[0].title.description}}</p>
                  </div>
              </a>
              <a class="image-box-sm top-50" href="#">
                <div class="txt">
                    <h4>{{data[1].title}}</h4>
                </div>
                <div class="img">
                    <img :src="'/storage/' + data[1].img_path" alt="">
                </div>
                <div class="hover-box">
                    <h4>{{data[1].title}}</h4>
                    <p>{{data[1].title.description}}</p>
                </div>
              </a>
          </div>
          <div class="image-grid-item">
              <a class="image-box-lg" href="#">
                  <div class="img">
                      <img :src="'/storage/' + data[2].img_path" alt="">
                  </div>
                  <div class="hover-box">
                      <h4>{{data[2].title}}</h4>
                      <p>{{data[2].title.description}}</p>
                  </div>
              </a>
          </div>
          <div class="image-grid-item">
              <a class="image-box-lg" href="#">
                  <div class="img">
                      <img :src="'/storage/' + data[3].img_path" alt="">
                  </div>
                  <div class="hover-box">
                      <h4>{{data[3].title}}</h4>
                      <p>{{data[3].title.description}}</p>
                  </div>
              </a>
          </div>
          <div class="image-grid-item">
              <a class="image-box-sm" href="#">
                  <div class="txt">
                      <h4>{{data[4].title}}</h4>
                  </div>
                  <div class="img">
                      <img :src="'/storage/' + data[4].img_path" alt="">
                  </div>
                  <div class="hover-box">
                    <h4>{{data[4].title}}</h4>
                    <p>{{data[4].title.description}}</p>
                  </div>
              </a>
              <a class="image-box-sm top-50" href="#">
                <div class="img">
                    <img :src="'/storage/' + data[5].img_path" alt="">
                </div>
                <div class="txt">
                    <h4>{{data[5].title}}</h4>
                </div>
                <div class="hover-box">
                  <h4>{{data[5].title}}</h4>
                  <p>{{data[5].title.description}}</p>
                </div>
              </a>
          </div>
      </div>
      <div class="image-grid-more">
          <a class="btn btn-more" :href="more">{{ moreText }}</a>
      </div>
  </div>

</template>

<script>
    export default {
      props: {
        data: {
          type: Array
        },
        more: {
          type: String
        },
        moreText: {
          type: String,
          default: '查看更多'
        }
      }
    }
</script>

<style lang="less" scoped>
  @screen-xs-max: 768px;

  .image-grid-one {
    margin-top: 35px;
    .image-grid-more {
      text-align: center;
      .btn-more {
        padding: 6px 40px;
        font-size: 16px;
        font-weight: 400;
        border: 1px solid #666;
        border-radius: 4px;
        color: #666;
        transition: all .3s;
        &:hover {
          color: #30a4d7;
          border-color: #30a4d7;
        }
        &:active {
          box-shadow: none;
        }
      }
    }
  }
  // 图片盒子部分
  .image-grid-items-wrap {
    margin-bottom: 35px;
    &:after {
      content: '';
      display: block;
      clear: both;
    }
  }
  .image-grid-item {
    position: relative;
    float: left;
    width: 25%;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    background-color: #f8f8f8;
    overflow: hidden;
    &:after {
      content: '';
      display: block;
      padding-top: 100%;
    }
  }
  // 单个图文小模块
  .top-50 {
    top: 50% !important;
  }
  .image-box-sm {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    width: 100%;
    height: 50%;
    overflow: hidden;
    &:after {
      content: '';
      display: block;
      clear: both;
    }
    .img {
      width: 50%;
      height: 100%;
      overflow: hidden;
      float: left;
      img {
        height: 100%;
        text-align: center;
        -webkit-transition: all .3s;
        transition: all .3s;
      }
    }
    .txt {
      position: relative;
      width: 50%;
      height: 100%;
      float: left;
      h4 {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        padding: 0 10px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        text-align: center;
        line-height: 1.75em;
        font-size: 18px;
        font-weight: 400;
        color: #333;
      }
    }
    .hover-box {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        height: 100%;
        padding-top: 50px;
        text-align: center;
        color: #fff;
        background-color: #30a4d7;
        opacity: 0;
        filter: opacity(0);
        -webkit-transition: all .3s;
        transition: all .3s;
        h4,p {
          font-size: 20px;
          font-weight: 400;
          line-height: 1.75em;
        }
        p {
          font-size: 14px;
        }
    }
    // 动画效果
    &:hover > .img > img {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        -webkit-transform-origin: center;
        transform-origin: center;
    }
    &:hover > .hover-box {
      opacity: 1;
      filter: opacity(100);
      padding-top: 20px;
    }
  }

  .image-box-lg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
    transition: all .3s;
    overflow: hidden;
    .img {
      width: 100%;
      height: 100%;
      overflow: hidden;
      img {
        width: 100%;
        height: 100%;
        text-align: center;
        -webkit-transition: all .3s;
        transition: all .3s;
      }
    }
    .hover-box {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        height: 100%;
        padding-top: 80px;
        text-align: center;
        color: #fff;
        background-color: #30a4d7;
        opacity: 0;
        filter: opacity(0);
        -webkit-transition: all .3s;
        transition: all .3s;
        h4,p {
          font-size: 20px;
          font-weight: 400;
          line-height: 1.75em;
        }
        p {
          font-size: 14px;
        }
    }

    &:hover > .img > img {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        -webkit-transform-origin: center;
        transform-origin: center;
    }
    &:hover > .hover-box {
      opacity: 1;
      filter: opacity(100);
      padding-top: 50px;
    }
  }
  @media (max-width: @screen-xs-max) {
    .image-grid-one {
      display: none;
    }
  }
</style>
