<template>
  <div class="fixed-box" :style="'right:' + width">
    <div class="btn-ctrl" @click="toggle">
      {{toggleText}}
    </div>
    <div class="phone-wrap">
      <a href="/index">首页</a>
    </div>
    <div class="phone-wrap">
      <a href="/example">公司案例</a>
    </div>
    <div class="phone-wrap">
      <a href="/about">关于我们</a>
    </div>
    <div class="phone-wrap">
      <a href="/contact">联系我们</a>
    </div>
    <div class="phone-wrap">
      <img src="./img/phone.png" alt=""> <span>022-58095866</span>
    </div>
    <div class="to-up-wrap">
      <a href="#app">
        <img src="./img/up.png" alt=""> <span>返回顶部</span>
      </a>
    </div>
    <div class="qrcode-wrap">
      <img src="./img/code.jpg" alt="">
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
      data () {
        return {
          width: '-200px',
          flag: false,
          toggleText: '<'
        }
      },
      methods: {
        toggle () {
          if (this.flag) {
            this.width = '0'
            this.flag = false
            this.toggleText = '>'
          } else {
            this.width = '-200px'
            this.flag = true
            this.toggleText = '<'
          }
        }
      }
    }
</script>

<style lang="less" scoped>
  .fixed-box {
    position: fixed;
    right: -200px;
    top: 26%;
    z-index: 1;
    width: 200px;
    height: 490px;
    padding: 15px;
    font-size: 20px;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    font-size: 18px;
    border-radius: 0 0 0 5px;
    -webkit-transition: all .3s;
    transition: all .3s;
    .btn-ctrl {
      position: absolute;
      top: 0;
      left: -50px;
      z-index: 1;
      width: 50px;
      height: 60px;
      line-height: 60px;
      border-radius: 5px 0 0 5px;
      text-align: center;
      font-size: 30px;
      background-color: rgba(0, 0, 0, 0.6);
      cursor: pointer;
    }
    .phone-wrap {
      font-size: 16px;
      font-family: 'sans-serif';
      margin-bottom: 20px;
      img {
        width: 35px;
        margin-right: 5px;
      }
    }
    a {
      display: block;
      text-decoration: none;
      color: #fff;
      cursor: pointer;
    }
    .to-up-wrap {
      img {
        width: 30px;
        margin-right: 10px;
      }
    }
    .qrcode-wrap {
      margin-top: 20px;
      img {
        width: 100%;
        height: 100%;
      }
    }
  }
</style>
