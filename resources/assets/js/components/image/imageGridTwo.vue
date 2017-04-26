<template>
  <div class="image-grid-two">
      <div class="image-grid-items-wrap">
          <div class="image-grid-item">
              <a class="image-box-lg" href="#">
                  <div class="img">
                      <img src="http://localhost:8080/seek-home/storage/app/uploads/article/c73e691168557074b066bf3427bb8a10.3c970e19bf5a12b4febf08.gif" alt="">
                  </div>
                  <div class="hover-box">
                      <h4>行业解决方案</h4>
                      <p>一些描述啊描述</p>
                  </div>
              </a>
              <a class="image-box-sm top-75" href="#">
                  <div class="img">
                      <img src="http://localhost:8080/seek-home/storage/app/uploads/article/7149c362c03fb621667053bcf9f283f7.144236u599ua11a5veyiyj.jpg.thumb.jpg" alt="">
                  </div>
                  <div class="txt">
                      <h4>行业解决方案</h4>
                  </div>
                  <div class="hover-box">
                      <h4>行业解决方案</h4>
                      <p>一些描述啊描述</p>
                  </div>
              </a>

          </div>
          <div class="image-grid-item">
              <a class="image-box-sm" href="#">
                <div class="txt">
                    <h4>行业解决方案</h4>
                </div>
                <div class="img">
                    <img src="http://localhost:8080/seek-home/storage/app/uploads/article/7149c362c03fb621667053bcf9f283f7.144236u599ua11a5veyiyj.jpg.thumb.jpg" alt="">
                </div>
                <div class="hover-box">
                    <h4>行业解决方案</h4>
                    <p>一些描述啊描述</p>
                </div>
              </a>
              <a class="image-box-lg top-25" href="#">
                  <div class="img">
                      <img src="http://localhost:8080/seek-home/storage/app/uploads/article/c73e691168557074b066bf3427bb8a10.3c970e19bf5a12b4febf08.gif" alt="">
                  </div>
                  <div class="hover-box">
                      <h4>行业解决方案</h4>
                      <p>一些描述啊描述</p>
                  </div>
              </a>
          </div>
          <div class="image-grid-item">
              <a class="image-box-lg" href="#">
                  <div class="img">
                      <img src="http://localhost:8080/seek-home/storage/app/uploads/article/7149c362c03fb621667053bcf9f283f7.144236u599ua11a5veyiyj.jpg.thumb.jpg" alt="">
                  </div>
                  <div class="hover-box">
                      <h4>行业解决方案</h4>
                      <p>一些描述啊描述</p>
                  </div>
              </a>
              <a class="image-box-sm top-75" href="#">
                <div class="txt">
                    <h4>行业解决方案</h4>
                </div>
                <div class="img">
                    <img src="http://localhost:8080/seek-home/storage/app/uploads/article/7149c362c03fb621667053bcf9f283f7.144236u599ua11a5veyiyj.jpg.thumb.jpg" alt="">
                </div>
                <div class="hover-box">
                    <h4>行业解决方案</h4>
                    <p>一些描述啊描述</p>
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
        title: {
          type: String
        },
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

  .image-grid-two {
    margin-top: 35px;
    .image-grid-more {
      text-align: center;
      .btn-more {
        padding: 6px 40px;
        font-size: 16px;
        font-weight: 300;
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
    width: 33.333333%;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    background-color: #f8f8f8;
    overflow: hidden;
    &:after {
      content: '';
      display: block;
      padding-top: 150%;
    }
  }
  // 单个图文小模块
  .top-25 {
    top: 33.33333% !important;
  }
  .top-75 {
    top: 66.66666% !important;
  }
  .image-box-sm {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    width: 100%;
    height: 33.333333%;
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
        font-weight: 300;
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
          font-weight: 300;
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
    height: 66.66666%;
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
          font-weight: 300;
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
