<template>
    <div class="icon-card">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3>通过国际化的设计和品牌管理之道，<br>
                帮助客户构建卓越的品牌体系，协助更多的企业塑造国际化的品牌形象，<br>
                使企业在业界树立独特的品牌形象。</h3>
            </div>
          </div>
          <div class="row">
              <div class="col-sm-4">
                  <div class="icon-card-item">
                      <i class="icon-design"></i>
                      <h4>品牌策略设计</h4>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="icon-card-item">
                      <i class="icon-cafe"></i>
                      <h4>创新创业咖啡</h4>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="icon-card-item">
                      <i class="icon-envest"></i>
                      <h4>创投平台运营</h4>
                  </div>
              </div>
          </div>
      </div>
    </div>
</template>

<script>
    export default {
      name: 'icon-card',
      props: {
          data: Array
      }
    }
</script>

<style lang="less" scoped>
  .icon-card {
    padding-bottom: 80px;
    h3 {
      line-height: 1.8em;
      text-align: center;
      font-size: 24px;
      font-weight: 300;
      color: #333;
    }
    .icon-card-item {
      margin-top: 35px;
      padding: 30px 0;
      -webkit-transition: all .3s;
      transition: all .3s;
      h4 {
        margin-top: 30px;
        font-size: 18px;
        font-weight: 400;
        color: #333;
        text-align: center;
        -webkit-transition: all .3s;
        transition: all .3s;
      }
      &:hover {
        background-color: #30a4d7;
      }
      &:hover {
        i {
          -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
        }
        .icon-design {
          background-image: url('./img/design_hover.png');
        }
        .icon-cafe {
          background-image: url('./img/cafe_hover.png');
        }
        .icon-envest {
          background-image: url('./img/envest_hover.png');

        }
        h4 {
          color: #fff;
        }
      }
      i {
        display: block;
        width: 80px;
        height: 80px;
        margin: 0 auto;
        background-size: 80px;
        background-repeat: no-repeat;
        background-position: center;
        -webkit-transition: all .3s;
        transition: all .3s;
      }
      .icon-design {
        background-image: url('./img/design.png');
      }
      .icon-cafe {
        background-image: url('./img/cafe.png');
      }
      .icon-envest {
        background-image: url('./img/envest.png');

      }
    }
  }
</style>
