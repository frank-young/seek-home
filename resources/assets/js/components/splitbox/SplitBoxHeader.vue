<template>
  <div class="split-box-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h3>{{title}}</h3>
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
        }
      }
    }
</script>

<style lang="less" scoped>
  .split-box-header {
    position: relative;
    padding: 50px;
    margin-bottom: 60px;
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
      font-size: 32px;
      color: #fff;
    }
  }
</style>
