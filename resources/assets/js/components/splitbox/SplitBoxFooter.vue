<template>
  <div class="split-box-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
              <img class="qrcode" src="./img/code.jpg" alt="qrcode">
              <p>扫一扫 查看更多详情</p>
            </div>
            <div class="col-md-10">
              <h3>{{title}}</h3>
              <h4>{{text}}</h4>
            </div>
        </div>
    </div>
  </div>

</template>

<script>
    export default {
      props: {
        title: {
          type: String
        },
        text: {
          type: String
        }
      }
    }
</script>

<style lang="less" scoped>
  .split-box-footer {
    position: relative;
    padding: 150px;
    margin-top: 100px;
    background-image: url('./img/foot.jpg');
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center center;
    overflow: hidden;
    &:after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
    }
    h3 {
      position: relative;
      z-index: 2;
      margin: 0;
      padding: 0;
      line-height: 1em;
      font-size: 36px;
      color: #fff;
      // text-align: center;
    }
    h4 {
      position: relative;
      z-index: 2;
      margin: 30px 0 0 0;
      padding: 0;
      line-height: 1em;
      font-size: 42px;
      color: #fff;
      // text-align: center;
    }
    .qrcode {
      position: relative;
      z-index: 2;
      width: 100%;
    }
    p {
      position: relative;
      z-index: 2;
      line-height: 1.7em;
      margin: 20px 0 0 0;
      padding: 0;
      line-height: 1em;
      font-size: 16px;
      color: #fff;
      text-align: center;
    }
  }
</style>
