<template>
  <div class="fixed-box">
    <div class="phone-wrap">
      <img src="./img/phone.png" alt=""> <span>022-58095866</span>
    </div>
    <div class="to-up-wrap">
      <a href="#app">
        <img src="./img/up.png" alt=""> <span>返回顶部</span>
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
      }
    }
</script>

<style lang="less" scoped>
  .fixed-box {
    position: fixed;
    right: 0;
    top: 30%;
    z-index: 1;
    width: 200px;
    height: 120px;
    padding: 15px;
    font-size: 20px;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    font-size: 18px;
    border-radius: 5px 0 0 5px;
    .phone-wrap {
      font-size: 16px;
      font-family: 'sans-serif';
      margin-bottom: 20px;
      img {
        width: 35px;
        margin-right: 5px;
      }
    }
    .to-up-wrap {
      a {
        display: block;
        text-decoration: none;
        color: #fff;
        cursor: pointer;
      }
      img {
        width: 30px;
        margin-right: 10px;
      }
    }
  }
</style>
