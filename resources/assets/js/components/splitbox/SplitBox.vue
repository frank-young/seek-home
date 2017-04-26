<template>
  <div class="split-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h3>{{text}}</h3>
            </div>
        </div>
    </div>
  </div>

</template>

<script>
    export default {
      props: {
        text: {
          type: String
        }
      }
    }
</script>

<style lang="less">
  .split-box {
    padding: 60px;
    background-color: #30a4d7;
    h3 {
      margin: 0;
      padding: 0;
      line-height: 1em;
      font-size: 42px;
      color: #fff;
      text-align: center;
    }
  }
</style>
