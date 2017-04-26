<template>
    <div class="sub-title">
        <h2>{{ title }}</h2>
    </div>
</template>

<script>
    export default {
      props: {
          title: String
      }
    }
</script>

<style lang="less" scoped>
.sub-title {
  margin-top: 50px;
  margin-bottom: 35px;
  text-align: center;
  h2 {
    position: relative;
    display: inline-block;
    font-size: 28px;
    font-weight: 300;
    color: #333;
    &:before,
    &:after {
      content: '';
      position: absolute;
      top: 50%;
      width: 50px;
      height: 2px;
      margin-top: -1px;
      background-color: #333;
    }
    &:before {
      left: -80px;
    }
    &:after {
      right: -80px;
    }
  }
}
</style>
