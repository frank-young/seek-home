<template>
  <div class="btn-more">
      <a class="btn btn-more" :href="more">{{ moreText }}</a>
  </div>
</template>

<script>
    export default {
      props: {
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
.btn-more {
  text-align: center;
  .btn-more {
    padding: 6px 40px;
    margin-top: 20px;
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
</style>
